@extends('layout/main')

@section('title','Create New')

@section('container')
 <div class="container">
 <div class="row">
 <div class="col-10">
 
 <form method="post" action="/data/{{$data->id}}">
 @method('put')
 @csrf
<div class="mb-3">
  <label for="game" class="form-label">News Title</label>
  <input type="text" class="form-control" id="game" placeholder="Insert your news title" name="game">
</div>
<div class="mb-3">
  <label for="news" class="form-label">News</label>
  <input type="text" class="form-control" id="news" placeholder="Type your news here" name="news">
</div>
<div class="mb-3">
  <label for="author" class="form-label">Name</label>
  <input type="text" class="form-control" id="author" placeholder="Insert your name" name="author">
</div>
<div class="mb-3">
  <label for="tanggal" class="form-label">Date</label>
  <input type="text" class="form-control" id="tanggal" placeholder="Insert date" name="tanggal">
</div>
<button type="submit" class="btn btn-primary">Edit</button>
</form>
 
 </div>
 </div>
 </div>
 @endsection