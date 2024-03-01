@extends('admin.layout')
@section('content')

    <main>
        <div class="py-2 px-10 sm:ml-64">
            <div class="p-8 mt-10 rounded-lg">
                <form action="{{ route('store-quiz') }}" method="POST"
                      class="max-w-screen-lg mx-auto">
                    @csrf
                    <div class="border-2 rounded-lg border-blue-200 p-6 mb-4">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="floating_topic" id="floating_topic"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_topic"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500
                               dark:text-gray-400 duration-300 transform -translate-y-6 scale-75
                               top-3 -z-10 origin-[0] peer-focus:start-0
                               rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto
                               peer-focus:text-blue-600 peer-focus:dark:text-blue-500
                               peer-placeholder-shown:scale-100
                               peer-placeholder-shown:translate-y-0 peer-focus:scale-75
                               peer-focus:-translate-y-6">Topic Name</label>
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="floating_first_name"
                                       id="floating_first_name"
                                       class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                       placeholder=" " required/>
                                <label for="floating_first_name"
                                       class="peer-focus:font-medium absolute text-sm text-gray-500
                                   dark:text-gray-400 duration-300 transform -translate-y-6
                                   scale-75 top-3 -z-10 origin-[0] peer-focus:start-0
                                   rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600
                                   peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75
                                    peer-focus:-translate-y-6">Time (mins)</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="floating_last_name" id="floating_last_name"
                                       class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                       placeholder=" " required/>
                                <label for="floating_last_name"
                                       class="peer-focus:font-medium absolute text-sm text-gray-500
                                   dark:text-gray-400 duration-300 transform -translate-y-6
                                   scale-75 top-3 -z-10 origin-[0] peer-focus:start-0
                                   rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600
                                   peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75
                                    peer-focus:-translate-y-6">Pass Percentage</label>
                            </div>
                        </div>
                    </div>

                    {{-- Questions 1 --}}
                    <div id="questionsContainer">
                        <div class="questionBlock mt-4 grid grid-cols-12 md:gap-6
                     border-2 border-blue-200 rounded-lg p-6">
                            <div class="col-span-11 relative z-0 w-full group">
                                <input type="text" name="questions[0]"
                                       id="floating_first_name"
                                       class="questionInput block py-2.5 px-0 w-full text-sm
                                   text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                       placeholder=" " required/>
                                <label for="floating_first_name"
                                       class="peer-focus:font-medium absolute text-sm text-gray-500
                                   dark:text-gray-400 duration-300 transform -translate-y-6
                                   scale-75 top-3 -z-10 origin-[0] peer-focus:start-0
                                   rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600
                                   peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75
                                    peer-focus:-translate-y-6">
                                    Question 1
                                </label>

                                <div>
                                    <div class="mt-4 p-6">
                                        <select name="answer_types[0]"
                                                class="answerType block py-2 px-3 w-full text-sm
                                             text-gray-900 bg-gray-50 rounded-md border
                                             border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                                            <option value="radio">Radio (Single Answer)</option>
                                            <option value="checkbox">Checkbox (Multiple Answers)
                                            </option>
                                        </select>
                                    </div>
                                    {{-- Radio --}}
                                    <div class="mt-4 border-2 border-b-gray-200
                                    rounded-lg p-6">
                                        <fieldset>
                                            <legend class="sr-only">Countries</legend>

                                            <div class="flex items-center mb-4">
                                                <input id="country-option-1" type="radio"
                                                       name="countries"
                                                       value="USA"
                                                       class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300"
                                                       checked>
                                                <label for="country-option-1"
                                                       class="block ms-2 text-md font-medium text-gray-900">
                                                    United States
                                                </label>
                                            </div>

                                            <div class="flex items-center mb-4">
                                                <input id="country-option-2" type="radio"
                                                       name="countries"
                                                       value="Germany"
                                                       class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                                <label for="country-option-2"
                                                       class="block ms-2 text-md font-medium text-gray-900">
                                                    Germany
                                                </label>
                                            </div>

                                            <div class="flex items-center mb-4">
                                                <input id="country-option-3" type="radio"
                                                       name="countries"
                                                       value="Spain"
                                                       class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                                <label for="country-option-3"
                                                       class="block ms-2 text-md font-medium text-gray-900">
                                                    Spain
                                                </label>
                                            </div>

                                            <div class="flex items-center">
                                                <input id="country-option-4" type="radio"
                                                       name="countries"
                                                       value="United Kingdom"
                                                       class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                                <label for="country-option-4"
                                                       class="block ms-2 text-md font-medium text-gray-900">
                                                    United Kingdom
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>


                            </div>

                            {{-- Add button--}}
                            <div
                                class="col-span-1 relative z-0 w-full pt-3 group right-3 ">
                                <button type="button" onclick="addNewQuestion()"
                                        class="addQuestionButton text-green-500
                                font-medium
                                        text-sm px-5 py-2 text-center">
                                    <svg class="w-10 h-10" fill="currentColor"
                                         clip-rule="evenodd"
                                         fill-rule="evenodd" stroke-linejoin="round"
                                         stroke-miterlimit="2" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m12.002 2c5.518 0 9.998 4.48 9.998 9.998 0 5.517-4.48 9.997-9.998 9.997-5.517 0-9.997-4.48-9.997-9.997 0-5.518 4.48-9.998 9.997-9.998zm-.747 9.25h-3.5c-.414 0-.75.336-.75.75s.336.75.75.75h3.5v3.5c0 .414.336.75.75.75s.75-.336.75-.75v-3.5h3.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-3.5v-3.5c0-.414-.336-.75-.75-.75s-.75.336-.75.75z"
                                            fill-rule="nonzero"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Questions 2 --}}
                    <div id="questionsContainer">
                        <div class="questionBlock mt-4 grid grid-cols-12 md:gap-6
                     border-2 border-blue-200 rounded-lg p-6">
                            <div class="col-span-11 relative z-0 w-full group">
                                <input type="text" name="questions[0]"
                                       id="floating_first_name"
                                       class="questionInput block py-2.5 px-0 w-full text-sm
                                   text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                       placeholder=" " required/>
                                <label for="floating_first_name"
                                       class="peer-focus:font-medium absolute text-sm text-gray-500
                                   dark:text-gray-400 duration-300 transform -translate-y-6
                                   scale-75 top-3 -z-10 origin-[0] peer-focus:start-0
                                   rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600
                                   peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                                    peer-placeholder-shown:translate-y-0 peer-focus:scale-75
                                    peer-focus:-translate-y-6">
                                    Question 2
                                </label>

                                <div>
                                    <div class="mt-4 p-6">
                                        <select name="answer_types[0]"
                                                class="answerType block py-2 px-3 w-full text-sm
                                             text-gray-900 bg-gray-50 rounded-md border
                                             border-gray-300 focus:outline-none focus:ring-0 focus:border-blue-600">
                                            <option value="radio">Radio (Single Answer)</option>
                                            <option value="checkbox">Checkbox (Multiple Answers)
                                            </option>
                                        </select>
                                    </div>
                                    {{-- Checkbox --}}
                                    <div class="mt-2 border-2 border-b-gray-200 rounded-lg p-6">
                                        <fieldset>
                                            <legend class="sr-only">Checkbox variants</legend>

                                            <div class="flex items-center mb-4">
                                                <input id="checkbox-2" type="checkbox" value=""
                                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-2"
                                                       class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                                    want to get promotional offers</label>
                                            </div>

                                            <div class="flex items-center mb-4">
                                                <input id="checkbox-2" type="checkbox" value=""
                                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-2"
                                                       class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                                    want to get promotional offers</label>
                                            </div>

                                            <div class="flex items-center mb-4">
                                                <input id="checkbox-3" type="checkbox" value=""
                                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-3"
                                                       class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                                    am 18 years or older</label>
                                            </div>

                                            <div class="flex items-center">
                                                <input id="checkbox-3" type="checkbox" value=""
                                                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-3"
                                                       class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                                    am 18 years or older</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>


                            </div>

                            {{-- Add button--}}
                            <div
                                class="col-span-1 relative z-0 w-full pt-3 group right-3 ">
                                <button type="button" onclick="addNewQuestion()"
                                        class="addQuestionButton text-green-500
                                font-medium
                                        text-sm px-5 py-2 text-center">
                                    <svg class="w-10 h-10" fill="currentColor"
                                         clip-rule="evenodd"
                                         fill-rule="evenodd" stroke-linejoin="round"
                                         stroke-miterlimit="2" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m12.002 2c5.518 0 9.998 4.48 9.998 9.998 0 5.517-4.48 9.997-9.998 9.997-5.517 0-9.997-4.48-9.997-9.997 0-5.518 4.48-9.998 9.997-9.998zm-.747 9.25h-3.5c-.414 0-.75.336-.75.75s.336.75.75.75h3.5v3.5c0 .414.336.75.75.75s.75-.336.75-.75v-3.5h3.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-3.5v-3.5c0-.414-.336-.75-.75-.75s-.75.336-.75.75z"
                                            fill-rule="nonzero"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Answers --}}
                    {{--<div class="relative z-0 w-full mb-5 group">
                        --}}{{-- Radio --}}{{--
                        <div class="mt-2 border-2 border-b-gray-200 rounded-lg p-6">
                            <fieldset>
                                <legend class="sr-only">Countries</legend>

                                <div class="flex items-center mb-4">
                                    <input id="country-option-1" type="radio" name="countries"
                                           value="USA"
                                           class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300"
                                           checked>
                                    <label for="country-option-1"
                                           class="block ms-2 text-md font-medium text-gray-900">
                                        United States
                                    </label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="country-option-2" type="radio" name="countries"
                                           value="Germany"
                                           class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                    <label for="country-option-2"
                                           class="block ms-2 text-md font-medium text-gray-900">
                                        Germany
                                    </label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="country-option-3" type="radio" name="countries"
                                           value="Spain"
                                           class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                    <label for="country-option-3"
                                           class="block ms-2 text-md font-medium text-gray-900">
                                        Spain
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="country-option-4" type="radio" name="countries"
                                           value="United Kingdom"
                                           class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                                    <label for="country-option-4"
                                           class="block ms-2 text-md font-medium text-gray-900">
                                        United Kingdom
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                        --}}{{-- Checkbox --}}{{--
                        <div class="mt-2 border-2 border-b-gray-200 rounded-lg p-6">
                            <fieldset>
                                <legend class="sr-only">Checkbox variants</legend>

                                <div class="flex items-center mb-4">
                                    <input id="checkbox-2" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-2"
                                           class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                        want to get promotional offers</label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="checkbox-2" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-2"
                                           class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                        want to get promotional offers</label>
                                </div>

                                <div class="flex items-center mb-4">
                                    <input id="checkbox-3" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-3"
                                           class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                        am 18 years or older</label>
                                </div>

                                <div class="flex items-center">
                                    <input id="checkbox-3" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-3"
                                           class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I
                                        am 18 years or older</label>
                                </div>
                            </fieldset>
                        </div>
                    </div>--}}

                    <div class="flex justify-end mt-4">
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                                focus:outline-none focus:ring-blue-300 font-medium rounded-lg
                                text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection
