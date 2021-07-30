<h2>Update Inventory</h2>
<form action="{{ route('inventory-update',$inventories->id) }}">
  @csrf
  <label for="name">Name</label><br>
  <input type="text" id="name" name="name" value="{{ $inventories->name }} "><br>
  <label for="serialnumber">Serial Number</label><br>
  <input type="serialnumber" id="serialnumber" name="serialnumber" value="{{ $inventories->serialnumber }}"><br><br>
  <label for="type">Type</label><br>
  <input type="text" id="type" name="type" value="{{ $inventories->type }}"><br><br>
  <input type="submit" value="Submit">
</form> 
<button type="button" onclick="window.location='{{route('delete', $inventories->id)}}'">Delete</button>