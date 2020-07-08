<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Record Form</title>
</head>

<body>
  <form action="insert.php" method="post">
    <h1>SignUp Form</h1>
    <p>
      <label for="firstName">First Name:</label>
      <input type="text" name="first_name" id="firstName">
    </p>
    <p>
      <label for="lastName">Last Name:</label>
      <input type="text" name="last_name" id="lastName">
    </p>
    <p>
      <label for="emailAddress">Email Address:</label>
      <input type="text" name="email" id="emailAddress">
    </p>
    <input type="submit" value="Submit">
  </form>
</body>

</html>