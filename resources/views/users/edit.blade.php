@extends('layouts.master')
@section("container")
<div class="container">
<h1>Edit Data</h1>
<form action="/users" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Nama</label>
        <input type="text"name="nama" id="disabledTextInput" class="form-control" placeholder="Masukan Nama">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Email</label>
        <input type="text" name="email" id="disabledTextInput" class="form-control" placeholder="Masukan Email">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">No Telpon</label>
        <input type="text" name="telp" id="disabledTextInput" class="form-control" placeholder="Masukan Telpon">
      </div>
      <div class="form-floating">
      <textarea class="form-control" placeholder="Leave a comment here" name="alamat" id="floatingTextarea2" style="height: 100px"></textarea>
      <label for="floatingTextarea2">Alamat</label>
      </div>
    <input type="submit" class="btn btn-success" name="submit" value ="Save">
</form>
</div>
