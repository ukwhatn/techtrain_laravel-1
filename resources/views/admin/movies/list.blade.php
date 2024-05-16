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
            <th>タイトル</th>
            <th>画像</th>
            <th>公開年</th>
            <th>上映ステータス</th>
            <th>概要</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td><img src="{{ $movie->image_url }}" alt="{{ $movie->title }}" width="100"></td>
                <td>{{ $movie->published_year }}</td>
                <td>{{ $movie->is_showing ? '上映中' : '上映予定' }}</td>
                <td>{{ $movie->description }}</td>
                <td>
                    <a href="/admin/movies/{{ $movie->id }}/edit">編集</a>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
