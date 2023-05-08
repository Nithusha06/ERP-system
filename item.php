<?php

include('Includes/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$item_code = $item_code['item_code'];

$item_name = $_POST['item_name'];

 $item_category = $_POST['item_category'];

 $item_sub_category = $_POST['item_sub_category'];

$quantity = $_POST['quantity'];

$unit_price = $_POST['unit_price'];


$sql = "INSERT INTO item (item_code, item_name, last_name,item_sub_category, quantity,unit_price )

VALUES ('$item_code', '$item_name', '$item_category', '$item_sub_category', '$quantity', '$unit_price')";


}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Item List</title>
 
    <!-- Add these lines to the head section of your HTML document -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/item.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/validation.js"></script>
</head>
<body>
    <div class="container">
      
        <h2>Item List</h2>
      
        <form action="view_item.php" method="post" onsubmit="return validateForm()">
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
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

        <br>
      
    </div>
</body>
</html>
