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
                                    <td scope="row"
                                        class="px-6 py-2 min-w-3 max-w-3 whitespace-nowrap text-center">
                                        {{ $loop->iteration + $categories->firstItem() - 1 }}
                                    </td>
                                    <td class="px-6 py-2 min-w-52 max-w-52 text-center">
                                        {{ $category->name }}
                                    </td>
                                    <td class="px-6 py-2 text-center ">
                                        <form
                                            action="{{ route('category.update-status', $category->id) }}"
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
                                        @include('admin.partials.category.action')

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
        @include('admin.partials.category.create')

    </main>

    <script>

        function showDiv() {
            document.getElementById('hiddenDiv').style.display = "block";
        }

    </script>

@endsection
