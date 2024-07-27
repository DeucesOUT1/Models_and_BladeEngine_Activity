<header>
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-white text-lg">Book List</a>
            <form action="{{ route('books.search') }}" method="GET" class="flex">
                <input type="text" name="query" placeholder="Search by title or author" class="px-4 py-2 rounded-l">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r">Search</button>
            </form>
        </div>
    </nav>
</header>