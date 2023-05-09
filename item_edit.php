<?php
// Include database connection code
include('Includes/config.php');
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Validate form inputs
$id = $id['id'];
$item_code = $item_code['item_code'];

$item_name = $_POST['item_name'];

 $item_category = $_POST['item_category'];

 $item_sub_category = $_POST['item_sub_category'];

$quantity = $_POST['quantity'];



// Perform form validation
// ...

// Update customer data in the database
$sql = "UPDATE item SET item_code = '$item_code', item_name = '$item_name', item_category = '$item_category',
item_sub_category = '$item_sub_category', quantity = '$quantity' WHERE id = $id";


}
?>



<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
  <link rel="stylesheet" href="css/updateitem.css">
</head>
<body>
   <table> 
    
   <h2>Item List</h2>
<form action="item_edit.php" method="POST"> <input type="hidden" name="id" value="<id>">

    <div class="form-group">
        <label for="item_code">Item Code:</label>
        <input type="text" class="form-control" id="item_code" name="item_code" required>
    </div>
    <div class="form-group">
        <label for="item_name">Item Name:</label>
        <input type="text" class="form-control" id="item_name" name="item_name" required>
    </div>
    <div class="form-group">
         <label for="item_category">Item Category:</label>
         <select class="form-control" id="item_category" name="item_category" required>
         <option value="">Select Category</option>
         <option value="Printers">Printers</option>
         <option value="Laptops">Laptops</option>
        <option value="Gadgets">Gadgets</option>
        <option value="Ink bottels">Ink bottels</option>
        <option value="Cartridges">Cartridges</option>
        </select>
    </div>
    <div class="form-group">
       <label for="item_sub_category">Item Sub Category:</label>
       <select class="form-control" id="item_sub_category" name="item_sub_category" required>
       <option value="">Select Sub Category</option>
       <option value="HP">HP</option>
       <option value="Dell">Dell</option>
       <option value="Lenovo">Lenovo</option>
       <option value="Acer">Acer</option>
       <option value="Samsung">Samsung</option>
    </select>
    </div>
    <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" class="form-control" id="quantity" name="quantity" required>
    </div>
    <div class="form-group">
        <label for="unit_price">Unit Price:</label>
        <input type="float" class="form-control" id="unit_price" name="unit_price" required>
    </div>
        <button type="submit" class="btn btn-primary">Update</button>
</form>
</table>


</body>
</html>









