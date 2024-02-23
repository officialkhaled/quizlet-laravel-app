@extends('user.layout')
@section('content')

    <main>

        <div class="p-2 sm:ml-64 bg-[url('/asset/img/banner.png')]">
            <div class="p-2 rounded-lg">
                <div class="flex items-center justify-center flex-col gap-2 h-20 mb-4 rounded
                bg-gray-50">
                    <h1 class="text-3xl text-black uppercase font-bold">Quiz Started</h1>
                </div>

                <div class=" h-auto p-4 mb-4 rounded
                bg-gray-50 ">
                    <div class="row">
                        <div class="col-md-3 flex items-center px-4 justify-between">
                            <div class="">
                                <img src="" alt="react">
                                <h3>React Basic Quiz</h3>
                            </div>
                            <div class="">
                                <p class="flex justify-between flex-col">
                                    <svg
                                        class="flex-shrink-0 w-5 h-5 text-blue-500 transition duration-75"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10
                                        10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 12v-6h-2v8h7v-2h-5z"/>
                                    </svg>
                                    00:05:55
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Exam Progress:</p>
                                </div>
                                <div class="col-md-6">
                                    <p>Question 1 out of 5</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
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
