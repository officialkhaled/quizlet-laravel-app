@extends('admin.layout')
@section('content')

    <main>

        <div class="p-2 sm:ml-64">
            <div class="bg-gray-200 m-8 rounded-lg">
                <div class="px-1 pt-4 rounded-lg flex items-center justify-between">
                    <ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium
                    text-center text-gray-500 border border-gray-200 rounded-lg sm:text-base sm:p-4 sm:space-x-4 rtl:space-x-reverse">
                        <li class="flex items-center">
                            Category
                            <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                <path stroke="currentColor" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="2"
                                      d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                            </svg>
                        </li>
                        <li class="flex items-center text-blue-600">
                            Category List
                            {{--<svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                                <path stroke="currentColor" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="2"
                                      d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                            </svg>--}}
                        </li>
                        {{-- <li class="flex items-center">
                             Review
                         </li>--}}
                    </ol>


                    <button class="inline-flex items-center justify-center px-5 py-2 mr-3 text-base
                   font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800"
                            data-modal-target="addCategory-modal"
                            data-modal-toggle="addCategory-modal">
                        Add
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" clip-rule="evenodd"
                             fill-rule="evenodd" stroke-linejoin="round"
                             stroke-miterlimit="2" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m12.002 2c5.518 0 9.998 4.48 9.998 9.998 0 5.517-4.48 9.997-9.998 9.997-5.517 0-9.997-4.48-9.997-9.997 0-5.518 4.48-9.998 9.997-9.998zm-.747 9.25h-3.5c-.414 0-.75.336-.75.75s.336.75.75.75h3.5v3.5c0 .414.336.75.75.75s.75-.336.75-.75v-3.5h3.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-3.5v-3.5c0-.414-.336-.75-.75-.75s-.75.336-.75.75z"
                                fill-rule="nonzero"/>
                        </svg>
                    </button>
                </div>

                <div class="p-4 rounded-lg">
                    <div class="relative overflow-x-auto shadow-sm sm:rounded-md">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-300 divide-x-2
                            divide-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center">
                                    SL
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    <div class="flex items-center justify-center">
                                        Action
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-900">
                            @forelse($categories as $category)
                                <tr class="bg-white border-b">
                                    <th scope="row"
                                        class="px-6 py-2 font-medium  whitespace-nowrap text-center">
                                        {{ $loop->iteration + $categories->firstItem() - 1 }}
                                    </th>
                                    <td class="px-6 py-2 min-w-52 max-w-52 text-center">
                                        {{ $category->name }}
                                    </td>
                                    <td class="px-6 py-2 text-center ">
                                        <form action="{{ route('update-status', $category->id) }}"
                                              method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="checkbox" value="" class="sr-only peer"
                                                       onchange="this.form.submit()" {{ $category->status == 1 ? 'checked' : '' }}>
                                                <div
                                                    class="relative w-9 h-5 bg-gray-200
                                        peer-focus:outline-none rounded-full peer
                                        peer-checked:after:translate-x-full
                                        rtl:peer-checked:after:-translate-x-full
                                        peer-checked:after:border-white after:content-['']
                                        after:absolute after:top-[2px] after:start-[2px]
                                        after:bg-white after:border-gray-300 after:border
                                        after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-blue-600">
                                                </div>
                                                <span
                                                    class="ms-3 text-sm font-medium
                                                    text-gray-900 min-w-14">{{ $category->status == 1 ?
                                                    'Active' : 'Inactive' }}</span>
                                            </label>
                                            <input type="hidden" name="id"
                                                   value="{{ $category->id }}">
                                        </form>

                                    </td>
                                    <td class="px-6 py-2 flex justify-center gap-3">
                                        <a href="{{ route('edit-category', $category->id) }}"
                                           class="bg-green-500 px-5 py-2 rounded-lg
                                           font-medium text-white hover:bg-green-700">Edit
                                        </a>
                                        <a href="{{ route('delete-category', ['id' => $category['id']]) }}"
                                           class="bg-red-700 px-5 py-2 rounded-lg font-medium text-white
                                   hover:bg-red-800">Delete</a>


                                        <input type="button" name="showDiv" onclick="showDiv()"
                                               class="bg-sky-500 px-5 py-2 rounded-lg font-medium text-white hover:bg-sky-800"
                                               value="Show Div"></input>


                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-2 text-center bg-white">
                                        No data found.
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>


                        <div class="bg-lime-400 text-center p-8 hidden" id="hiddenDiv">
                            <p class="text-4xl text-lime-800">
                                SUCCESS
                            </p>
                        </div>


                    </div>

                    {{-- Pagination --}}
                    <div class="pl-1 mt-7 text-right">
                        {{ $categories->links() }}
                    </div>

                </div>

            </div>
        </div>

        {{-- Add: Modal --}}
        <div id="addCategory-modal" tabindex="-1" aria-hidden="true"
             class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <div
                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Add new category
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
                        <form method="POST" action="{{ route('add-category') }}" class="flex
                        flex-col gap-2">
                            @csrf
                            <div class="mb-5">
                                <label for="name"
                                       class="block mb-2 text-sm font-medium text-gray-900">
                                    Category Name
                                </label>
                                <input type="text" id="name" name="name"
                                       class="bg-gray-50 border border-gray-300 text-gray-900
                                       text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                       placeholder="Category" required/>
                                <x-input-error :messages="$errors->get('name')"
                                               class="mt-2"/>
                            </div>
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

    </main>

    <script>

        function showDiv() {
            document.getElementById('hiddenDiv').style.display = "block";
        }

    </script>

@endsection
