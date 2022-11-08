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
        <form method='POST' action="{{ route('exe.store',['id' => $schedule_id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>種目名</label>
                    <input type='text' class='form-control' name='name'>
                </div>
                <div class="form-group">
                    <label>重さ</label>
                    <input type="number" name="weight">kg
                </div>
                <div class="form-group">
                    <label>レップ数</label>
                    <input type="number" name="repetition">回
                </div>
                <div class="form-group">
                    <label>セット数</label>
                    <input type="number" name="set_num">セット
                </div>
                <div class="form-group">
                        <label>メモ</label>
                        <textarea name="exe_contents" id="" cols="30" rows="10"></textarea>
                    </div>
                <input type='submit' class='btn btn-primary' value='登録'>
            </div>
        </form>
        <a href="{{ route('index') }}" style="color: white">戻る</a>
    </div>
</body>

</html>