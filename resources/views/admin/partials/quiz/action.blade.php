<a href="{{ route('quiz.edit', $quiz->id) }}"
   class="bg-green-500 px-5 py-2 rounded-lg font-medium text-white hover:bg-green-700">
    Edit
</a>

<a href="{{ route('quiz.delete', ['id' => $quiz['id']]) }}"
   class="bg-red-700 px-5 py-2 rounded-lg font-medium text-white hover:bg-red-800">
    Delete
</a>

<a href="{{ route('question.index', ['id' => $quiz['id']]) }}"
   class="bg-sky-700 px-5 py-2 rounded-lg font-medium text-white hover:bg-sky-800">
    Add Question
</a>
