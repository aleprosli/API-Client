<h2>Store Inventory</h2>

<form action="{{ route('inventory-store') }}">
  @csrf
  <label for="name">Name</label><br>
  <input type="text" id="name" name="name" value=""><br>
  <label for="serialnumber">Serial Number</label><br>
  <input type="serialnumber" id="serialnumber" name="serialnumber" value=""><br><br>
  <label for="type">Type</label><br>
  <input type="text" id="type" name="type" value=""><br><br>
  <input type="submit" value="Submit">
</form> 