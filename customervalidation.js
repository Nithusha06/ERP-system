function validateForm() {
    var title = document.forms["customerForm"]["title"].value;
    var firstName = document.forms["customerForm"]["first_name"].value;
    var lastName = document.forms["customerForm"]["last_name"].value;
    var contactNumber = document.forms["customerForm"]["contact_no"].value;
    var district = document.forms["customerForm"]["district"].value;

    if (title == "") {
      alert("Title must be filled out");
      return false;
    }

    if (firstName == "") {
      alert("First name must be filled out");
      return false;
    }

    if (lastName == "") {
      alert("Last name must be filled out");
      return false;
    }

    if (contactNumber == "") {
      alert("Contact number must be filled out");
      return false;
    } else if (!/^\d{10}$/.test(contactNumber)) {
      alert("Contact number must be a 10-digit number");
      return false;
    }

    if (district == "") {
      alert("District must be filled out");
      return false;
    }

    return true;
}
