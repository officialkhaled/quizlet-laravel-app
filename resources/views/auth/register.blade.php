<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="max-w-sm mx-auto">
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900
             text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="Full name" required/>
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900
             text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="name@gmail.com" required/>
        </div>

        <div class="mb-5">
            <label for="usertype" class="block mb-2 text-sm font-medium
            text-gray-900">Usertype</label>
            <input type="text" id="usertype" class="bg-gray-50 border border-gray-300 text-gray-900
             text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="admin/user" required/>
        </div>

        <div class="mb-5">
            <label for="password"
                   class="block mb-2 text-sm font-medium text-gray-900">Password</label>
            <input type="password" id="password"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required/>
        </div>
        <div class="flex items-start mb-5">
            <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value=""
                       class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3
                       focus:ring-blue-300" required/>
            </div>
            <label for="remember" class="ms-2 text-sm font-medium text-gray-900">Remember me</label>
        </div>
        <div class="flex justify-between items-center gap-3">
            <span>
                Already have an account? <a href="{{ route('login') }}" class="text-blue-600 font-semibold
                hover:text-blue-800 hover:underline"> Login</a>
            </span>

            <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                focus:outline-none
                focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5
                py-2.5 text-center">
                Submit
            </button>
        </div>
    </form>

    {{--<form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')"/>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                          :value="old('name')" required autofocus autocomplete="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                          :value="old('email')" required autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')"/>

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
               href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>--}}

</x-guest-layout>
