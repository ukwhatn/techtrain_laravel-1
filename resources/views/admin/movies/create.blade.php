<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
<h2>新規追加</h2>
@if ($errors->any())
    <h3>エラー</h3>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/admin/movies/store" method="post">
    @csrf
    <table>
        <tr>
            <td>
                <label for="title">タイトル</label>
            </td>
            <td>
                <input type="text" name="title" id="title" value="{{ old('title') }}">
            </td>
        </tr>
        <tr>
            <td>
                <label for="image_url">画像</label>
            </td>
            <td>
                <input type="text" name="image_url" id="image_url" value="{{ old('image_url') }}">
            </td>
        </tr>
        <tr>
            <td>
                <label for="published_year">公開年</label>
            </td>
            <td>
                <input type="number" name="published_year" id="published_year" value="{{ old('published_year') }}">
            </td>
        </tr>
        <tr>
            <td>
                <label for="is_showing">上映ステータス</label>
            </td>
            <td>
                <input type="checkbox" name="is_showing" id="is_showing"
                       value="1" {{ old('is_showing') ? 'checked' : '' }}>
            </td>
        </tr>
        <tr>
            <td>
                <label for="description">概要</label>
            </td>
            <td>
                <textarea name="description" id="description">{{ old('description') }}</textarea>
            </td>
        </tr>
    </table>
    <button type="submit">登録</button>
</form>
</body>
</html>
