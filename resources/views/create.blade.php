<!-- create.blade.php -->
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

                    <h2>Tambah Buku Baru</h2><br/>
      <form method="post" action="{{url('store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Judul buku:</label>
            <input type="text" class="form-control" name="title">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Description">Keterangan:</label>
              <input type="text" class="form-control" name="description">
            </div>
        </div>
          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Qty">Stock:</label>
            <input type="text" class="form-control" name="qty">
          </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Penerbit:</label>
                <select name="publisher">
                  <option value="Pustaka Imam Syafi`i">Pustaka Imam Syafi`i</option>
                  <option value="Pustaka Ibnu Katsir">Pustaka Ibnu Katsir</option>
                  <option value="Darul Haq">Darul Haq</option>  
                  <option value="At-tibyan">At-tibyan</option>  
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success btn-block">Submit</button>
            <a class="btn btn-primary btn-block" href="http://127.0.0.1:8000/home" role="button">Home</a>
          </div>  
          </div>
        </div>
      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection