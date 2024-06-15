@extends('layoutsuser.profilenavbar')

@section('content')
<div class="container mx-auto p-4">
    <div class="max-w-md mx-auto bg-white p-5 rounded-lg shadow-lg">
        <div class="text-center mb-4">
            <h2 class="text-2xl font-bold">{{ __('User Profile') }}</h2>
        </div>

        @if(session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif

        <form method="POST" action="{{ route('user.profile.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="username" class="block text-gray-700">{{ __('Username') }}</label>
                <input id="username" type="text" class="form-input mt-1 p-2 block w-full border border-gray-300 rounded-md @error('username') border-red-500 @enderror" name="username" value="{{ Auth::guard('user')->user()->username }}" required autocomplete="username" autofocus>
                @error('username')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">{{ __('New Password') }}</label>
                <input id="password" type="password" class="form-input mt-1 p-2 block w-full border border-gray-300 rounded-lg @error('password') border-red-500 @enderror" name="password" autocomplete="new-password">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password-confirm" class="block text-gray-700">{{ __('Confirm New Password') }}</label>
                <input id="password-confirm" type="password" class="form-input mt-1 p-2 block w-full border border-gray-300 rounded-lg" name="password_confirmation" autocomplete="new-password">
            </div>

            <div class="mb-4">
                <label for="profile_picture" class="block text-gray-700">{{ __('Profile Picture') }}</label>
                <input id="profile_picture" type="file" class="form-input mt-1 p-2 block w-full border border-gray-300 rounded-lg" name="profile_picture">
            </div>

            <div class="mb-4">
                <label for="foto_ktp" class="block text-gray-700">{{ __('Foto KTP') }}</label>
                <input id="foto_ktp" type="file" class="form-input mt-1 p-2 block w-full border border-gray-300 rounded-lg" name="foto_ktp">
            </div>

            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg">
                {{ __('Update Profile') }}
            </button>
        </form>

        <div class="mt-6">
            <p><strong>{{ __('Nama Lengkap:') }}</strong> {{ Auth::guard('user')->user()->nama_lengkap }}</p>
            <p><strong>{{ __('NIK:') }}</strong> {{ Auth::guard('user')->user()->nik }}</p>
            <p><strong>{{ __('Tanggal Lahir:') }}</strong> {{ Auth::guard('user')->user()->tanggal_lahir }}</p>
            <p><strong>{{ __('Alamat:') }}</strong> {{ Auth::guard('user')->user()->alamat }}</p>
        </div>

        <a href="{{ route('user.dashboard') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg mt-4 inline-block">{{ __('Back to Dashboard') }}</a>
    </div>
</div>
@endsection
