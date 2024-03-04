@extends('admin.layout')
@section('content')

    <main>

        <div class="p-2 sm:ml-64">
            <div class="bg-gray-200 m-8 rounded-lg p-4 px-4">
                <div class="py-8 rounded-lg flex justify-between">
                    <h2 class="text-2xl">Welcome, <span
                            class="text-blue-700">{{ $adminData->name }}</span>.</h2>
                    <h2 class="text-sm text-gray-500 text-right">
                        {{ now('Asia/Dhaka')->format('M d, Y - h:i A') }}
                    </h2>
                </div>

                <div class="pt-1 pb-5 flex flex-wrap gap-14 justify-between">

                    <div
                        class="max-w-sm w-96 p-4 bg-white border border-gray-200 rounded-lg shadow">
                        <div class="p-2 flex justify-between items-center">
                            <h5 class=" text-xl font-bold tracking-tight text-gray-900">Total
                                Admins</h5>
                            <img src="{{ asset('asset/img/dashboard/admin.gif') }}" alt=""
                                 class="size-24">
                        </div>
                        <div class="p-2 py-5 flex items-center justify-center">
                            <p
                                class="inline-flex items-center justify-center px-3 py-2 w-full text-lg
                           font-medium text-center text-white bg-teal-400 rounded-lg">
                                {{ $admin }}
                            </p>
                        </div>
                    </div>

                    <div
                        class="max-w-sm w-96 p-4 bg-white border border-gray-200 rounded-lg shadow">
                        <div class="p-2 flex justify-between items-center">
                            <h5 class=" text-xl font-bold tracking-tight text-gray-900">Total
                                Students</h5>
                            <img src="{{ asset('asset/img/dashboard/students.gif') }}" alt=""
                                 class="size-24">
                        </div>
                        <div class="p-2 py-5 flex items-center justify-center">
                            <p
                                class="inline-flex items-center justify-center px-3 py-2 w-full text-lg
                           font-medium text-center text-white bg-teal-400 rounded-lg">
                                {{ $user }}
                            </p>
                        </div>
                    </div>

                    <div
                        class="max-w-sm w-96 p-4 bg-white border border-gray-200 rounded-lg shadow">
                        <div class="p-2 flex justify-between items-center">
                            <h5 class=" text-xl font-bold tracking-tight text-gray-900">
                                Categories</h5>
                            <img src="{{ asset('asset/img/dashboard/category.gif') }}" alt=""
                                 class="size-24">
                        </div>
                        <div class="p-2 py-5 flex items-center justify-center">
                            <p
                                class="inline-flex items-center justify-center px-3 py-2 w-full text-lg
                           font-medium text-center text-white bg-teal-400 rounded-lg">
                                {{ $category }}
                            </p>
                        </div>
                    </div>

                    <div
                        class="max-w-sm w-96 p-4 bg-white border border-gray-200 rounded-lg shadow">
                        <div class="p-2 flex justify-between items-center">
                            <h5 class=" text-xl font-bold tracking-tight text-gray-900">Quizzes</h5>
                            <img src="{{ asset('asset/img/dashboard/quiz.gif') }}" alt=""
                                 class="size-24">
                        </div>
                        <div class="p-2 py-5 flex items-center justify-center">
                            <p
                                class="inline-flex items-center justify-center px-3 py-2 w-full text-lg
                           font-medium text-center text-white bg-teal-400 rounded-lg">
                                {{ $quiz }}
                            </p>
                        </div>
                    </div>

                    <div
                        class="max-w-sm w-96 p-4 bg-white border border-gray-200 rounded-lg shadow">
                        <div class="p-2 flex justify-between items-center">
                            <h5 class=" text-xl font-bold tracking-tight text-gray-900">Total
                                Questions</h5>
                            <img src="{{ asset('asset/img/dashboard/question.gif') }}" alt=""
                                 class="size-24">
                        </div>
                        <div class="p-2 py-5 flex items-center justify-center">
                            <p
                                class="inline-flex items-center justify-center px-3 py-2 w-full text-lg
                           font-medium text-center text-white bg-teal-400 rounded-lg">
                                {{ $question }}
                            </p>
                        </div>
                    </div>

                    <div
                        class="max-w-sm w-96 p-4 bg-white border border-gray-200 rounded-lg shadow">
                        <div class="p-2 flex justify-between items-center">
                            <h5 class=" text-xl font-bold tracking-tight text-gray-900">Unique
                                Visitors</h5>
                            <img src="{{ asset('asset/img/dashboard/visitors.gif') }}" alt=""
                                 class="size-24">
                        </div>
                        <div class="p-2 py-5 flex items-center justify-center">
                            <p
                                class="inline-flex items-center justify-center px-3 py-2 w-full text-lg
                           font-medium text-center text-white bg-teal-400 rounded-lg">
                                20
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>

@endsection
