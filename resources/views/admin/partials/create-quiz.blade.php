@extends('admin.layout')
@section('content')

    <main>
        <div class="p-2 sm:ml-64">
            <div class="p-4 mt-10 rounded-lg">
                <form action="{{ '' }}" method="POST" class="max-w-screen-lg mx-auto">
                    @csrf
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

                    <div class="grid grid-cols-12 md:gap-6">
                        <div class="col-span-11 relative z-0 w-full group">
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
                                    peer-focus:-translate-y-6">Question 1</label>
                        </div>
                        <div class="col-span-1 relative z-0 w-full pt-3 group text-right">
                            <button
                                class="text-green-500 font-medium text-sm px-5 py-2 text-center">
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

                    <div class="relative z-0 w-full mb-5 group">

                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                            focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                            Create
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </main>

@endsection
