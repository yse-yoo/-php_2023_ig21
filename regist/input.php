<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Regist</title>
</head>
<body>
    <h1>入力画面</h1>
    <form action="confirm.php" method="post">
        <div>
            <label for="">氏名</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">パスワード</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="">生年月日</label>
            <select name="year">
                <?php foreach (range(1900, date('Y')) as $year): ?>
                <option value="<?= $year ?>"><?= $year ?></option>
                <?php endforeach ?>
            </select>
            <select name="month">
                <?php foreach (range(1, 12) as $month): ?>
                <option value="<?= $month ?>"><?= $month ?></option>
                <?php endforeach ?>
            </select>
            <select name="day">
                <?php foreach (range(1, 31) as $day): ?>
                <option value="<?= $day ?>"><?= $day ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="">性別</label>
            <input id="male" type="radio" name="gender" value="male">
            <label for="male">Male</label>
            <input id="female" type="radio" name="gender" value="female">
            <label for="female">Female</label>
        </div>
        <button>確認</button>
    </form>
</body>
</html>