<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Registration;
use Illuminate\Support\Facades\Mail;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function registration_form_can_be_accessed()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Form Pendaftaran');
    }

    /** @test */
    public function user_can_register_and_data_saved_and_email_sent()
    {
        Mail::fake();

        $data = [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'address' => 'Jl. Testing No. 1',
        ];

        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
        $response = $this->post('/', $data);
        $response->assertRedirect('/');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('registrations', [
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'address' => 'Jl. Testing No. 1',
        ]);

        // Pastikan email mailable RegistrationSuccess benar-benar terkirim ke email yang didaftarkan
        Mail::assertSent(\App\Mail\RegistrationSuccess::class, function ($mail) use ($data) {
            return $mail->hasTo($data['email']);
        });
    }

    /** @test */
    public function registration_validation_is_enforced()
    {
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
        $response = $this->post('/', [
            'name' => '',
            'email' => 'not-an-email',
            'address' => '',
        ]);
        $response->assertSessionHasErrors(['name', 'email', 'address']);
    }
}
