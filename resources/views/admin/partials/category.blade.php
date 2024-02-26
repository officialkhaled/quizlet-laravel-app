@extends('admin.layout')
@section('content')

    <main>
        <div class="p-2 sm:ml-64">
            <div class="bg-gray-200 m-8 rounded-lg">
                <div class="px-1 pt-4 rounded-lg flex items-center justify-between">
                    <ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium
                    text-center text-gray-500 border border-gray-200 rounded-lg sm:text-base sm:p-4 sm:space-x-4 rtl:space-x-reverse">
                        <li class="flex items-center text-blue-600">
                            Personal Info
                            <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                <path stroke="currentColor" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="2"
                                      d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                            </svg>
                        </li>
                        <li class="flex items-center">
                            Account Info
                            <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                <path stroke="currentColor" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="2"
                                      d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                            </svg>
                        </li>
                        <li class="flex items-center">
                            Review
                        </li>
                    </ol>


                    <button class="inline-flex items-center justify-center px-5 py-2 mr-3 text-base
                   font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800"
                            data-modal-target="category-modal"
                            data-modal-toggle="category-modal">
                        Add
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" clip-rule="evenodd"
                             fill-rule="evenodd" stroke-linejoin="round"
                             stroke-miterlimit="2" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m12.002 2c5.518 0 9.998 4.48 9.998 9.998 0 5.517-4.48 9.997-9.998 9.997-5.517 0-9.997-4.48-9.997-9.997 0-5.518 4.48-9.998 9.997-9.998zm-.747 9.25h-3.5c-.414 0-.75.336-.75.75s.336.75.75.75h3.5v3.5c0 .414.336.75.75.75s.75-.336.75-.75v-3.5h3.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-3.5v-3.5c0-.414-.336-.75-.75-.75s-.75.336-.75.75z"
                                fill-rule="nonzero"/>
                        </svg>
                    </button>
                </div>

                <div class="p-4 rounded-lg">
                    <div class="relative overflow-x-auto shadow-sm sm:rounded-md">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-300">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center">
                                    SL
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    <div class="flex items-center justify-center">
                                        Action
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-900">
                            <tr class="bg-white border-b">
                                <th scope="row"
                                    class="px-6 py-2 font-medium  whitespace-nowrap text-center">
                                    1
                                </th>
                                <td class="px-6 py-2 min-w-52 max-w-52 text-center">
                                    Physics
                                </td>
                                <td class="px-6 py-2 text-center ">
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input type="checkbox" value="" class="sr-only peer"
                                               checked>
                                        <div
                                            class="relative w-9 h-5 bg-gray-200
                                        peer-focus:outline-none rounded-full peer
                                        peer-checked:after:translate-x-full
                                        rtl:peer-checked:after:-translate-x-full
                                        peer-checked:after:border-white after:content-['']
                                        after:absolute after:top-[2px] after:start-[2px]
                                        after:bg-white after:border-gray-300 after:border
                                        after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-blue-600">
                                        </div>
                                        <span
                                            class="ms-3 text-sm font-medium text-gray-900">Active</span>
                                    </label>
                                </td>
                                <td class="px-6 py-2 flex justify-center gap-3">
                                    <a href="{{ route('create-quiz') }}"
                                       class="bg-green-500 px-5 py-2 rounded-lg font-medium
                                   text-white hover:bg-green-700">Edit</a>
                                    <a href="#"
                                       class="bg-red-700 px-5 py-2 rounded-lg font-medium text-white
                                   hover:bg-red-800">Delete</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="pl-1 mt-7 text-right">
                        <nav
                            class="flex items-center flex-column flex-wrap md:flex-row
                            justify-between pt-2"
                            aria-label="Table navigation">
                            <span
                                class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span
                                    class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span
                                    class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                                <li>
                                    <a href="#"
                                       class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page"
                                       class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>

            </div>
        </div>

        {{-- Modal --}}
        <div id="category-modal" tabindex="-1" aria-hidden="true"
             class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <div
                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Add new category
                        </h3>
                        <button type="button"
                                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="category-modal">
                            <svg class="w-3 h-3" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg"
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
                        <form method="POST" action="" class="flex flex-col gap-2">
                            @csrf
                            <div class="mb-5">
                                <label for="username" class="block mb-2 text-sm font-medium text-gray-900
            dark:text-white">Category Name</label>
                                <input type="text" id="category_name" name="category_name"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                       placeholder="Category" required/>
                                <x-input-error :messages="$errors->get('category_name')"
                                               class="mt-2"/>
                            </div>
                            <button type="submit"
                                    class="ml-auto text-white bg-blue-700 hover:bg-blue-800
                                    focus:ring-4
                    focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5
                    py-2.5 text-center">
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
