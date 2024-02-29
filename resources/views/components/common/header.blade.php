<header>
    @guest
        <nav class="bg-white border-gray-200 shadow-sm">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('asset/img/logo/1.png') }}" class="h-10"
                         alt="Flowbite Logo"/>
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap">Quizlet</span>
                </a>
                <div class="flex items-center space-x-2 rtl:space-x-reverse">

                    <a href="{{ route('login') }}"
                       class="text-sm text-black font-bold uppercase bg-gray-100 hover:bg-gray-300
                       px-4 py-2 rounded-lg">Login</a>
                    <a href="{{ route('register') }}"
                       class="text-sm text-white font-bold uppercase bg-blue-700 px-4 py-2
                       rounded-lg hover:bg-blue-800">Register</a>

                    {{-- Logout button --}}
                    {{--@auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-sm text-white font-bold uppercase bg-blue-700 px-4 py-2
                           rounded-lg hover:bg-blue-800">
                                Logout
                            </button>
                        </form>
                    @endauth--}}

                </div>
            </div>
        </nav>
    @endguest

    @auth

    @endauth
</header>
