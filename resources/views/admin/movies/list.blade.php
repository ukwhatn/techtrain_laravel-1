@extends('layouts.app')

@section('content')
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
                    <a href="/admin/movies/{{ $movie->id }}/edit">編集</a> /
                    {{-- 削除はプロンプトあり --}}
                    <form action="/admin/movies/{{ $movie->id }}/destroy" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('削除しますか？')">削除</button>
                    </form>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
