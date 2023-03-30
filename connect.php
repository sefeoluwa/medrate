<?php

// Connect to the SQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get search input from the user
$search_query = $_POST['search_box'];

// Construct the SQL query
$sql_query = "SELECT * FROM myTable WHERE column1 LIKE '%$search_query%'";

// Execute the query and get the results
$result = $conn->query($sql_query);

// Display the results
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Column1: " . $row["column1"]. " - Column2: " . $row["column2"]. "<br>";
  }
} else {
  echo "0 results";
}

// Close the database connection
$conn->close();

?>
