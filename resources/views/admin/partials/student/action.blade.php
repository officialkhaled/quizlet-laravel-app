<a href="{{ route('student.edit', $student->id) }}"
   class="bg-green-500 px-3 py-1 rounded-md text-sm font-medium text-white hover:bg-green-700">
    Edit
</a>

<a href="{{ route('student.delete', ['id' => $student['id']]) }}"
   class="bg-red-700 px-3 py-1 rounded-md text-sm font-medium text-white hover:bg-red-800">
    Delete
</a>
