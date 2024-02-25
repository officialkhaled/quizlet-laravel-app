@extends('admin.layout')
@section('content')

    <main>

        <div class="py-2 px-10 sm:ml-64">
            <div class="py-8 rounded-lg flex justify-between">
                <h2 class="text-2xl">Welcome, <span
                        class="text-blue-700">{{ $adminData->name }}</span>.</h2>
                <h2 class="text-sm text-gray-500 text-right">
                    {{ now('Asia/Dhaka')->format('M d, Y - h:i A') }}
                </h2>
            </div>

            <div class="px-40 py-8 flex flex-wrap gap-10 justify-center">

                <div class="max-w-sm w-96 p-8 bg-white border border-gray-200 rounded-lg shadow">
                    <div class="p-5 flex justify-between items-center">
                        <h5 class=" text-2xl font-bold tracking-tight text-gray-900">Total
                            Admins</h5>
                        <img src="{{ asset('asset/img/dashboard/admin.gif') }}" alt=""
                             class="size-14">
                    </div>
                    <div class="p-5 flex items-center justify-center">
                        <a href="#"
                           class="inline-flex items-center justify-center px-3 py-2 w-full text-sm
                           font-medium
                           text-center text-white bg-teal-400 rounded-lg">
                            2
                        </a>
                    </div>
                </div>

                <div class="max-w-sm w-96 p-8 bg-white border border-gray-200 rounded-lg shadow">
                    <div class="p-5 flex justify-between items-center">
                        <h5 class=" text-2xl font-bold tracking-tight text-gray-900">Total
                            Students</h5>
                        <img src="{{ asset('asset/img/dashboard/students.gif') }}" alt=""
                             class="size-14">
                    </div>
                    <div class="p-5 flex items-center justify-center">
                        <a href="#"
                           class="inline-flex items-center justify-center px-3 py-2 w-full text-sm
                           font-medium
                           text-center text-white bg-teal-400 rounded-lg">
                            2
                        </a>
                    </div>
                </div>

                <div class="max-w-sm w-96 p-8 bg-white border border-gray-200 rounded-lg shadow">
                    <div class="p-5 flex justify-between items-center">
                        <h5 class=" text-2xl font-bold tracking-tight text-gray-900">Categories</h5>
                        <img src="{{ asset('asset/img/dashboard/category.gif') }}" alt=""
                             class="size-14">
                    </div>
                    <div class="p-5 flex items-center justify-center">
                        <a href="#"
                           class="inline-flex items-center justify-center px-3 py-2 w-full text-sm
                           font-medium
                           text-center text-white bg-teal-400 rounded-lg">
                            2
                        </a>
                    </div>
                </div>

                <div class="max-w-sm w-96 p-8 bg-white border border-gray-200 rounded-lg shadow">
                    <div class="p-5 flex justify-between items-center">
                        <h5 class=" text-2xl font-bold tracking-tight text-gray-900">Quizzes</h5>
                        <img src="{{ asset('asset/img/dashboard/quiz.gif') }}" alt=""
                             class="size-14">
                    </div>
                    <div class="p-5 flex items-center justify-center">
                        <a href="#"
                           class="inline-flex items-center justify-center px-3 py-2 w-full text-sm
                           font-medium
                           text-center text-white bg-teal-400 rounded-lg">
                            2
                        </a>
                    </div>
                </div>

                <div class="max-w-sm w-96 p-8 bg-white border border-gray-200 rounded-lg shadow">
                    <div class="p-5 flex justify-between items-center">
                        <h5 class=" text-2xl font-bold tracking-tight text-gray-900">Total
                            Questions</h5>
                        <img src="{{ asset('asset/img/dashboard/question.gif') }}" alt=""
                             class="size-14">
                    </div>
                    <div class="p-5 flex items-center justify-center">
                        <a href="#"
                           class="inline-flex items-center justify-center px-3 py-2 w-full text-sm
                           font-medium
                           text-center text-white bg-teal-400 rounded-lg">
                            2
                        </a>
                    </div>
                </div>

                <div class="max-w-sm w-96 p-8 bg-white border border-gray-200 rounded-lg shadow">
                    <div class="p-5 flex justify-between items-center">
                        <h5 class=" text-2xl font-bold tracking-tight text-gray-900">Unique
                            Visitors</h5>
                        <img src="{{ asset('asset/img/dashboard/visitors.gif') }}" alt=""
                             class="size-14">
                    </div>
                    <div class="p-5 flex items-center justify-center">
                        <a href="#"
                           class="inline-flex items-center justify-center px-3 py-2 w-full text-sm
                           font-medium
                           text-center text-white bg-teal-400 rounded-lg">
                            2
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </main>

@endsection
