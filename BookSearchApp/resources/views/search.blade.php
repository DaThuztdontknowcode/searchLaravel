<!-- Trong file search.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search</title>
</head>
<body>
    <h1>Book Search</h1>

    <!-- Trong file search.blade.php -->
<form action="{{ url('/search') }}" method="post">
    @csrf
    <input type="text" name="query" placeholder="Search books...">
    <button type="submit">Search</button>
</form>


    @if(isset($books))
        <h2>Search Results:</h2>
        <ul>
            @forelse($books as $book)
                <li>{{ $book->title }} by {{ $book->author }}</li>
            @empty
                <li>No results found</li>
            @endforelse
        </ul>
    @endif
</body>
</html>
