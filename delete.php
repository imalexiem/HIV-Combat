<?php
$servername = "localhost";
$username = "root";
$password = "holmes";
$dbname = "hivdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $PatientID = $_POST["PatientID"];
    
    // Delete from demographic table
    $sql = "DELETE FROM demographic WHERE PatientID='$PatientID'";
    if ($conn->query($sql) === TRUE) {
        echo "Demographic record deleted successfully<br>";
    } else {
        echo "Error deleting demographic record: " . $conn->error;
    }

    // Delete from Occupation table
    $sql = "DELETE FROM Occupation WHERE PatientID='$PatientID'";
    if ($conn->query($sql) === TRUE) {
        echo "Occupation record deleted successfully<br>";
    } else {
        echo "Error deleting occupation record: " . $conn->error;
    }

    // Delete from ExposureHistory table
    $sql = "DELETE FROM ExposureHistory WHERE PatientID='$PatientID'";
    if ($conn->query($sql) === TRUE) {
        echo "Exposure history record deleted successfully<br>";
    } else {
        echo "Error deleting exposure history record: " . $conn->error;
    }

    // Delete from ARV_Use table
    $sql = "DELETE FROM ARV_Use WHERE PatientID='$PatientID'";
    if ($conn->query($sql) === TRUE) {
        echo "ARV use history record deleted successfully<br>";
    } else {
        echo "Error deleting ARV use history record: " . $conn->error;
    }

    // Delete from Infection table
    $sql = "DELETE FROM Infection WHERE PatientID='$PatientID'";
    if ($conn->query($sql) === TRUE) {
        echo "Infection history record deleted successfully<br>";
    } else {
        echo "Error deleting infection history record: " . $conn->error;
    }
} else {
    echo "Invalid request method";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
    <link rel="stylesheet" href="Dashboard.css">
</head>
<body>
    <h2>Delete Record</h2>
    <form action="delete.php" method="post">
        Patient ID: <input type="text" name="PatientID" required><br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>
