<header>

    <nav class="bg-white border-gray-200 shadow-sm">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('https://flowbite.com/docs/images/logo.svg') }}" class="h-8"
                     alt="Flowbite Logo"/>
                <span class="self-center text-2xl font-semibold whitespace-nowrap">Quizlet</span>
            </a>
            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                <a href="{{ route('login') }}"
                   class="text-sm text-white font-bold uppercase bg-blue-700 px-4 py-2 rounded-lg
                   hover:bg-blue-800">Login</a>
                <a href="{{ '' }}"
                   class="text-sm text-black font-bold uppercase bg-gray-200 px-4 py-2 rounded-lg
                   hover:bg-blue-800 hover:text-white">Register</a>
            </div>
        </div>
    </nav>

</header>