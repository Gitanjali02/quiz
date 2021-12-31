<?php 

$name = $_POST['name'];
$score = $_POST['score'];

$sql = "INSERT INTO `quiz_scores` (`Player_name`, `Scores`) VALUES ('$name','$score')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>