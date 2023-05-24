<?php
// PHP program
$regist = $_POST;
var_dump($regist);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=3.0">
    <title>Regist</title>
</head>
<body>
    <h1>確認画面</h1>
    <p>この内容で登録してもよろしいですか？</p>
    <form action="" method="post">
        <div>
            <label for="">氏名</label>
        </div>
        <div>
            <label for="">Email</label>
        </div>
        <div>
            <label for="">パスワード</label>
        </div>
        <button>登録</button>
    </form>
</body>
</html>