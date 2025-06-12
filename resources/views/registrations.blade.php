@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-green-50 py-8">
    <div class="bg-white/90 p-8 rounded-2xl shadow-2xl w-full max-w-2xl border border-blue-100">
        <h2 class="text-3xl font-extrabold mb-8 text-center text-blue-700">Daftar Pendaftar</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow text-left">
                <thead class="bg-blue-100">
                    <tr>
                        <th class="py-3 px-4 font-semibold text-blue-900">#</th>
                        <th class="py-3 px-4 font-semibold text-blue-900">Nama</th>
                        <th class="py-3 px-4 font-semibold text-blue-900">Email</th>
                        <th class="py-3 px-4 font-semibold text-blue-900">Alamat</th>
                        <th class="py-3 px-4 font-semibold text-blue-900">Tanggal Daftar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($registrations as $reg)
                        <tr class="border-b hover:bg-blue-50 transition">
                            <td class="py-2 px-4">{{ $loop->iteration }}</td>
                            <td class="py-2 px-4">{{ $reg->name }}</td>
                            <td class="py-2 px-4">{{ $reg->email }}</td>
                            <td class="py-2 px-4">{{ $reg->address }}</td>
                            <td class="py-2 px-4">{{ $reg->created_at->format('d M Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-6 text-center text-gray-400">Belum ada pendaftar.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-8 text-center">
            <a href="{{ route('register.create') }}" class="inline-block px-6 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition">Kembali ke Form</a>
        </div>
    </div>
</div>
@endsection
