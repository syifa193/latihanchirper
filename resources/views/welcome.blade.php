<!DOCTYPE html>
<html>
<head>
    <title>Tes Chirps</title>
</head>
<body>

<h1>Daftar Chirps</h1>

@foreach ($chirps as $chirp)
    <p>{{ $chirp['author'] }} - {{ $chirp['text'] }}</p>
@endforeach

</body>
</html>