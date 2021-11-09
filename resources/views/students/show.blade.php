<form action="/students/{{$student->id}}" method="post">
 {{csrf_field()}}
 @method('PUT')
 <input type="hidden" name="id" value="{{$student->id}}"></br>
 <div class="form-group">
 <label for="nim">NIM</label>
 <input type="text" class="form-control" 
required="required" name="nim" value="{{$student->nim}}"></br>
 </div>
 <div class="form-group">
 <label for="name">Name</label>
 <input type="text" class="form-control" 
required="required" name="name" value="{{$student->name}}"></br>
 </div>
 <div class="card-header">{{ $student->nim }}</div>
<div class="card-body">
Name : {{ $student->name }} <br>
Class : {{ $student->kelas->class_name }} <br>
Department : {{ $student->department }} <br>
Phone Number : {{ $student->phone_number }} <br>
Created at : {{ $student->created_at }} <br>
Updated at : {{ $student->updated_at }} <br>
</div>
</div>
 <div class="form-group">
 <label for="department">Department</label>
 <input type="text" class="form-control" 
required="required" name="department" value="{{$student-
>department}}"></br>
 </div>
 <div class="form-group">
 <label for="phone_number" >Phone Number</label>
 <input type="text" class="form-control" 
required="required" name="phone_number" value="{{$student-
>phone_number}}"></br>
 </div>
 <button type="submit" name="back" class="btn btn-primary 
float-right"><a href="/students/{{$s->id}}/home" class="btn btninfo">Back</a></button>
</form>