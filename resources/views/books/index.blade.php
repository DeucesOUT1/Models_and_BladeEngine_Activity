@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Book List</h1>
    <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="w-1/3 px-4 py-2">ISBN</th>
                <th class="w-1/3 px-4 py-2">Title</th>
                <th class="w-1/3 px-4 py-2">Author</th>
                <th class="w-1/3 px-4 py-2">Description</th>
                <th class="w-1/3 px-4 py-2">Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td class="border px-4 py-2">{{ $book->isbn }}</td>
                    <td class="border px-4 py-2">{{ $book->title }}</td>
                    <td class="border px-4 py-2">{{ $book->author }}</td>
                    <td class="border px-4 py-2">{{ $book->description }}</td>
                    <td class="border px-4 py-2">{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
