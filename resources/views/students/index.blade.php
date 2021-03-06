@extends('layouts.app')
<a href="index.blade.php">Home</a>
<a href="students/index.blade.php">Student</a>

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('STUDENT DATA') }}</div>

<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

<p>Cari Data Student :</p>
	<form action="/students/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Student .." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>

<a href="/students/create" class="btn btn-primary">Add Data</a> 
<br><br>

<table class="table table-responsive table-striped">
<thead>
<tr>
<th>NIM</th>
<th>Name</th>
<th>Class</th>
<th>Departement</th>
</tr>
</thead>
<tbody>
@foreach($student as $s)
<tr>
<td>{{ $s->nim }}</td>
 <td>{{ $s->name }}</td>
 <td>{{ $s->kelas->class_name }}</td>
<td>
<form action="/students/{{$s->id}}" method="post">
 <a href="/students/{{$s->id}}/edit" class="btn btnwarning">Edit</a>
 @csrf
 @method('DELETE')
 <button type="submit" name="delete" class="btn btndanger">Delete</button>
</form>
<td>
<form action="/students/{{$s->id}}" method="post">
 <a href="/students/{{$s->id}}/show" class="btn btninfo">View</a>
</form>
</td>

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