<!DOCTYPE html>
<?php
    $user = getenv("MARIADB_USER");
    $pass = getenv("MARIADB_PASSWORD");
    $db = getenv("MARIADB_DATABASE");
    $table = "hoge";
    $host = "backend";
    # ----
    $dsn = "mysql:dbname=${db};host=${host}"; # 接続文字列
    $conn = null;
try {
    $conn = new PDO($dsn, $user, $pass); # コンストラクタへの引数としてDSN、ユーザー、パスワードを渡す
} catch(PDOException $e) {
    print("接続失敗: " . $e->getMessage());
    die(); // 死ね(PHPとしての処理をここで中断する)
}
?>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
        $sql = "select name, zip from ${table}"; # SQLのクエリコード
        $result = $conn->query($sql);        # query()メソッドに渡してクエリ結果を取得
?>

<table border="1px">
    <tr>
        <th>氏名</th>
        <th>郵便番号</th>
    </tr>
    <?php
        while ($rec = $result->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?= $rec['name'] ?></td>
                <td><?= $rec['zip'] ?></td>
            </tr>
        <?php
        }
        ?>

</table>
</body>
</html>
