<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="antialiased">
    <div>
        <form method='POST' action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>日付</label>
                    <input type='date' class='form-control' name='sch_date'>
                </div>
                <div class="form-group">
                    <label>部位</label>
                    <input type="radio" name="sch_part" value="胸">胸
                    <input type="radio" name="sch_part" value="脚">脚
                    <input type="radio" name="sch_part" value="背中">背中
                    <input type="radio" name="sch_part" value="腕">腕
                    <input type="radio" name="sch_part" value="肩">肩
                </div>
                <input type='submit' class='btn btn-primary' value='種目管理画面へ'>
            </div>
        </form>
        <a href="{{ route('index') }}" style="color: white">戻る</a>
    </div>
</body>

</html>