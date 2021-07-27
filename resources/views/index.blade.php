<h2>Store</h2>

<form action="{{ route('store') }}">
  @csrf
  <label for="name">Name</label><br>
  <input type="text" id="name" name="name" value=""><br>
  <label for="email">Email</label><br>
  <input type="email" id="email" name="email" value=""><br><br>
  <label for="password">Password</label><br>
  <input type="password" id="password" name="password" value=""><br><br>
  <input type="submit" value="Submit">
</form> 