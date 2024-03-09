<a href="{{ route('quiz.question.edit', ['quiz' => $question['quiz_id'], 'id' => $question['id']]) }}"
   class="bg-green-500 px-5 py-2 rounded-lg font-medium text-white hover:bg-green-700">
    Edit
</a>

<a href="{{ route('quiz.question.delete', ['quiz' => $question['quiz_id'], 'id' => $question['id']]) }}"
   class="bg-red-700 px-5 py-2 rounded-lg font-medium text-white hover:bg-red-800">
    Delete
</a>
