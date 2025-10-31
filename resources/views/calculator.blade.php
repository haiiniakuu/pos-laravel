<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('calculator.store') }}" method="POST">
        @csrf

        <label for="">Nilai 1</label>
        <input type="number" name="nilai1"><br>

        <select name="simbol" id="" required>
            <option value=""></option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br>

        <label for="">Nilai 2</label>
        <input type="number" name="nilai2"><br>

        <button type="submit">Hitung</button><br><br>

        <p>Hasilnya adalah : {{ $hasil ?? 0}}</p>
    </form>
</body>

</html>