@extends('layouts.main')
@section('content')
<div class="container">
<h1>Edit Book</h1>

<form action="/books/{{$books->id}}" method="POST">
  @method('put')
    @csrf

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ID</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ="{{$books->id}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Book Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ="{{"$books->book_name"}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Author</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$books->author}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Published Date</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$books->published_at}}">
      </div>
     <input type="submit" name="submit" value="Save" class="btn btn-success">
 </form>
</div>

</form>
</div>
@endsection
