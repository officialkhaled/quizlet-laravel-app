<x-app-layout>

    @include('components.common.sidebar')

    <div class="p-2 sm:ml-64">
        <div class="bg-gray-200 m-8 rounded-lg">
            <div class="px-1 pt-4 rounded-lg flex items-center justify-between">
                <ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium
                    text-center text-gray-500 border border-gray-200 rounded-lg sm:text-base sm:p-4 sm:space-x-4 rtl:space-x-reverse">
                    <li class="flex items-center">
                        Profile
                        <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                            <path stroke="currentColor" stroke-linecap="round"
                                  stroke-linejoin="round" stroke-width="2"
                                  d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>
                    </li>
                    <li class="flex items-center text-blue-600">
                        Edit Profile
                    </li>
                </ol>
            </div>

            <div class="pb-6 pt-2">
                <div class="px-5 mx-auto space-y-6">
                    <div class="p-4 sm:p-8 bg-white shadow-sm sm:rounded-lg">
                        <div class="max-w-xl mx-auto">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white shadow-sm sm:rounded-lg">
                        <div class="max-w-xl mx-auto">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white shadow-sm sm:rounded-lg">
                        <div class="max-w-xl mx-auto">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
