@extends('layouts.app')
<a href="index.blade.php">Home</a>

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('DATA USERS') }}</div>

<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

<a href="/students/create" class="btn btn-primary">Add Data</a> 
<br><br>

<table class="table table-responsive table-striped">
<thead>
<tr>
<th>Email</th>
<th>Password</th>
<th>Username</th>
</tr>
</thead>
<tbody>
@foreach($user as $s)
<tr>
<td>{{ $s->username }}</td>
<td>{{ $s->name }}</td>
<td>{{ $s->email }}</td>
<td>{{ $s->password }}</td>
<td>
<form action="/users/{{$s->id}}" method="post">
 <a href="/users/{{$s->id}}/edit" class="btn btnwarning">Edit</a>
 @csrf
 @method('DELETE')
 <button type="submit" name="delete" class="btn btndanger">Delete</button>
</form>
<td>
<form action="/users/{{$s->id}}" method="post">
 <a href="/users/{{$s->id}}/view" class="btn btninfo">View</a>
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