<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>コンタクトフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>フォーム入力</h1>

    <form action="confirm.php" method="post">

        <p>
            <label for="name">名前：</label><br>
            <input type="text" id="name" name="name" required>
        </p>

        <p>
            <label for="age">年齢：</label><br>
            <input type="number" id="age" name="age" required>
        </p>

        <p>
            <label for="phone">電話番号：</label><br>
            <input type="tel" id="phone" name="phone" required>
        </p>

        <p>
            <label for="email">メールアドレス：</label><br>
            <input type="email" id="email" name="email" required>
        </p>

        <p>
            <label for="address">住所：</label><br>
            <input type="text" id="address" name="address" required>
        </p>

        <p>
            <label for="message">質問：</label><br>
            <textarea id="message" name="message" required></textarea>
        </p>

        <p>
            <label for="gender">性別</label><br>
            <select name="gender" id="gender">
                <option value="male">男性</option>
                <option value="female">女性</option>
            </select>

        </p>

        <button type="submit">送信</button>

    </form>
</body>

</html>