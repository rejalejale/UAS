@extends('layout/main')

@section('title','Data')

@section('container')
 <div class="container">
 <div class="row">
 <div class="col-10">
 
 <h1 class=mt-3 >Admin Page</h1>

<a href="/data/create" class="btn btn-primary my-3">Insert News</a>

 <table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">#</th>
<th scope="col">Title</th>
<th scope="col">Tanggal</th>
<th scope="col">News</th>
<th scope="col">Author</th>
<th scope="col"></th>
</tr>
</thead>
<tbody>
@foreach($data as $dat)
<tr>
<th scope="row">{{ $loop->iteration }}</th>
<td>{{ $dat->game }}</td>
<td>{{ $dat->tanggal }}</td>
<td>{{ $dat->news }}</td>
<td>{{ $dat->author }}</td>
<td>


<a  href="{{"data/".$dat->id}}" class="btn btn-danger btn-sm">Delete</a>


<a  href="/data/{{ $dat->id }}/edit"class="btn btn-success btn-sm">Edit</a>

</td>
</tr>
@endforeach
</tbody>

 </table>

 </div>
 </div>
 </div>
 @endsection