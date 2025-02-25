<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メンター一覧</title>
</head>
<body>
    <h1>メンター一覧</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>名前</th>
                <th>電話番号</th>
                <th>指導可能言語</th>
                <th>経験年数</th>
                <th>自己紹介</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mentors as $mentor)
                <tr>
                    <td>{{ $mentor->name }}</td>
                    <td>{{ $mentor->tel }}</td>
                    <td>{{ $mentor->teaching_languages }}</td>
                    <td>{{ $mentor->experience_years }}年</td>
                    <td>{{ $mentor->introduction }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ asset('/') }}">戻る</a>
</body>
</html>
