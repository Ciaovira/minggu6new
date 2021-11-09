<form action="/users/{{$user->id}}" method="post">
 {{csrf_field()}}
 @method('PUT')
 <input type="hidden" username="id" value="{{$user->id}}"></br>
 <div class="form-group">
 <label for="username">Username</label>
 <input type="text" class="form-control" 
required="required" name="username" value="{{$user->username}}"></br>
 </div>
 <div class="form-group">
 <label for="name">Name</label>
 <input type="text" class="form-control" 
required="required" name="name" value="{{$user->name}}"></br>
 </div>
 <div class="form-group">
 <label for="email">Email</label>
 <input type="text" class="form-control" 
required="required" name="email" value="{{$user-
>email}}"></br>
 </div>
 <div class="form-group">
 <label for="password">Password</label>
 <input type="text" class="form-control" 
required="required" name="password" value="{{$user-
>password}}"></br>
 </div>
 <div class="form-group">
 <label for="photo">Feature Image</label>
 <input type="file" class="form-control" required="required" 
name="photo" value="{{$student->photo}}"></br>
 <img width="150px" src="{{asset('storage/'.$student->photo)}}">
</div>

 <button type="submit" name="edit" class="btn btn-primary 
float-right">Save Changes</button>
</form>