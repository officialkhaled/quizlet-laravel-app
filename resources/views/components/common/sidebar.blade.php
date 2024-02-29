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

{{-- Admin --}}
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
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75
                        group-hover:text-gray-900"
                             fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24"
                             viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 22c-3.123 0-5.914-1.441-7.749-3.69.259-.588.783-.995 1.867-1.246 2.244-.518 4.459-.981 3.393-2.945-3.155-5.82-.899-9.119 2.489-9.119 3.322 0 5.634 3.177 2.489 9.119-1.035 1.952 1.1 2.416 3.393 2.945 1.082.25 1.61.655 1.871 1.241-1.836 2.253-4.628 3.695-7.753 3.695z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('category') }}"
                       class="flex items-center p-2 rounded-lg group {{ request()->routeIs
                       ('category') ?
                    'bg-gray-200 text-gray-900' : 'text-gray-900 hover:bg-gray-100' }}">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75
                        group-hover:text-gray-900" fill="currentColor" clip-rule="evenodd"
                             fill-rule="evenodd" stroke-linejoin="round"
                             stroke-miterlimit="2" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m20.998 8.498h-17.996c-.569 0-1.001.464-1.001.999 0 .118-.105-.582 1.694 10.659.077.486.496.842.988.842h14.635c.492 0 .911-.356.988-.842 1.801-11.25 1.693-10.54 1.693-10.66 0-.558-.456-.998-1.001-.998zm-.964-3.017h-16.03c-.524 0-1.001.422-1.001 1.007 0 .081-.01.016.14 1.01h17.752c.152-1.012.139-.931.139-1.009 0-.58-.469-1.008-1-1.008zm-15.973-1h15.916c.058-.436.055-.426.055-.482 0-.671-.575-1.001-1.001-1.001h-14.024c-.536 0-1.001.433-1.001 1 0 .056-.004.043.055.483z"
                                fill-rule="nonzero"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Category</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('manage-quiz') }}"
                       class="flex items-center p-2 rounded-lg group {{ request()->routeIs
                       ('manage-quiz') ?
                    'bg-gray-200 text-gray-900' : 'text-gray-900 hover:bg-gray-100' }}">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75
                        group-hover:text-gray-900" fill="currentColor" width="24" height="24"
                             xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                             clip-rule="evenodd" viewBox="0 0
                    24 24">
                            <path
                                d="M6.628 23h-2.628l2.732-4h-6.732v-2h1v-16h22v16h1v2h-6.731l2.731 4h-2.627l-2.736-4h-5.273l-2.736 4zm14.372-20h-18v14h18v-14zm-6 12h4v1h-4v-1zm-8.245-6.074l1.157 4.319-1.099.294-.838-3.126-.974.576-.034-.014-.222-.828 1.801-1.165.209-.056zm3.835.922l1.131-.303.25.932-1.132.303.31 1.155-1.055.282-.31-1.154-1.134.304-.25-.932 1.135-.304-.297-1.106 1.055-.283.297 1.106zm4.509 1.471l-1.099.295-.838-3.127-.975.576-.033-.013-.222-.828 1.8-1.166.209-.056 1.158 4.319zm3.932-2.926l.231.861-2.995.803-.231-.861 2.995-.803zm-.328-1.225l.23.861-2.995.803-.23-.862 2.995-.802z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Manage Quiz</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('view-quiz') }}"
                       class="flex items-center p-2 rounded-lg group {{ request()->routeIs
                       ('view-quiz') ?
                    'bg-gray-200 text-gray-900' : 'text-gray-900 hover:bg-gray-100' }}">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75
                        group-hover:text-gray-900" fill="currentColor" width="24" height="24"
                             xmlns="http://www.w3.org/2000/svg"
                             fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0
                    24 24">
                            <path
                                d="M12.5 17.52c1.415-1.054 3.624-1.846 5.5-2v6.479c-1.739.263-3.755 1.104-5.5 2v-6.479zm-1 0c-1.415-1.054-3.624-1.846-5.5-2v6.479c1.739.263 3.755 1.104 5.5 2v-6.479zm-6.5 2.917c-2.049-.674-2.996-1.437-2.996-1.437l-.004-2.025c-.008-2.127.088-3.344 2.648-3.909 2.805-.619 5.799-1.317 4.241-3.521-3.901-5.523-.809-9.545 3.111-9.545 3.921 0 6.996 3.991 3.11 9.545-1.529 2.185 1.376 2.888 4.242 3.521 2.57.568 2.657 1.791 2.647 3.934l-.003 2s-.947.763-2.996 1.437v-6.003l-1.082.089c-2.054.169-4.36 1.002-5.918 2.128-1.559-1.126-3.863-1.959-5.918-2.128l-1.082-.089v6.003z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Manage Students</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('view-quiz') }}"
                       class="flex items-center p-2 rounded-lg group {{ request()->routeIs
                       ('view-quiz') ?
                    'bg-gray-200 text-gray-900' : 'text-gray-900 hover:bg-gray-100' }}">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75
                        group-hover:text-gray-900" fill="currentColor" width="24" height="24"
                             xmlns="http://www.w3.org/2000/svg"
                             fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0
                    24 24">
                            <path
                                d="M4.861 9.713c-.131-.146-.242-.299-.33-.459v-3.181l7.107 3.804 7.852-3.298v2.675c-.074.15-.169.294-.284.431.342.948.392 2.073.399 2.623 1.229-.437 2.398.593 2.398 2.492 0 3.208-2.462 4.017-2.561 4.053-2.414 4.776-6.276 5.147-7.404 5.147-1.128 0-4.99-.372-7.403-5.147-.1-.036-2.563-.845-2.563-4.061 0-2.003 1.289-2.917 2.4-2.48.007-.551.056-1.659.389-2.599zm13.52.669c-1.62 1.032-4.431 1.524-6.371 1.524-2.107 0-4.736-.501-6.319-1.508-.156.621-.241 1.298-.241 2.033 0 .528-.425.918-.897.918-.121 0-.244-.026-.365-.08-.06-.029-.152-.051-.256-.051-.112 0-.236.026-.344.099-.898.595-.804 3.838 1.393 4.598.219.076.403.238.509.451 2.16 4.299 5.557 4.634 6.548 4.634.99 0 4.389-.335 6.547-4.634.108-.213.291-.375.51-.451 2.197-.76 2.291-4.003 1.393-4.598-.365-.245-.632.032-.964.032-.472 0-.898-.388-.898-.918 0-.741-.085-1.424-.245-2.049zm4.619-.373h-2.99l1.012-2.002-.015-3.142-9.316 3.907-9.691-5.12 10.451-3.651 9.552 4.446v3.56l.997 2.002z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Registered Students</span>
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

{{-- User --}}
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
                    <a href="{{ route('user.profile.edit') }}"
                       class="flex items-center p-2 rounded-lg group {{ request()->routeIs('user.profile.edit') ?
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
