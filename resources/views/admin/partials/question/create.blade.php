<div id="addCategory-modal" tabindex="-1" aria-hidden="true"
     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow">
            <div
                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add new question
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
                        <label for="question_text"
                               class="block mb-2 text-sm font-medium text-gray-900">
                            Question
                        </label>
                        <input type="text" id="question_text" name="question_text"
                               class="bg-gray-50 border border-gray-300 text-gray-900
                                       text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                               placeholder="Question" required/>
                        @error('question_text')
                        <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="answer_type"
                               class="block mb-2 text-sm font-medium text-gray-900">
                            Answer Type
                        </label>
                        <!-- Dropdown button -->
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                class="text-gray-600 bg-gray-50 border border-gray-300
                                hover:bg-gray-200 focus:border-2 focus:ring-blue-500
                                focus:border-blue-500 rounded-lg text-sm p-2.5 text-center inline-flex items-center w-full"
                                type="button">
                            Select answer type
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
                                <li class="my-0.5">
                                    <a href="#" id="radioAns"
                                       class="dropdown-item block px-4 py-2 hover:bg-gray-200 font-semibold rounded-md"
                                       data-value="radio">Single Answer (Radio)</a>
                                </li>
                                <li class="my-0.5">
                                    <a href="#" id="checkboxAns"
                                       class="dropdown-item block px-4 py-2 hover:bg-gray-200 font-semibold rounded-md"
                                       data-value="checkbox">Multiple Answers (Checkbox)</a>
                                </li>
                            </ul>
                        </div>

                        @error('answer_type')
                        <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <!-- Radio Section -->
                        <div id="radioSection"
                             class="hidden mt-4 border-2 border-b-gray-200 rounded-lg p-6">
                            <fieldset>
                                <legend class="mb-4">Single Answer (Radio)</legend>
                                @for ($i = 1; $i <= 4; $i++)
                                    <div class="flex items-center mb-4">
                                        <input id="radio-option-{{ $i }}" type="radio"
                                               name="answer" value="{{ $i }}"
                                               class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                        <input type="text" id="radio-text-{{ $i }}"
                                               name="option_{{ $i }}"
                                               placeholder="Option {{ $i }}"
                                               class="ml-2 p-1 w-full border border-gray-300
                                               rounded-lg">
                                    </div>
                                @endfor
                            </fieldset>
                        </div>

                        {{-- Checkbox --}}
                        <div id="checkboxSection"
                             class="hidden mt-4 border-2 border-b-gray-200 rounded-lg p-6">
                            <fieldset>
                                <legend class="mb-4">Multiple Answers (Checkbox)</legend>
                                @for ($i = 1; $i <= 4; $i++)
                                    <div class="flex items-center mb-4">
                                        <input id="checkbox-{{ $i }}" type="checkbox"
                                               name="answer[]" value="{{ $i }}"
                                               class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                        <input type="text" id="checkbox-text-{{ $i }}"
                                               name="option_{{ $i }}"
                                               placeholder="Option {{ $i }}"
                                               class="ml-2 p-1 w-full border border-gray-300
                                               rounded-lg">
                                    </div>
                                @endfor
                            </fieldset>
                        </div>

                        @error('options')
                        <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                        @enderror

                    </div>
                    {{-- Unhide upon selection of answer type --}}

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

    document.addEventListener('DOMContentLoaded', function () {
        // Function to hide all sections
        function hideAllSections() {
            document.getElementById('radioSection').style.display = 'none';
            document.getElementById('checkboxSection').style.display = 'none';
        }

        // Show the relevant section based on the selected answer type
        function showSection(sectionId) {
            hideAllSections();
            document.getElementById(sectionId).style.display = 'block';
        }

        // Function to hide the dropdown
        function hideDropdown() {
            document.getElementById('dropdown').style.display = 'none';
        }

        // Event listener for the radio answer dropdown item
        document.getElementById('radioAns').addEventListener('click', function () {
            showSection('radioSection');
            hideDropdown();
        });

        // Event listener for the checkbox answer dropdown item
        document.getElementById('checkboxAns').addEventListener('click', function () {
            showSection('checkboxSection');
            hideDropdown();
        });

        // Event listener for the dropdown button to toggle the dropdown visibility
        document.getElementById('dropdownDefaultButton').addEventListener('click', function () {
            const dropdown = document.getElementById('dropdown');
            if (dropdown.style.display === 'none' || dropdown.style.display === '') {
                dropdown.style.display = 'block';
            } else {
                dropdown.style.display = 'none';
            }
        });
    });

</script>

