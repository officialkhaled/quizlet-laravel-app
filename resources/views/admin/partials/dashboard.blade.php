@extends('admin.layout')
@section('content')

    <main>

        <div class="py-2 px-10 sm:ml-64">
            <div class="p-8 mt-10 rounded-lg">
                <h2 class="text-5xl">Welcome, <span class="text-blue-700">{{ $adminData->name }}</span>.</h2>
            </div>
        </div>

    </main>

@endsection
