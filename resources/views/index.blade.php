@extends('layout')

@section('content')

<link rel="stylesheet" href="{{asset('assets/css/index.css')}}">

    <div>
        <center>
            <div class="navbar">
                <p class="judul-navbar">Lab Komputer</p>
                <p class="addnew"><a href="add" class="linkadd">Add New</a> </p>
            </div>
        </center>
        <center>
            <div class="table">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Ruang</th>
                    <th>Computer</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($computers as $computer)
            <tbody>
                <tr>
                    <td>{{$computer['nama'] }}</td>
                    <td>{{$computer['nis'] }}</td>
                    <td>{{$computer['ruang'] }}</td>
                    <td>{{$computer['computer'] }}</td>
                    <th>
                        <div class="row">
                        <a href="/edit/{{$computer['id']}}" class="linkeditya"><p class="editya">Edit</p></a><p class="doneya">Done</p>
                        </div>
                    </th>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
        </center>
        
    </div>

@endsection