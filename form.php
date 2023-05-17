<?php 
$servername = "localhost";
$username = "id20235337_admin";
$password = "a2zrao@Erp.201801330011";
$dbname = "id20235337_updates";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
 
    // collect value of input field
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    // INSERT INTO `messages` (`name`, `email`, `message`) VALUES ('anand', '201801330011@cutmap.ac.in', 'help me please');


    $sql = "INSERT INTO `messages` (`name`, `email`, `message`) VALUES ('$name' , '$email', '$message')";
    header("Location: contact.html");

if(mysqli_query($conn, $sql)){
    echo '<script>alert("Message Sent Successfully") </script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close(); 
?> 