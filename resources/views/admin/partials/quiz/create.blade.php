<div id="addCategory-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div
                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add new quiz
                </h3>
                <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200
                                hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="addCategory-modal">
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

            <!-- Modal body (add) -->
            <div class="p-4 md:p-5">
                <form method="POST" action="{{ route('quiz.store') }}" class="flex flex-col
                         gap-2">
                    @csrf
                    <div class="mb-5">
                        <label for="title"
                               class="block mb-2 text-sm font-medium text-gray-900">
                            Title
                        </label>
                        <input type="text" id="title" name="title"
                               class="bg-gray-50 border border-gray-300 text-gray-900
                                       text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                               placeholder="Title" required/>
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
                                   datepicker-buttons datepicker-autoselect-today
                                   datepicker-format="yyyy-mm-dd"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm
                                    rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                                   placeholder="Select date" required>
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
                               placeholder="Duration (in minutes)" required/>
                        @error('quiz_duration')
                        <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="category_id" class="block mb-2 text-sm font-medium
                        text-gray-900">Category</label>
                        <!-- Dropdown button -->
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                class="text-gray-600 bg-gray-50 border border-gray-300 hover:bg-gray-200 focus:border-2 focus:ring-blue-500 focus:border-blue-500 rounded-lg text-sm p-2.5 text-center inline-flex items-center w-full"
                                type="button">
                            Select a category
                            <svg class="w-2.5 h-2.5 ms-auto" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
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
                        <input type="hidden" id="category_id" name="category_id" value="">
                        @error('category_id')
                        <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit"
                            class="ml-auto text-white bg-blue-700 hover:bg-blue-800
                            focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5
                                     text-center">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

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
