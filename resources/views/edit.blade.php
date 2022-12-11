@extends('layout')

@section ('content')

<link rel="stylesheet" href="assets/css/edit.css">

<div>
    <center>
        <div class="navbar">
            <p class="judul-navbar">Lab Komputer</p>
            <p class="back"><a href="/" class="linkback">Back</a> </p>
        </div>
    </center>
    <center>
        <div>
            <p class="wikcom">Edit Access</p>
            <form action="/update/{{$computer['id']}}" class="form" method="post">
                @csrf
                @method('PATCH')
                <input type="text" name="nama" value="{{$computer['nama']}}">
                <input type="text" name="nis" value="{{$computer['nis']}}">
                <input type="text" name="rayon" value="{{$computer['ruang']}}">
                <input type="text" name="computer" value="{{$computer['computer']}}">
                <button class="submitcoi" type="submit" name="submit" style="border-radius:100px, width:450px">Submit</button>
            </form>
            
        </div>
    </center>
</div>

@endsection