<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPをHTML内に埋め込む</title>
</head>
<body>
    <h1>PHPをHTML内に埋め込む例</h1>
    <p>現在の日時は：</p>
    <p>
        <?php
        echo date('Y年m月d日 H:i:s');
        ?>

    </p>
</body>
</html>