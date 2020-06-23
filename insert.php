<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'chibatoshiya';
$password = 'oregairu';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $POST['id'];
    $name = $POST['name'];
    $age = $POST['age'];
​
    $sql = "insert into user value (:id, :name, :age)";
    $stmt = $dbh->prepare($sql);
    $params = array(':id' => $id, ':name' => $name, ':age' => $age);
    $stmt->exeute->($params);

    header('Location: index.php?fg=1');

} catch (PDOException $e) {
    //echo "接続失敗: " . $e->getMessage() . "\n";
    header('Location: index.php?fg=1?err=$->getMassage()');
    exit();
}
?>