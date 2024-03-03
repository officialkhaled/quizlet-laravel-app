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
                <form method="POST" action="{{ route('category.store') }}" class="flex
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
