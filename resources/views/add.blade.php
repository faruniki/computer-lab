@extends('layout')

@section('content')

<link rel="stylesheet" href="assets/css/add.css">

<div>
    <center>
        <div class="navbar">
            <p class="judul-navbar">Lab Komputer</p>
            <p class="back"><a href="/" class="linkback">Back</a> </p>
        </div>
    </center>
    <center>
        <div>
            <p class="wikcom">Complete Your Information</p>
            <form action="/store" class="form" method="post">
                @csrf
                <input type="text" name="nama" placeholder="Full Name">
                <input type="text" name="nis" placeholder="NIS Number">
                <input type="text" name="ruang" placeholder="Ruang">
                <input type="text" name="computer" placeholder="Computer">
                <button class="submitcoi" type="submit" name="submit" style="border-radius:100px, width:450px">Submit</button>
            </form>
        </div>
    </center>

</div>

@endsection