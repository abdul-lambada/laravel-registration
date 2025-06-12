<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrasi Berhasil</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f8fafc; color: #222;">
    <div style="max-width: 500px; margin: 40px auto; background: #fff; border-radius: 10px; padding: 32px; box-shadow: 0 2px 12px #0001;">
        <h2 style="color: #2563eb; text-align: center;">Registrasi Berhasil!</h2>
        <p>Halo <b>{{ $registration->name }}</b>,</p>
        <p>Terima kasih telah melakukan registrasi.</p>
        <p>Salam,<br>Tim {{ config('app.name') }}</p>
    </div>
</body>
</html>
