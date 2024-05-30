<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campaign_feedback";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Connection failed: " . $conn -> connect_error);
}

$name = $_POST["name"];
$email = $_POST["email"];
$feedback = $_POST["feedback"];
$rating = $_POST["rating"];

$sql = "INSERT INTO feedback (name, email, feedback, rating) VALUES ('$name', '$email', '$feedback', '$rating')";

if($conn -> query($sql) == TRUE){
    echo "<script>alert('Feedback submitted successfully');window.location.href='view_feedback.php'</script>";

}else{
    echo "Error: " . $sql . "<br>" . $conn -> error;
}

$conn -> close();
?>