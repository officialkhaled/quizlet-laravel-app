@extends('admin.layout')
@section('content')

    <main>

        <div class="p-2 sm:ml-64">
            <div class="bg-gray-200 m-8 rounded-lg">
                <div class="px-1 pt-4 rounded-lg flex items-center justify-between">
                    <ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium
                    text-center text-gray-500 border border-gray-200 rounded-lg sm:text-base sm:p-4 sm:space-x-4 rtl:space-x-reverse">
                        <li class="flex items-center">
                            Manage Quiz
                            <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                <path stroke="currentColor" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="2"
                                      d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                            </svg>
                        </li>
                        <li class="flex items-center">
                            Quiz List
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

                    <a href="{{ url()->previous() }}" class="inline-flex items-center justify-center px-5 py-2 mr-3 text-base
                   font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800">
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
                    <form action="{{ route('quiz.update', ['quiz' => $quiz->id]) }}" method="POST">
                        @csrf
                        <div class="relative overflow-x-auto shadow-sm sm:rounded-md">
                            <div class="mb-5">
                                <label for="title"
                                       class="block mb-2 text-sm font-medium text-gray-900">
                                    Title
                                </label>
                                <input type="text" id="title" name="title"
                                       class="bg-gray-50 border border-gray-300 text-gray-900
                                       text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                       placeholder="Title" value="{{ $quiz->title }}" required/>
                                @error('title')
                                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="quiz_date"
                                       class="block mb-2 text-sm font-medium text-gray-900">
                                    Date
                                </label>
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                             viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input type="text" id="quiz_date" name="quiz_date" datepicker
                                           datepicker-buttons datepicker-autoselect-today datepicker-format="yyyy-mm-dd"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                                           placeholder="Select date" value="{{ $quiz->quiz_date }}" required>
                                </div>
                                @error('quiz_date')
                                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="quiz_duration"
                                       class="block mb-2 text-sm font-medium text-gray-900">
                                    Duration (in minutes)
                                </label>
                                <input type="number" id="quiz_duration" name="quiz_duration"
                                       class="bg-gray-50 border border-gray-300 text-gray-900
                                       text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                       placeholder="Duration (in minutes)"
                                       value="{{ $quiz->quiz_duration }}" required/>
                                @error('quiz_duration')
                                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="category_id"
                                       class="block mb-2 text-sm font-medium text-gray-900">
                                    Category
                                </label>
                                <!-- Dropdown button -->
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                        class="text-gray-600 bg-gray-50 border border-gray-300
                                hover:bg-gray-200 focus:border-2 focus:ring-blue-500 focus:border-blue-500 rounded-lg
                                text-sm p-2.5 text-center inline-flex items-center w-full"
                                        type="button" value="">
                                    {{ $quiz->category->name }}
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown"
                                     class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg
                             shadow w-72">
                                    <ul class="py-2 text-sm text-gray-800"
                                        aria-labelledby="dropdownDefaultButton">
                                        @foreach ($categories as $category)
                                            <li class="my-0.5">
                                                <a href="#"
                                                class="dropdown-item block px-4 py-2 hover:bg-gray-200 font-semibold rounded-md"
                                                   data-value="{{ $category->id }}">{{ $category->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Hidden input to store the selected category ID -->
                                <input type="hidden" id="category_id" name="category_id"
                                       value="{{ $quiz->category->id }}">
                                @error('category_id')
                                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="p-1 pt-2 flex justify-center mt-2">
                            <button type="submit" class="inline-flex items-center
                        justify-center px-5 py-2 text-base font-medium text-center
                        text-white rounded-lg bg-green-500 hover:bg-green-700">
                                Update
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor"
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

    <script>

        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault();
                // Set the category ID and name based on the clicked item
                const categoryId = this.getAttribute('data-value');
                const categoryName = this.textContent.trim();
                document.getElementById('category_id').value = categoryId;
                // Update the button text to reflect the selected category
                document.getElementById('dropdownDefaultButton').textContent = categoryName;
                // Close the dropdown menu
                document.getElementById('dropdown').style.display = 'none';
            });
        });

        // Add event listener to the dropdown button to toggle the dropdown visibility
        document.getElementById('dropdownDefaultButton').addEventListener('click', function () {
            const dropdown = document.getElementById('dropdown');
            if (dropdown.style.display === 'none' || dropdown.style.display === '') {
                dropdown.style.display = 'block';
            } else {
                dropdown.style.display = 'none';
            }
        });

    </script>

@endsection
