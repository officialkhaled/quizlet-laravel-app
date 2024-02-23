<x-guest-layout>

    <form method="POST" action="{{ route('register') }}" class="max-w-sm mx-auto">
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300
            text-gray-900
             text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="Full name" required/>
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
            <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300
            text-gray-900
             text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="Email@gmail.com" required/>
        </div>

        <div class="mb-5">
            <label for="username" class="block mb-2 text-sm font-medium
            text-gray-900">Username</label>
            <input type="text" id="username" name="username" class="bg-gray-50 border
            border-gray-300 text-gray-900
             text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="Username" required/>
        </div>

        <div class="mb-5">
            <label for="password"
                   class="block mb-2 text-sm font-medium text-gray-900">Password</label>
            <input type="password" id="password" name="password"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="Password" required/>
        </div>

        <div class="mb-5">
            <label for="password_confirmation"
                   class="block mb-2 text-sm font-medium text-gray-900">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="Confirm password" required/>
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
                Register
            </button>
        </div>
    </form>

</x-guest-layout>
