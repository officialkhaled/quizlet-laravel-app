@extends('admin.layout')
@section('content')

    <main>
        <div class="p-2 sm:ml-64">
            <div class="bg-gray-200 m-8 rounded-lg">
                <div class="px-1 pt-4 rounded-lg flex items-center justify-between">
                    <ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium
                    text-center text-gray-500 border border-gray-200 rounded-lg sm:text-base sm:p-4 sm:space-x-4 rtl:space-x-reverse">
                        <li class="flex items-center">
                            Category
                            <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                <path stroke="currentColor" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="2"
                                      d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                            </svg>
                        </li>
                        <li class="flex items-center">
                            Category List
                            <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                <path stroke="currentColor" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="2"
                                      d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                            </svg>
                        </li>
                        <li class="flex items-center text-blue-600">
                            Edit
                        </li>
                    </ol>

                    <a href="{{ url()->previous() }}" class="inline-flex items-center justify-center px-3 py-1 rounded-md text-sm mr-3 font-medium text-center text-white bg-blue-700 hover:bg-blue-800">
                        Back
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" clip-rule="evenodd"
                             fill-rule="evenodd" stroke-linejoin="round"
                             stroke-miterlimit="2" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m22 12.002c0-5.517-4.48-9.997-9.998-9.997-5.517 0-9.997 4.48-9.997 9.997 0 5.518 4.48 9.998 9.997 9.998 5.518 0 9.998-4.48 9.998-9.998zm-8.211-4.843c.141-.108.3-.157.456-.157.389 0 .755.306.755.749v8.501c0 .445-.367.75-.755.75-.157 0-.316-.05-.457-.159-1.554-1.203-4.199-3.252-5.498-4.258-.184-.142-.29-.36-.29-.592 0-.23.107-.449.291-.591z"
                                fill-rule="nonzero"/>
                        </svg>
                    </a>
                </div>

                <div class="p-4 rounded-lg">
                    <form action="{{ route('category.update', ['category' => $category->id]) }}" method="POST">
                        @csrf
                        <div class="relative overflow-x-auto shadow-sm sm:rounded-md">
                            <label for="name"
                                   class="block mb-2 px-1 text-sm font-medium text-gray-900">
                                Category Name
                            </label>
                            <input type="text" id="name" name="name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900
                                       text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                   placeholder="Category" value="{{ $category->name }}"
                                   required/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                        </div>

                        <div class="p-1 pt-2 flex justify-center mt-2">
                            <button type="submit" class="inline-flex items-center
                        justify-center px-3 py-1 rounded-md text-sm font-medium text-center
                        text-white bg-green-500 hover:bg-green-700">
                                Update
                                <svg class="w-3 h-3 ml-2 -mr-1" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24">
                                    <path
                                        d="M23 12c0 1.042-.154 2.045-.425 3h-2.101c.335-.94.526-1.947.526-3 0-4.962-4.037-9-9-9-1.706 0-3.296.484-4.655 1.314l1.858 2.686h-6.994l2.152-7 1.849 2.673c1.684-1.049 3.659-1.673 5.79-1.673 6.074 0 11 4.925 11 11zm-6.354 7.692c-1.357.826-2.944 1.308-4.646 1.308-4.962 0-9-4.038-9-9 0-1.053.191-2.06.525-3h-2.1c-.271.955-.425 1.958-.425 3 0 6.075 4.925 11 11 11 2.127 0 4.099-.621 5.78-1.667l1.853 2.667 2.152-6.989h-6.994l1.855 2.681z"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

@endsection
