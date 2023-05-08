<?php

include('Includes/config.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $start_date = $_POST['date'];
    $end_date = $_POST['date'];
  
$sql = "SELECT invoice.invoice_number, invoice.date, customer.first_name, customer.last_name, 
customer.district, COUNT(invoice.item_count) AS item_count, SUM(invoice.amount) AS amount
FROM invoice
INNER JOIN customers ON invoice.id = customer.id
INNER JOIN invoice ON invoice.invoice_no = invoice.invoice_no
WHERE invoice.date BETWEEN '$start_date' AND '$end_date'
GROUP BY invoice.invoice_no";



?>
    <h2>Invoice Report</h2>
    <p>Date Range: <?php echo $start_date; ?> to <?php echo $end_date; ?></p>
    <table>
    <thead>
      <tr>
         <th>Invoice Number</th>
         <th>Date</th>
         <th>Customer</th>
         <th>Customer District</th>
         <th>Item Count</th>
         <th>Invoice Amount</th>
      </tr>
    </thead>
<tbody>
<?php
// Loop through the fetched invoice report data and display it in the table
  while ($row = mysqli_fetch_assoc($result)) 
  {
     echo "<tr>";
     echo "<td>" . $row['invoice_number'] . "</td>";
     echo "<td>" . $row['invoice_date'] . "</td>";
     echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
     echo "<td>" . $row['district'] . "</td>";
     echo "<td>" . $row['item_count'] . "</td>";
     echo "<td>" . $row['invoice_amount'] . "</td>";
     echo "</tr>";
    }
?>
</tbody>
</table>

<?php
}
?>

<!-- Create the HTML form to select the date range -->
<form action="invoicereport.php" method="POST">
<label for="start_date">Start Date:</label>
<input type="date" name="start_date" id="start_date" required><br>


<label for="end_date">End Date:</label>
<input type="date" name="end_date" id="end_date" required><br>


<input type="submit" value="Generate Report">
</form>