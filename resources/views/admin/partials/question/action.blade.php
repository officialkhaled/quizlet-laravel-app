<a href="{{ route('question.edit', $category->id) }}"
   class="bg-green-500 px-5 py-2 rounded-lg font-medium text-white hover:bg-green-700">
    Edit
</a>

<a href="{{ route('question.delete', ['id' => $category['id']]) }}"
   class="bg-red-700 px-5 py-2 rounded-lg font-medium text-white hover:bg-red-800">
    Delete
</a>
