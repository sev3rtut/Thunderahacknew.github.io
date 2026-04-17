<?php
$dir = "uploads/";
if (!is_dir($dir)) mkdir($dir, 0777, true);

if (isset($_POST['upload'])) {
    $file = $dir . "client.exe"; // Название всегда одно, чтобы ссылка не ломалась
    if (move_uploaded_file($_FILES["f"]["tmp_name"], $file)) {
        echo "<center><h3 style='color:lime'>Файл обновлен!</h3></center>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        body { background: #0d1117; color: white; display: flex; justify-content: center; padding-top: 100px; font-family: sans-serif; }
        .box { background: #161b22; padding: 40px; border-radius: 15px; border: 1px solid #30363d; text-align: center; }
        input { margin: 20px 0; }
        button { background: #8957e5; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Thunderhacknew Admin</h2>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="f" required><br>
            <button type="submit" name="upload">ОБНОВИТЬ ФАЙЛ СКАЧИВАНИЯ</button>
        </form>
    </div>
</body>
</html>
