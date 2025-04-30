<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Reviews</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">ร้านอาหารยอดนิยม 🍜</h1>
    <a href="submit.php" class="btn btn-primary mb-4">เขียนรีวิวร้านอาหาร</a>
    <div class="list-group">
        <?php
        $sql = "SELECT * FROM reviews ORDER BY created_at DESC";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo '<a href="review.php?id=' . $row['id'] . '" class="list-group-item list-group-item-action">';
            echo '<strong>' . htmlspecialchars($row['restaurant']) . '</strong> – ' . str_repeat("⭐", $row['rating']);
            echo '<br><small>โดย ' . htmlspecialchars($row['name']) . '</small>';
            echo '</a>';
        }
        ?>
    </div>
</div>
</body>
</html>
