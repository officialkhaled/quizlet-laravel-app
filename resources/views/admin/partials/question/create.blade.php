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
                        <li class="flex items-center">
                            Question List
                            <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                <path stroke="currentColor" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="2"
                                      d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                            </svg>
                        </li>
                        <li class="flex items-center text-blue-600">
                            Create
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
                    <form
                        action="{{ route('quiz.question.store', ['quiz' => request()->route('id')]) }}"
                        method="POST">
                        @csrf

                        <div class="relative overflow-x-auto sm:rounded-md">
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
                            hover:bg-gray-100 focus:border-2 focus:ring-blue-500
                            focus:border-blue-500 rounded-lg text-sm p-2.5 text-center inline-flex items-center w-full"
                                        type="button">
                                    Select answer type
                                    <svg class="w-2.5 h-2.5 ms-auto" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="2"
                                              d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown"
                                     class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-72">
                                    <ul class="py-2 text-sm text-gray-800"
                                        aria-labelledby="dropdownDefaultButton">
                                        <li class="my-0.5">
                                            <a href="#" id="radioAns"
                                               class="dropdown-item block px-4 py-2 hover:bg-gray-200 font-semibold rounded-md"
                                               data-value="0">Single Answer (Radio Button)</a>
                                        </li>

                                        <li class="my-0.5">
                                            <a href="#" id="checkboxAns"
                                               class="dropdown-item block px-4 py-2 hover:bg-gray-200 font-semibold rounded-md"
                                               data-value="1">Multiple Answers (Checkbox)</a>
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
                                        <legend class="mb-4">
                                            Single Answer (Radio Button) | Select the answer that is
                                            correct
                                        </legend>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <div class="flex items-center mb-4">
                                                <input id="radio-option-{{ $i }}" type="radio"
                                                       name="answer" value="{{ $i }}"
                                                       class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                                <input type="text" id="radio-text-{{ $i }}"
                                                       name="choice[]" placeholder="Option {{ $i }}"
                                                       class="ml-2 p-1 w-full border border-gray-300 rounded-md">
                                            </div>
                                        @endfor
                                    </fieldset>
                                </div>

                                {{-- Checkbox --}}
                                <div id="checkboxSection"
                                     class="hidden mt-4 border-2 border-b-gray-200 rounded-lg p-6">
                                    <fieldset>
                                        <legend class="mb-4">
                                            Multiple Answers (Checkbox) | Select the answer(s) that
                                            is/are correct
                                        </legend>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <div class="flex items-center mb-4">
                                                <input id="checkbox-{{ $i }}" type="checkbox"
                                                       name="answer[]" value="{{ $i }}"
                                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                                                <input type="text" id="checkbox-text-{{ $i }}"
                                                       name="choice[]" placeholder="Option {{ $i }}"
                                                       class="ml-2 p-1 w-full border border-gray-300 rounded-md">
                                            </div>
                                        @endfor
                                    </fieldset>
                                </div>

                                @error('options')
                                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                        {{-- Create Button --}}
                        <div class="p-1 pt-2 flex justify-center mt-2">
                            <button type="submit" class="inline-flex items-center
                        justify-center px-5 py-2 text-base font-medium text-center
                        text-white rounded-lg bg-green-500 hover:bg-green-700">
                                Create
                                <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24">
                                    <path
                                        d="M14 3h2.997v5h-2.997v-5zm9 1v20h-22v-24h17.997l4.003 4zm-17 5h12v-7h-12v7zm14 4h-16v9h16v-9z"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>


    {{-- Scripts --}}
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

            // Function to update the dropdown button text
            function updateDropdownText(text) {
                document.getElementById('dropdownDefaultButton').textContent = text;
            }

            // Event listener for the dropdown button to toggle the dropdown visibility
            document.getElementById('dropdownDefaultButton').addEventListener('click', function () {
                const dropdown = document.getElementById('dropdown');
                if (dropdown.style.display === 'none' || dropdown.style.display === '') {
                    dropdown.style.display = 'block';
                } else {
                    dropdown.style.display = 'none';
                }
            });

            // Event listener for the radio answer dropdown item
            document.getElementById('radioAns').addEventListener('click', function () {
                showSection('radioSection');
                hideDropdown();
                updateDropdownText(this.textContent);
            });

            // Event listener for the checkbox answer dropdown item
            document.getElementById('checkboxAns').addEventListener('click', function () {
                showSection('checkboxSection');
                hideDropdown();
                updateDropdownText(this.textContent);
            });
        });


    </script>

@endsection
