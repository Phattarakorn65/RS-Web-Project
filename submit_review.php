<?php
include('db.php');

$name = $_POST['name'];
$restaurant = $_POST['restaurant'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];

$stmt = $conn->prepare("INSERT INTO reviews (name, restaurant, rating, comment) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssis", $name, $restaurant, $rating, $comment);

if ($stmt->execute()) {
    header("Location: index.php");
} else {
    echo "เกิดข้อผิดพลาด: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
