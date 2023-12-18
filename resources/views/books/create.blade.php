@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Create Book</h1>

    <form action="/books/save-book" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID</label>
            <input type="text" name ="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('id')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Book Name</label>
            <input type="text" name="book_name" class ="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            @error('book_name')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>

            @enderror
        </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Author</label>
            <input type="text" name ="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            @error('author')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror
            <td><input type="text" name="author" id="author"></td>
            {{-- <td><input type="text" name="author" id="author"></td> --}}
            <td>
                <select name="author_id" id="author">
                    <option value="">-- Pilih Author --</option>
                    @foreach ($dataAuthor as $a)
                    <option value="{{ $a['author_id'] }}">{{ $a['author_name'] }}</option>
                    @endforeach
                </select>
            </td>
        </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Published Date</label>
            <input type="text" name ="published_at" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
            @error('published_at')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
            @enderror
        </div>
         <input type="submit" name="submit" value="Save" class="btn btn-success">
     </form>
</div>

</body>
</html>
@endsection

