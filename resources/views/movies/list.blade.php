<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>画像</th>
            <th>タイトル</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
            <tr>
                <td><img src="{{ $movie->image_url }}" alt="{{ $movie->title }}" width="100"></td>
                <td>{{ $movie->title }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
