<form action="/users" method="post">
 @csrf
 <div class="form-group">
 <label for="nim">Username</label>
 <input type="text" class="form-control" 
required="required" name="username"></br>
 </div>
 <div class="form-group">
 <label for="name">Name</label>
 <input type="text" class="form-control" 
required="required" name="name"></br>
 </div>
 <div class="form-group">
 <label for="class">Email</label>
 <input type="text" class="form-control" 
required="required" name="email"></br>
 </div>
 <div class="form-group">
 <label for="department">Password</label>
 <input type="text" class="form-control" 
required="required" name="password"></br>
 </div>

 <button type="submit" name="add" class="btn btn-primary 
float-right">Add Data</button>
</form>