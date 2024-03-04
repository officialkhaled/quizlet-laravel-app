@extends('index')
@section('content')

    <x-guest-layout>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <form method="POST" action="{{ route('login') }}" class="max-w-sm mx-auto">
            @csrf
            <div class="mb-5">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900
            dark:text-white">Username</label>
                <input type="text" id="username" name="username"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                       placeholder="Username" required/>
                <x-input-error :messages="$errors->get('username')" class="mt-2"/>
            </div>
            <div class="mb-5">
                <label for="password"
                       class="block mb-2 text-sm font-medium text-gray-900
                   dark:text-white">Password</label>
                <input type="password" id="password" name="password"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                       placeholder="Password" required/>
                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center h-5">
                    @if (Route::has('password.request'))
                        <a class=" hover:underline text-sm text-gray-600 hover:text-gray-900 rounded-md
                    focus:outline-none"
                           href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                </div>
            </div>
            <div class="flex justify-between items-center gap-3">
            <span>
                Don't have an account? <a href="{{ route('register') }}" class="text-blue-600
                font-semibold hover:text-blue-800 hover:underline"> Register</a>
            </span>

                <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                    focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full
                    sm:w-auto px-5 py-2.5 text-center">
                    Login
                </button>
            </div>
        </form>

    </x-guest-layout>

@endsection
