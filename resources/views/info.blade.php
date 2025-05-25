<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Kegiatan</title>
    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    @extends('layouts.app')

    @section('content')

    <h3>Info Kegiatan</h3>
    <p>Informasi Kegiatan Siswa bulan ini:</p>
    <ul>
        <li>10 Agustus - Masa Orientasi Siswa</li>
        <li>17 Agustus - Upacara Hari Kemerdekaan RI</li>
    </ul>
    <p>Informasi Kegiatan Siswa bulan depan:</p>
    <ul>
        <li>17 September - Ujian Tengah Semester</li>
    </ul>

    @endsection

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>