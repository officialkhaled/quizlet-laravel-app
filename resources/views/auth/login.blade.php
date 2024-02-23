<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <form class="max-w-sm mx-auto">
        @csrf
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900
            dark:text-white">Email</label>
            <input type="email" id="email"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="name@gmail.com" required/>
        </div>
        <div class="mb-5">
            <label for="password"
                   class="block mb-2 text-sm font-medium text-gray-900
                   dark:text-white">Password</label>
            <input type="password" id="password"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required/>
        </div>
        <div class="flex items-start mb-5">
            <div class="flex items-center h-5">
                <input id="status" type="checkbox" value=""
                       class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3
                       focus:ring-blue-300" required/>
            </div>
            <label for="status" class="ms-2 text-sm font-medium text-gray-900">Remember me</label>
        </div>
        <div class="flex justify-between items-center gap-3">
            <span>
                Don't have an account? <a href="{{ route('register') }}" class="text-blue-600
                font-semibold
                hover:text-blue-800 hover:underline"> Register</a>
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

</x-guest-layout>
