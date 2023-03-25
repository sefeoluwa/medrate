// Establish a connection to the MySQL database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "hospitals_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the hospitals table
$sql = "CREATE TABLE hospitals (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  address VARCHAR(200) NOT NULL,
  city VARCHAR(50) NOT NULL,
  state VARCHAR(50) NOT NULL,
  country VARCHAR(50) NOT NULL DEFAULT 'Nigeria',
  phone VARCHAR(20),
  email VARCHAR(50),
  website VARCHAR(50),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table hospitals created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert some sample data into the hospitals table
$sql = "INSERT INTO hospitals (name, address, city, state, phone, email, website)
        VALUES ('Lagos University Teaching Hospital', 'Idi-Araba, Mushin', 'Lagos', 'Lagos', '+234-1-493 0560', 'info@luth.org.ng', 'www.luth.org.ng'),
               ('University College Hospital', 'Queen Elizabeth Rd', 'Ibadan', 'Oyo', '+234-2-241 2000', 'info@uch-ibadan.org.ng', 'www.uch-ibadan.org.ng'),
               ('National Hospital Abuja', 'Plot 132, Central District (Phase II)', 'Abuja', 'FCT', '+234-9-234 0721', 'info@nationalhospitalabuja.net', 'www.nationalhospitalabuja.net')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close the MySQL database connection
$conn->close();