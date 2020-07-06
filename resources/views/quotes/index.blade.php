<html>
    <h1>Quotes</h1>
    <ol>
        @foreach($quotes as $quote)
            <li>{{ $quote['quote'] }} - {{ $quote['author'] }}</li>
        @endforeach
    </ol>
</html>
