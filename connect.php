<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "summer_training";

$conn = new mysqli($hostname, $username, $password, $dbname); 

if($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
echo "Connected successfully <br>";

$name = $_POST['name'];
$score = $_POST['score'];

$sql = "INSERT INTO `quiz_scores` (`Player_name`, `Scores`) VALUES ('$name','$score')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
