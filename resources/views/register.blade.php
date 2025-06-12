@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-green-50 py-8">
    <div class="bg-white/90 p-8 rounded-2xl shadow-2xl w-full max-w-lg animate-fade-in border border-blue-100">
        <h2 class="text-4xl font-extrabold mb-10 text-center text-blue-700 tracking-tight drop-shadow">Form Pendaftaran</h2>
        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded-lg mb-6 text-center shadow animate-bounce-in">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('register.store') }}" x-data="{ loading: false }" @submit="loading = true">
            @csrf
            <div class="mb-6">
                <label for="name" class="block text-base font-semibold text-blue-900 mb-2">Nama</label>
                <div class="relative">
                    <span class="absolute left-3 top-2.5 text-blue-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </span>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Masukkan nama lengkap" class="pl-10 pr-4 py-2 w-full rounded-lg border border-blue-200 bg-blue-50 focus:bg-white shadow focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition @error('name') border-red-400 bg-red-50 @enderror">
                </div>
                @error('name')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block text-base font-semibold text-blue-900 mb-2">Email</label>
                <div class="relative">
                    <span class="absolute left-3 top-2.5 text-blue-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m8 0a4 4 0 11-8 0 4 4 0 018 0zm2 4v1a2 2 0 01-2 2H6a2 2 0 01-2-2v-1" /></svg>
                    </span>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" class="pl-10 pr-4 py-2 w-full rounded-lg border border-blue-200 bg-blue-50 focus:bg-white shadow focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition @error('email') border-red-400 bg-red-50 @enderror">
                </div>
                @error('email')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-8">
                <label for="address" class="block text-base font-semibold text-blue-900 mb-2">Alamat</label>
                <div class="relative">
                    <span class="absolute left-3 top-2.5 text-blue-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12.414a2 2 0 00-2.828 0l-4.243 4.243M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    </span>
                    <input type="text" id="address" name="address" value="{{ old('address') }}" placeholder="Masukkan alamat" class="pl-10 pr-4 py-2 w-full rounded-lg border border-blue-200 bg-blue-50 focus:bg-white shadow focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition @error('address') border-red-400 bg-red-50 @enderror">
                </div>
                @error('address')
                    <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="w-full flex justify-center items-center gap-2 bg-gradient-to-r from-blue-500 via-blue-600 to-green-400 text-white font-bold text-lg py-3 px-4 rounded-xl shadow-lg hover:from-blue-600 hover:to-green-500 focus:outline-none focus:ring-2 focus:ring-blue-300 transition-all duration-200 disabled:opacity-60" :disabled="loading">
                <svg x-show="loading" class="animate-spin h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path></svg>
                <span x-text="loading ? 'Mendaftar...' : 'Daftar'"></span>
            </button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endpush
