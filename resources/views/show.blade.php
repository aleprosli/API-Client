<h2>Update</h2>
<form action="{{ route('update',$user->id) }}">
  @csrf
  <label for="name">Name</label><br>
  <input type="text" id="name" name="name" value="{{ $user->name }} "><br>
  <label for="email">Email</label><br>
  <input type="email" id="email" name="email" value="{{ $user->email }}"><br><br>
  <input type="submit" value="Submit">
</form> 
<button type="button" onclick="window.location='{{route('delete', $user->id)}}'">Delete</button>