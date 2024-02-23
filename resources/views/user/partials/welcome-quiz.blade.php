@extends('user.layout')
@section('content')

    <main>

        <div class="p-2 sm:ml-64">
            <div class="p-4 rounded-lg">
                <div class="flex items-center justify-center flex-col gap-3 h-20 mb-4 rounded">
                    <h1 class="text-4xl text-black uppercase font-bold">Welcome to quiz</h1>
                    <p>Engage live or asynchronously with quiz and poll questions
                        that participants complete at their own pace.</p>
                </div>

                <div
                    class="flex items-center justify-center flex-col gap-4 h-[calc(100vh-10rem)]
                    p-4 mb-4 bg-transparent rounded bg-gray-50 ">
                    <img src="{{ asset('asset/img/list.gif') }}" alt="banner" class="w-40 ">
                    <a href="{{ route('quiz') }}"
                       class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                       focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Start
                        your quiz</a>
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
