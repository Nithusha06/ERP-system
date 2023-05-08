<?php
// Include database connection code
include('Includes/config.php');
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Validate form inputs

$id = $_POST['id'];
$title = $_POST['title'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$contact_no = $_POST['contact_no'];
$district = $_POST['district'];

// Perform form validation
// ...

// Update customer data in the database
$sql = "UPDATE customer SET title = '$title', first_name = '$first_name', last_name = '$last_name',
contact_no = '$contact_no', district = '$district' WHERE id = $id";


}
?>

<form action="Updatecustomer.php" method="POST"> <input type="hidden" name="id" value="<id>">
<div class="form-group">
        <label for="title">Title:</label>
        <select name="title" id="title" class="form-control">
          <option value="">-- Select Title --</option>
          <option value="Mr">Mr</option>
          <option value="Mrs">Mrs</option>
          <option value="Miss">Miss</option>
          <option value="Dr">Dr</option>
        </select>
      </div>
      <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" id="first_name" name="first_name">
      </div>
      <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" id="last_name" name="last_name">
      </div>
      <div class="form-group">
        <label for="contact_no">Contact Number:</label>
        <input type="tel" class="form-control" id="contact_no" name="contact_no">
      </div>
      <div class="form-group">
        <label for="district">District:</label>
        <select name="district" id="district" class="form-control">
    <option value="">-- Select District --</option>
          <option value="">-- Select District --</option>
          <option value="Ampara">Ampara</option>
          <option value="Anuradhapura">Anuradhapura</option>
          <option value="Badulla">Badulla</option>
          <option value="Batticaloa">Batticaloa</option>
          <option value="Colombo">Colombo</option>
          <option value="Galle">Galle</option>
          <option value="Gampaha">Gampaha</option>
          <option value="Hambantota">Hambantota</option>
          <option value="Jaffna">Jaffna</option>
          <option value="Kalutara">Kalutara</option>
          <option value="Kandy">Kandy</option>
          <option value="Kegalle">Kegalle</option>
          <option value="Kilinochchi">Kilinochchi</option>
          <option value="Kurunegala">Kurunegala</option>
          <option value="Mannar">Mannar</option>
          <option value="Matale">Matale</option>
          <option value="Matara">Matara</option>
          <option value="Moneragala">Moneragala</option>
          <option value="Mullaitivu">Mullaitivu</option>
          <option value="Nuwara Eliya">Nuwara Eliya</option>
          <option value="Polonnaruwa">Polonnaruwa</option>
</select>
    
      </div>
      <button type="submit" formaction="view_customer.php" class="btn btn-primary">Update</button>
</form>