<?php
$dir = "uploads/";
if (!is_dir($dir)) mkdir($dir, 0777, true);

if (isset($_POST['up'])) {
    $target = $dir . "client.exe";
    if (move_uploaded_file($_FILES["f"]["tmp_name"], $target)) {
        echo "<center><h3 style='color:#a855f7'>Файл обновлен успешно!</h3></center>";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Thunderhack Admin</title>
    <style>
        body { background: #0a0a0c; color: white; font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .box { background: #111217; padding: 40px; border-radius: 12px; border: 1px solid #2a2d35; text-align: center; }
        button { background: linear-gradient(90deg, #2563eb, #db2777); color: white; border: none; padding: 10px 25px; border-radius: 5px; cursor: pointer; font-weight: bold; }
        input { margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Управление файлом</h2>
        <p>Загрузи новый .exe файл для кнопки на сайте</p><br>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="f" required><br>
            <button type="submit" name="up">ОБНОВИТЬ КЛИЕНТ</button>
        </form>
    </div>
</body>
</html>
