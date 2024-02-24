@extends('admin.layout')
@section('content')

    <main>
        <div class="p-2 sm:ml-64">
            <div class="p-4 rounded-lg flex items-center justify-end">
                <a href="{{ route('create-quiz') }}"
                   class="inline-flex items-center justify-center px-5 py-2 mr-3 text-base
                   font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800">
                    Add
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" clip-rule="evenodd"
                         fill-rule="evenodd" stroke-linejoin="round"
                         stroke-miterlimit="2" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="m12.002 2c5.518 0 9.998 4.48 9.998 9.998 0 5.517-4.48 9.997-9.998 9.997-5.517 0-9.997-4.48-9.997-9.997 0-5.518 4.48-9.998 9.997-9.998zm-.747 9.25h-3.5c-.414 0-.75.336-.75.75s.336.75.75.75h3.5v3.5c0 .414.336.75.75.75s.75-.336.75-.75v-3.5h3.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-3.5v-3.5c0-.414-.336-.75-.75-.75s-.75.336-.75.75z"
                                fill-rule="nonzero"/>
                    </svg>
                </a>
            </div>

            <div class="p-4 rounded-lg">
                <div class="relative overflow-x-auto shadow-sm sm:rounded-lg">
                    <table
                            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center">
                                Topic name
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                No. of Questions
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Allocated Time (mins)
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                <div class="flex items-center justify-center">
                                    Action
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                                React Basics
                            </th>
                            <td class="px-6 py-4 text-center">
                                5
                            </td>
                            <td class="px-6 py-4 text-center">
                                20
                            </td>
                            <td class="px-6 py-4 flex justify-center gap-2">
                                <a href="{{ route('create-quiz') }}"
                                   class="bg-green-500 px-5 py-1 rounded-lg font-medium
                                   text-white hover:bg-green-700">Edit</a>
                                <a href="#"
                                   class="bg-red-700 px-5 py-1 rounded-lg font-medium text-white
                                   hover:bg-red-800">Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

@endsection
