<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
    <link rel="stylesheet" type="text/css" href="css/view_item.css">
    <!-- Add these lines to the head section of your HTML document -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div>
           
        </div>
        <h2><center>Items</center></h2>
        <form class="form-inline my-2 my-lg-0" action="" method="get">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search_query">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Item Code</th>
                    <th>Item Name</th>
                    <th>Item Category</th>
                    <th>Item Sub Category</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
          
                <?php
                  include('Includes/config.php');
                if(isset($_GET['search_query']) && !empty($_GET['search_query'])) {
                    $search_query = $_GET['search_query'];
                    $query = "SELECT * FROM item WHERE item_code = '$search_query'";
                } else {
                    $query = "SELECT * FROM item";
                }
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['item_code'] . '</td>';
                        echo '<td>' . $row['item_name'] . '</td>';
                        echo '<td>' . $row['item_category'] . '</td>';
                        echo '<td>' . $row['item_subcategory'] . '</td>';
                        echo '<td>' . $row['quantity'] . '</td>';
                        echo '<td>' . $row['unit_price'] . '</td>';
                        // echo '<td><a href="edit_item.php?id=' . $row['id'] . '">Edit</a> | <a href="delete_item.php?id=' . $row['id'] . '">Delete</a></td>';
                        echo "<td>";
                        echo "<a href='item.php' class='btn btn-success'>Add</a>";
                        echo "<a href='item_edit.php' class='btn btn-primary'>Edit</a>";
                        echo "<a href='deleteitem.php' class='btn btn-danger'>Delete</a>";
                     // echo  "<a href=\"delete.php?id=$item[id]\" class='btn btn-danger' onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";

                        echo '</tr>';
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>No items found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html
