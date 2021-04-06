@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-success" href="/create" role="button">Input Data</a>
                    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul Buku</th>
        <th>Keterangan</th>
        <th>Penerbit</th>
        <th>Stock</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($books as $book)
      <tr>
        <td>{{$book['id']}}</td>
        <td>{{$book['title']}}</td>
        <td>{{$book['description']}}</td>
        <td>{{$book['publisher']}}</td>
        <td>{{$book['qty']}}</td>
        
        <td><a href="edit/{{$book['id']}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="destroy/{{$book['id']}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
