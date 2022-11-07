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
                    <label>種目名</label>
                    <input type='text' class='form-control' name='sch_date'>
                </div>
                <div class="form-group">
                    <label>重さ</label>
                    <input type="number">kg
                </div>
                <div class="form-group">
                    <label>レップ数</label>
                    <input type="number">回
                </div>
                <div class="form-group">
                    <label>セット数</label>
                    <input type="number">セット
                </div>
                <div class="form-group">
                        <label>メモ</label>
                        <textarea name="sch_contents" id="" cols="30" rows="10"></textarea>
                    </div>
                <input type='submit' class='btn btn-primary' value='登録'>
            </div>
        </form>
        <a href="{{ route('index') }}" style="color: white">戻る</a>
    </div>
</body>

</html>