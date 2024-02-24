@extends('user.layout')
@section('content')

    <main>

        <div class="p-2 sm:ml-64 bg-[url('/asset/img/banner.png')]">
            <div class="p-4 rounded-lg">
                {{--<div class="flex items-center justify-center flex-col gap-2 h-20 mb-4 rounded
                bg-gray-50">
                    <h1 class="text-3xl text-black uppercase font-bold">Quiz Started</h1>
                </div>--}}

                <div class="h-auto p-6 rounded bg-gray-50 ">
                    <div class="mx-4">
                        <div class="flex items-center justify-between">
                            <div class="flex justify-center items-center gap-4">
                                <img src="{{ asset('asset/img/react.jpg') }}" alt="react"
                                     class="w-28 rounded-lg my-2">
                                <h3 class="text-xl font-semibold">React Basic Quiz</h3>
                            </div>
                            <div class="flex justify-center items-center gap-2">
                                <svg
                                    class="flex-shrink-0 w-5 h-5 text-blue-500 transition duration-75"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10
                                        10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 12v-6h-2v8h7v-2h-5z"/>
                                </svg>
                                <p class="font-semibold">00:05:55</p>
                            </div>
                        </div>
                        <hr class="mt-4 mx-2">
                        <div class="">
                            <div class="row mt-4 flex justify-between items-center">
                                <div class="col-md-6">
                                    <p>Exam Progress:</p>
                                </div>
                                <div class="col-md-6">
                                    <p>Question 1 out of 5</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <div
                                        class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                        <div class="bg-blue-600 h-2.5 rounded-full"
                                             style="width: 45%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Question --}}
                        <div class="mt-6">
                            <p class="text-gray-600">Question 1</p>
                            <h2 class="text-2xl font-bold mt-1">React is mainly used for building
                                ___.</h2>
                        </div>
                        {{--Options (radio)--}}
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

                        {{-- Question --}}
                        <div class="mt-6">
                            <p class="text-gray-600">Question 2</p>
                            <h2 class="text-2xl font-bold mt-1">React is mainly used for building
                                ___.</h2>
                        </div>
                        {{-- Options (checkbox)--}}
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

                    <div class="px-4 mt-4 flex justify-end">
                        <button class="inline-flex items-center justify-center px-5 py-3 text-base
                   font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800
                   focus:ring-4 focus:ring-primary-300">
                            Next
                            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                {{--<div class="grid grid-cols-3 gap-4 mb-4">
                    <div class="flex items-center justify-center h-24 rounded bg-gray-50">

                    </div>
                    <div
                        class="flex items-center justify-center h-24 rounded bg-gray-50">
                        <p class="text-2xl text-gray-400">

                        </p>
                    </div>
                    <div
                        class="flex items-center justify-center h-24 rounded bg-gray-50">
                        <p class="text-2xl text-gray-400">

                        </p>
                    </div>
                </div>--}} {{--template--}}

            </div>
        </div>

    </main>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
