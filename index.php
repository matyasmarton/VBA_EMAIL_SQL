<!DOCTYPE html>
<html lang="en">
 
<head>
    <title>Python Flask Bucket List App</title>
 
 
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <link href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
 
 


</head>
<body>
<h2>Table</h2>
<table class = "prog-table">
<tr>
 <th>Address</th>
 <th>Subject</th>
 <th>Text</th>
 <th>Time</th> 

</tr>
  <?php
$servername = "localhost";
$username = "newuser";
$password = "password";
$dbname = "emaildb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT emailAddress, emailSubject, emailText FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Address: " . $row["emailAddress"]. " - Text: " . $row["emailText"]. " Subject " . $row["emailSubject"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 
</table>

</body>
   
 
</html>
