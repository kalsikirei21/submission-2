@extends('layouts/master')
@section("content")
<div class="container">
    <h1>Data User</h1>
    {{-- <input type = "text" value ={{$id}}> --}}
    <a class="btn btn-secondary" href="/users/create">Add User</a>
    @foreach ($data as $u)

    <table class ="table table-dark table-hover">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Telp</th>
            <th>Alamat</th>
            <th>AKSI</th>
        </tr>
    <tr>
        <td> {{ $u['nama']}}</td>
        <td>{{ $u['email']}}</td>
        <td>{{ $u['telp']}}</td>
        <td>{{ $u['alamat']['street']}}, {{$u['alamat']['postcode']}}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-info" href="/users/index/edit">EDIT</a>
             <form action="/users" method="POST">
                @csrf
                <input type="submit" class="btn btn-danger"value="delete">
            </div>
        </form>
    </td>
    </tr>
    @endforeach
</table>

</div>
@endsection

