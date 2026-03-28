<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="style_confirm.css">
</head>

<body>
    <h1>入力内容確認</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $name = $_POST['name'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $message = $_POST['message'];
        $gender = $_POST['gender'];

        $errors = [];

        // 名前
        if (!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z\s]+$/u", $name)) {
            $errors[] = "名前はひらがな、カタカナ、漢字、英字のみで入力してください。";
        }

        // 年齢
        if (!is_numeric($age) || $age < 0 || $age > 150) {
            $errors[] = "年齢は0〜150の間で入力してください。";
        }

        // 電話番号
        if (!preg_match("/^[0-9\-]+$/", $phone)) {
            $errors[] = "電話番号は半角数字とハイフンのみで入力してください。";
        }

        // メール
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "メールアドレスの形式が正しくありません。";
        }

        // 住所
        if (!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z0-9\s\-]+$/u", $address)) {
            $errors[] = "住所はひらがな、カタカナ、漢字、英数字で入力してください。";
        }

        // 性別
        if ($gender !== "male" && $gender !== "female") {
            $errors[] = "性別の選択が正しくありません。";
        }

        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "<p>" . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . "</p>";
            }
        } else {
            echo "<p>名前：" . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>";
            echo "<p>年齢：" . htmlspecialchars($age, ENT_QUOTES, 'UTF-8') . "歳</p>";
            echo "<p>電話番号：" . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . "</p>";
            echo "<p>メールアドレス：" . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
            echo "<p>住所：" . htmlspecialchars($address, ENT_QUOTES, 'UTF-8') . "</p>";
            echo "<p>質問：" . nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')) . "</p>";

            if ($gender === "male") {
                echo "<p>性別：男性</p>";
            } elseif ($gender === "female") {
                echo "<p>性別：女性</p>";
            }
        }
    } else {
        echo "<p>データが送信されていません。</p>";
    }
    ?>

    <p><a href="contact.php">戻る</a></p>
</body>

</html>