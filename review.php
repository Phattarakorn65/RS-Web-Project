<?php
include('db.php');
$id = $_GET['id'];
$sql = "SELECT * FROM reviews WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($row['restaurant']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2><?php echo htmlspecialchars($row['restaurant']); ?></h2>
    <p><strong>โดย:</strong> <?php echo htmlspecialchars($row['name']); ?></p>
    <p><strong>คะแนน:</strong> <?php echo str_repeat("⭐", $row['rating']); ?></p>
    <p><strong>รีวิว:</strong><br> <?php echo nl2br(htmlspecialchars($row['comment'])); ?></p>
    <a href="index.php" class="btn btn-secondary mt-3">← กลับหน้าหลัก</a>
</div>
</body>
</html>
