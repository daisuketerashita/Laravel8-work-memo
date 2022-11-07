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
                <li>{{ $schedule->sch_contents }}</li>
            </ul>
        </div>
    </div>
    <a href="{{ route('index') }}">戻る</a>
    </div>
    </div>
</body>

</html>