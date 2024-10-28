php 

Copy code 

<?php 

// Database connection 

$servername = "localhost"; 

$username = "root"; 

$password = ""; 

$dbname = "contact_form_db"; // Replace with your database name 

 

// Create connection 

$conn = new mysqli($servername, $username, $password, $dbname); 

 

// Check connection 

if ($conn->connect_error) { 

    die("Connection failed: " . $conn->connect_error); 

} 

 

// Get form data 

$name = $_POST['name']; 

$email = $_POST['email']; 

$message = $_POST['message']; 

 

// Insert form data into the database 

$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')"; 

 

if ($conn->query($sql) === TRUE) { 

    echo "Thank you! Your message has been received."; 

} else { 

    echo "Error: " . $sql . "<br>" . $conn->error; 

} 

 

// Close connection 

$conn->close(); 

?> 