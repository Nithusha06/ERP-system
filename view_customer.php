
<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
    <link rel="stylesheet" type="text/css" href="css/view_customer.css">
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
        <h2><center>Customer Details</center></h2>
        <form class="form-inline my-2 my-lg-0" action="" method="get">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search_query">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form><br>
            <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>First Name</th>
                    <th>Last Category</th>
                    <th>Contact Number</th>
                    <th>District</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include('Includes/config.php');
                if(isset($_GET['search_query']) && !empty($_GET['search_query'])) {
                    $search_query = $_GET['search_query'];
                    $query = "SELECT * FROM customer WHERE id = '$search_query'";
                } else {
                    $query = "SELECT * FROM customer";
                }
                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . $row['title'] . '</td>';
                        echo '<td>' . $row['first_name'] . '</td>';
                        echo '<td>' . $row['last_name'] . '</td>';
                        echo '<td>' . $row['contact_no'] . '</td>';
                        echo '<td>' . $row['district'] . '</td>';
                       
                        // echo '<td><a href="edit_item.php?id=' . $row['id'] . '">Edit</a> | <a href="delete_item.php?id=' . $row['id'] . '">Delete</a></td>';
                        echo "<td>";
                        echo "<a href='customer.php' class='btn btn-success'>Add</a>";
                        echo "<a href='Updatecustomer.php' class='btn btn-primary'>Edit</a>";
                        echo "<a href='deletecustomer.php' class='btn btn-danger'>Delete</a>";
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
