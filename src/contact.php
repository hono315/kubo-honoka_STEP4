<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>データ移動サンプル</title>
</head>
<body>
    <h1>名前を入力してください</h1>
    <form action="display.php" method="post">
        <label for="name">名前：</label>
        <input type="text" id="name" name="name" require>
        <button type="submit">送信</button>
    </form>
</body>
</html>