<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
</head>
<body>

<h1>Feedback</h1>

<?php
$conn = new mysqli ('localhost','root', '', 'form');
if ($conn -> connect_error){
    die('Connection failed :' .$conn -> connect_error);
}
else{
    $sql = "SELECT name, phone, email, msg FROM contact";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Name: " . $row["name"]. " - Phone: " . $row["phone"]. " - Email: " . $row["email"]. " - Message: " . $row["msg"]. "<br>";
        }
    } else {
        echo "No results";
    }
    $conn->close();
}
?>

</body>
</html>