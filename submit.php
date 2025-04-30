<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>เขียนรีวิว</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>เขียนรีวิวร้านอาหาร</h2>
    <form action="submit_review.php" method="POST">
        <div class="mb-3">
            <label>ชื่อของคุณ</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>ชื่อร้านอาหาร</label>
            <input type="text" name="restaurant" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>คะแนน</label>
            <select name="rating" class="form-select" required>
                <option value="">เลือกคะแนน</option>
                <option value="5">⭐⭐⭐⭐⭐</option>
                <option value="4">⭐⭐⭐⭐</option>
                <option value="3">⭐⭐⭐</option>
                <option value="2">⭐⭐</option>
                <option value="1">⭐</option>
            </select>
        </div>
        <div class="mb-3">
            <label>ความคิดเห็น</label>
            <textarea name="comment" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">ส่งรีวิว</button>
    </form>
</div>
</body>
</html>
