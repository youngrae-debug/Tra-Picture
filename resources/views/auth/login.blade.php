@extends('layouts.layout')

@section('title', 'Login')

@section('content')
    <!-- 로그인 섹션 -->
    <section class="flex justify-center items-center h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white p-8 shadow-md rounded-lg">
            <h1 class="text-3xl font-bold text-gray-900 text-center mb-6">Login</h1>

            @if (session('status'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- 이메일 입력 -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email Address</label>
                    <input type="email" name="email" id="email" required class="w-full p-3 border border-gray-300 rounded-lg mt-1 @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- 비밀번호 입력 -->
                <div class="mb-6">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required class="w-full p-3 border border-gray-300 rounded-lg mt-1 @error('password') border-red-500 @enderror">
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- 기억하기 -->
                <div class="flex items-center justify-between mb-6">
                    <label for="remember" class="flex items-center text-gray-700">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        Remember Me
                    </label>
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">Forgot your password?</a>
                </div>

                <!-- 로그인 버튼 -->
                <div>
                    <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700">Login</button>
                </div>
            </form>

            <p class="mt-6 text-center text-gray-600">Don't have an account? 
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Sign up</a>
            </p>
        </div>
    </section>
@endsection
