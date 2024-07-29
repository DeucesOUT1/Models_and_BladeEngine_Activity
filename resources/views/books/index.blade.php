@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Book List</h1>
@if(isset($query))
<p>Search results for: "{{ $query }}"</p>
@endif
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    ISBN
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Author
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Date Published
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $book->id }}
                </th>
                <td class="px-6 py-4">
                {{ $book->isbn }}
                </td>
                <td class="px-6 py-4">
                {{ $book->title }}
                </td>
                <td class="px-6 py-4">
                {{ $book->author }}
                </td>
                <td class="px-6 py-4">
                {{ $book->description }}
                </td>
                <td class="px-6 py-4">
                {{ $book->date_published }}
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="border px-4 py-2 text-center">No books found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection



