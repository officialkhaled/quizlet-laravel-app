<!DOCTYPE html>
<html lang="en" class="scroll-smooth focus:scroll-auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quizlet App</title>

    @include('components.common.imports')

</head>
<body class="antialiased">
@include('components.common.header')

<main>
    {{-- Hero Section --}}
    <section class="bg-white">
        <div
            class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none
                md:text-5xl xl:text-6xl ">
                    Welcome to <span class="text-blue-700 underline">Quizlet</span> Test Your
                    Knowledge!</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl ">
                    Dive into a world of learning with endless quizzes across all your favorite
                    topics.</p>
                <button data-modal-target="authentication-modal"
                        data-modal-toggle="authentication-modal"
                        class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base
                   font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800
                   focus:ring-4 focus:ring-primary-300">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('asset/img/logo/2.png') }}" alt="hero-image">
            </div>
        </div>
    </section>

    {{-- Cards --}}
    <div class="bg-slate-100">
        <section class="mx-auto max-w-screen-xl h-96 flex justify-center items-center gap-14">

            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('asset/img/banner.png') }}"
                             class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                             alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('asset/img/banner.png') }}"
                             class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                             alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('asset/img/banner.png') }}"
                             class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                             alt="...">
                    </div>
                </div>

                <!-- Slider indicators -->
                <div
                    class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-2 h-2 rounded-full" aria-current="true"
                            aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-2 h-2 rounded-full" aria-current="false"
                            aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-2 h-2 rounded-full" aria-current="false"
                            aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>

                <!-- Slider controls -->
                <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-white/15 dark:bg-gray-800/30 group-hover:bg-white/50 group-focus:ring-2 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-2 h-2 text-white dark:text-gray-800 rtl:rotate-180"
                             aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round"
                                  stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-white/15 dark:bg-gray-800/30 group-hover:bg-white/50 group-focus:ring-2 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-2 h-2 text-white dark:text-gray-800 rtl:rotate-180"
                             aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round"
                                  stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </section>
    </div>

    {{-- Teachers - Feedback --}}
    <section class="mx-auto max-w-screen-xl my-28">
        <div
            class="grid mb-8 border border-gray-200 rounded-lg shadow-sm md:mb-12 md:grid-cols-2 bg-white">
            <figure
                class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8">
                    <h3 class="text-lg font-semibold text-gray-900">Very easy this
                        was to integrate</h3>
                    <p class="my-4">If you care for your time, I hands down would go with this."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center ">
                    <img class="rounded-full w-9 h-9"
                         src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                         alt="profile picture">
                    <div
                        class="space-y-0.5 font-medium text-left rtl:text-right ms-3">
                        <div>Bonnie Green</div>
                        <div class="text-sm text-gray-500">Developer at Open
                            AI
                        </div>
                    </div>
                </figcaption>
            </figure>
            <figure
                class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation
                        for any project</h3>
                    <p class="my-4">Designing with Figma components that can be easily translated to
                        the utility classes of Tailwind CSS is a huge timesaver!"</p>
                </blockquote>
                <figcaption class="flex items-center justify-center ">
                    <img class="rounded-full w-9 h-9"
                         src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                         alt="profile picture">
                    <div
                        class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                        <div>Roberta Casas</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Lead designer at
                            Dropbox
                        </div>
                    </div>
                </figcaption>
            </figure>
            <figure
                class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-es-lg md:border-b-0 md:border-e dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing
                        workflow</h3>
                    <p class="my-4">Aesthetically, the well designed components are beautiful and
                        will undoubtedly level up your next application."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center ">
                    <img class="rounded-full w-9 h-9"
                         src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                         alt="profile picture">
                    <div
                        class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                        <div>Jese Leos</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Software Engineer at
                            Facebook
                        </div>
                    </div>
                </figcaption>
            </figure>
            <figure
                class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-b-lg md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient
                        Collaborating</h3>
                    <p class="my-4">You have many examples that can be used to create a fast
                        prototype for your team."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center ">
                    <img class="rounded-full w-9 h-9"
                         src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                         alt="profile picture">
                    <div
                        class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                        <div>Joseph McFall</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">CTO at Google</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </section>

    {{-- Login Modal --}}
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Sign in to our platform
                    </h3>
                    <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round"
                                  stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form method="POST" action="{{ route('login') }}" class="">
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
                            @if (Route::has('password.request'))
                                <a class=" hover:underline text-sm text-gray-600 hover:text-gray-900 rounded-md
                    focus:outline-none"
                                   href="{{ route('password.request') }}">
                                    Forgot your password?
                                </a>
                            @endif
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
                </div>
            </div>
        </div>
    </div>

</main>

@include('components.common.footer')

@include('components.common.scripts')

<script>

    /* Loader */
    window.addEventListener('beforeunload', function (e) {
        document.getElementById('loadingScreen').style.display = 'flex';
    });
    window.addEventListener('load', function (e) {
        document.getElementById('loadingOverlay').style.display = 'none';
    });

</script>

</body>
</html>
