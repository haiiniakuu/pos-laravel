<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Tambah</title>
</head>
<body>
    <form action="{{ route('storeKali') }}" method="post">
        @csrf
        <label for="">angka 1</label>
        <input type="text" placeholder="Masukan Angka" name="angka1">

        <label for="">angka 2</label>
        <input type="text" placeholder="Masukan Angka" name="angka2">

        <button type="submit" name="submit">Simpan</button>
    </form>

    <p>hasilnya adalah : <strong> {{ $jumlah ?? 0 }} </strong></p>
</body>
</html>