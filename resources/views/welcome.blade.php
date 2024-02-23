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
                <a href="{{ route('login') }}"
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
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('asset/img/logo/2.png') }}" alt="hero-image">
            </div>
        </div>
    </section>

    {{-- Cards --}}
    <div class="bg-slate-100">
        <section class="mx-auto max-w-screen-xl h-96 flex justify-center items-center gap-14">
            <div
                class="flex flex-col gap-4 items-center max-w-sm p-6 bg-white border h-72
                border-gray-200 rounded-lg shadow-lg">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-gray-900">
                    Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-gray-700 text-center">Here are the biggest
                    enterprise technology acquisitions of 2021 so far, in reverse chronological
                    order.</p>
                <a href="#"
                   class="flex justify-center px-8 items-center py-2 text-sm font-medium text-center
                   text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Read more
                </a>
            </div>

            <div
                class="flex flex-col gap-4 items-center max-w-sm p-6 bg-white border h-72
                border-gray-200 rounded-lg shadow-lg">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-gray-900">
                    Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-gray-700 text-center">Here are the biggest
                    enterprise technology acquisitions of 2021 so far, in reverse chronological
                    order.</p>
                <a href="#"
                   class="flex justify-center px-8 items-center py-2 text-sm font-medium text-center
                   text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Read more
                </a>
            </div>

            <div
                class="flex flex-col gap-4 items-center max-w-sm p-6 bg-white border h-72
                border-gray-200 rounded-lg shadow-lg">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-gray-900">
                    Noteworthy technology acquisitions 2021</h5>
                <p class="mb-3 font-normal text-gray-700 text-center">Here are the biggest
                    enterprise technology acquisitions of 2021 so far, in reverse chronological
                    order.</p>
                <a href="#"
                   class="flex justify-center px-8 items-center py-2 text-sm font-medium text-center
                   text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Read more
                </a>
            </div>

        </section>
    </div>

    {{--  --}}
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
</main>

@include('components.common.footer')

</body>
</html>
