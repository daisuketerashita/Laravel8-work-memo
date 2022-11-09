<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div>
        <div>
            <ul>
                <li>{{ $schedule->sch_date }}</li>
                <li>{{ $schedule->sch_part }}</li>
            </ul>
            @foreach($exercises as $exercise)
            <ul>
                <li>{{ $exercise->name }}</li>
                <li>重さ：{{ $exercise->weight }}</li>
                <li>回数：{{ $exercise->repetition }}</li>
                <li>セット数：{{ $exercise->set_num }}</li>
                <li>メモ：{{ $exercise->exe_contents }}</li>
            </ul>
            <a href="{{ route('exe.edit',['id' => $schedule->id,'exe_id' => $exercise->id]) }}">編集</a>
            @endforeach
        </div>
    </div>
    <a href="{{ route('index') }}">戻る</a>
    </div>
    </div>
</body>

</html>