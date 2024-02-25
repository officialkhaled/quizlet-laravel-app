<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar"
        aria-controls="default-sidebar" type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden
        hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
         xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
              d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button> {{-- Mobile-view Button --}}

@if(Auth::check() && Auth::user()->isAdmin())
    <aside id="default-sidebar"
           class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
           aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center ps-2 mb-7">
                        <img src="{{ asset('asset/img/logo/1.png') }}" class="h-6 me-1 sm:h-7"
                             alt="Flowbite Logo"/>
                        <span
                            class="self-center text-xl font-semibold whitespace-nowrap">Quizlet</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard') }}"
                       class="flex items-center p-2 rounded-lg group {{ request()->routeIs('admin.dashboard') ?
                    'bg-gray-200 text-gray-900' : 'text-gray-900 hover:bg-gray-100' }}">
                        <svg
                            class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                            clip-rule="evenodd"
                            fill="currentColor" fill-rule="evenodd" stroke-linejoin="round"
                            stroke-miterlimit="2" viewBox="0 0 22 21"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m11.6 11c0-.552-.448-1-1-1-1.655 0-4.945 0-6.6 0-.552 0-1 .448-1 1v9c0 .552.448 1 1 1h6.6c.552 0 1-.448 1-1 0-2.092 0-6.908 0-9zm9.4 6c0-.552-.448-1-1-1h-6c-.538 0-1 .477-1 1v3c0 .552.448 1 1 1h6c.552 0 1-.448 1-1zm0-13c0-.552-.448-1-1-1-1.537 0-4.463 0-6 0-.552 0-1 .448-1 1v9.6c0 .552.448 1 1 1h6c.552 0 1-.448 1-1 0-2.194 0-7.406 0-9.6zm-9.4 0c0-.552-.448-1-1-1-1.655 0-4.945 0-6.6 0-.552 0-1 .448-1 1v3.6c0 .552.448 1 1 1h6.6c.552 0 1-.448 1-1 0-1.017 0-2.583 0-3.6z"
                                fill-rule="nonzero"/>
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('profile.edit') }}"
                       class="flex items-center p-2 rounded-lg group {{ request()->routeIs('profile.edit') ?
                    'bg-gray-200 text-gray-900' : 'text-gray-900 hover:bg-gray-100' }}">
                        <svg
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75
                        group-hover:text-gray-900"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24"
                            viewBox="0 0 24 24">
                            <path
                                d="M10.644 17.08c2.866-.662 4.539-1.241 3.246-3.682-3.932-7.427-1.042-11.398 3.111-11.398 4.235 0 7.054 4.124 3.11 11.398-1.332 2.455.437 3.034 3.242 3.682 2.483.574 2.647 1.787 2.647 3.889v1.031h-18c0-2.745-.22-4.258 2.644-4.92zm-12.644 4.92h7.809c-.035-8.177 3.436-5.313 3.436-11.127 0-2.511-1.639-3.873-3.748-3.873-3.115 0-5.282 2.979-2.333 8.549.969 1.83-1.031 2.265-3.181 2.761-1.862.43-1.983 1.34-1.983 2.917v.773z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('create-quiz') }}"
                       class="flex items-center p-2 rounded-lg group {{ request()->routeIs
                       ('create-quiz') ?
                    'bg-gray-200 text-gray-900' : 'text-gray-900 hover:bg-gray-100' }}">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75
                        group-hover:text-gray-900" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Create New Quiz</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('view-quiz') }}"
                       class="flex items-center p-2 rounded-lg group {{ request()->routeIs
                       ('view-quiz') ?
                    'bg-gray-200 text-gray-900' : 'text-gray-900 hover:bg-gray-100' }}">
                        <svg
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75
                        group-hover:text-gray-900" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
                    24 24">
                            <path
                                d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 18.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25c.691 0 1.25.56 1.25 1.25s-.559 1.25-1.25 1.25zm1.961-5.928c-.904.975-.947 1.514-.935 2.178h-2.005c-.007-1.475.02-2.125 1.431-3.468.573-.544 1.025-.975.962-1.821-.058-.805-.73-1.226-1.365-1.226-.709 0-1.538.527-1.538 2.013h-2.01c0-2.4 1.409-3.95 3.59-3.95 1.036 0 1.942.339 2.55.955.57.578.865 1.372.854 2.298-.016 1.383-.857 2.291-1.534 3.021z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">View Quiz List</span>
                    </a>
                </li>

                <li>
                    <a class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="flex items-center text-gray-900 rounded-lg
                    hover:bg-gray-100 group">
                                <svg
                                    class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75
                            group-hover:text-gray-900"
                                    fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M16 13v-4l8 7-8 7v-4h-6v-6h6zm0-6v-6h-16v18l8-7v-9h6v4h2z"/>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                            </button>
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
@endif

@if(Auth::check() && Auth::user()->isUser())
    <aside id="default-sidebar"
           class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
           aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('user.dashboard') }}" class="flex items-center ps-2 mb-7">
                        <img src="{{ asset('asset/img/logo/1.png') }}" class="h-6 me-1 sm:h-7"
                             alt="Flowbite Logo"/>
                        <span
                            class="self-center text-xl font-semibold whitespace-nowrap">Quizlet</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.dashboard') }}"
                       class="flex items-center p-2 rounded-lg group {{ request()->routeIs('user.dashboard') ?
                    'bg-gray-200 text-gray-900' : 'text-gray-900 hover:bg-gray-100' }}">
                        <svg
                            class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                            clip-rule="evenodd"
                            fill="currentColor" fill-rule="evenodd" stroke-linejoin="round"
                            stroke-miterlimit="2" viewBox="0 0 22 21"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m11.6 11c0-.552-.448-1-1-1-1.655 0-4.945 0-6.6 0-.552 0-1 .448-1 1v9c0 .552.448 1 1 1h6.6c.552 0 1-.448 1-1 0-2.092 0-6.908 0-9zm9.4 6c0-.552-.448-1-1-1h-6c-.538 0-1 .477-1 1v3c0 .552.448 1 1 1h6c.552 0 1-.448 1-1zm0-13c0-.552-.448-1-1-1-1.537 0-4.463 0-6 0-.552 0-1 .448-1 1v9.6c0 .552.448 1 1 1h6c.552 0 1-.448 1-1 0-2.194 0-7.406 0-9.6zm-9.4 0c0-.552-.448-1-1-1-1.655 0-4.945 0-6.6 0-.552 0-1 .448-1 1v3.6c0 .552.448 1 1 1h6.6c.552 0 1-.448 1-1 0-1.017 0-2.583 0-3.6z"
                                fill-rule="nonzero"/>
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('profile.edit') }}"
                       class="flex items-center p-2 rounded-lg group {{ request()->routeIs('profile.edit') ?
                    'bg-gray-200 text-gray-900' : 'text-gray-900 hover:bg-gray-100' }}">
                        <svg
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75
                        group-hover:text-gray-900"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24"
                            viewBox="0 0 24 24">
                            <path
                                d="M10.644 17.08c2.866-.662 4.539-1.241 3.246-3.682-3.932-7.427-1.042-11.398 3.111-11.398 4.235 0 7.054 4.124 3.11 11.398-1.332 2.455.437 3.034 3.242 3.682 2.483.574 2.647 1.787 2.647 3.889v1.031h-18c0-2.745-.22-4.258 2.644-4.92zm-12.644 4.92h7.809c-.035-8.177 3.436-5.313 3.436-11.127 0-2.511-1.639-3.873-3.748-3.873-3.115 0-5.282 2.979-2.333 8.549.969 1.83-1.031 2.265-3.181 2.761-1.862.43-1.983 1.34-1.983 2.917v.773z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('welcome-quiz') }}"
                       class="flex items-center p-2 rounded-lg group {{ request()->routeIs('welcome-quiz') ?
                    'bg-gray-200 text-gray-900' : 'text-gray-900 hover:bg-gray-100' }}">
                        <svg
                            class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75
                        group-hover:text-gray-900" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
                    24 24">
                            <path
                                d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 18.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25c.691 0 1.25.56 1.25 1.25s-.559 1.25-1.25 1.25zm1.961-5.928c-.904.975-.947 1.514-.935 2.178h-2.005c-.007-1.475.02-2.125 1.431-3.468.573-.544 1.025-.975.962-1.821-.058-.805-.73-1.226-1.365-1.226-.709 0-1.538.527-1.538 2.013h-2.01c0-2.4 1.409-3.95 3.59-3.95 1.036 0 1.942.339 2.55.955.57.578.865 1.372.854 2.298-.016 1.383-.857 2.291-1.534 3.021z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Attempt Quiz</span>
                    </a>
                </li>

                <li>
                    <a class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="flex items-center text-gray-900 rounded-lg
                    hover:bg-gray-100 group">
                                <svg
                                    class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75
                            group-hover:text-gray-900"
                                    fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M16 13v-4l8 7-8 7v-4h-6v-6h6zm0-6v-6h-16v18l8-7v-9h6v4h2z"/>
                                </svg>
                                <span class="flex-1 ms-3 whitespace-nowrap">Logout</span>
                            </button>
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
@endif

