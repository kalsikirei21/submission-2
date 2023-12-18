@extends('layouts.main')
@section('content')
    <div class ="container">
    <a href="/books/create" class="btn btn-primary">Add Books</a>
    <table border="1" class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Published Date</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach ($books as $b)
        <tr>
            <td>{{$b->id}}</td>
            <td>{{$b->book_name}}</td>
            <td>{{$b->author}}</td>
            <td>{{$b->author_name}}</td>
            <td>{{$b->published_at}}</td>
         <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/books/{{$b->id}}/edit-book" class="btn btn-info">Edit</a>
            <form action="/books/{{$b->id}}" method="get">
                @csrf
                @method('delete')
                <input type="submit" value ="delete" class="btn btn-danger">
            </form>
            </div>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
   @include('layouts.header')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2>Data Buku</h2>
    <br>

    @if (session('status'))
        <h4>{{session('status')}}</h4>
    @endif

    <br>
    <form name="book-save-form" id="book-save-form" action="/books/save-book" method="POST">
        @csrf
        <table  class="table table-striped">
            <tr>
                <td>ID</td>
                <td>:</td>
                <div class="mb-3">
                <td><input type="text" name="id" id="id" class="id" readonly></td>

            </tr>
            <tr>
                <td>Book Name</td>
                <td>:</td>
                <td><input type="text" name="book_name" id="book_name" class="book-name"></td>

            </tr>
            <tr>
                <td>Author</td>
                <td>:</td>
                <td><input type="text" name="author" id="book_name" class="author"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit"  class="btn btn-primary" >Save</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
</div>

    <table>
        <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Published Date</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $b)
        <tr>
            <td>{{ $b['id'] }}</td>
            <td>{{ $b['book_name'] }}</td>
            <td>{{ $b['author'] }}</td>
            <td>{{ $b['published_at'] }}</td>
            <td>
                <form action="{{ url('/books/delete-book?id=').$b['id'] }}" method="get">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <script>
        var button =$('.button-edit')
$(document).ready(function (){

})
button.each(function(index){
$('click', function(){

})


})
</script>
</body>
</html> --}}
