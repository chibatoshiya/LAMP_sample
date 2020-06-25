<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'chibatoshiya';
$password = 'oregairu';
try {
    $dbh = new PDO($dsn, $user, $password);
​
    $sql = "select * from user";
    $result = $dbh->query($sql);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>
​
<!DOCTYPE html>
<html lang="ja">
<head>
    
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMP SAMPLE PAGE</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
     integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous">
</head>
<body>
    <nav class="navber navber-dark bg-primary">
        <div class="containar-fluir">
            <div class="navbar-header">
                <a herf="demo.html" class="navbar-brand">LAMP SAMPLE PAGE</a>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">DB Manager</h1>
            <p class="lead">
                LAMP環境を構築し、DBを操作するアプリケーションです。<br>
                デザインはBootstrapを使用しています。
            
            </p>
        </div>
    </div>

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a href="#tab1" class="nav-link active" data-togle="tab">Select</a></li>
            <li class="nav-item"><a href="#tab2" class="nav-link" data-togle="tab">Insert</a></li>
            <li class="nav-item"><a href="#tab3" class="nav-link" data-togle="tab">Update</a></li>
            <li class="nav-item"><a href="#tab4" class="nav-link" data-togle="tab">Delete</a></li>
        </ul>
    </div>

    <div class="tab-content">
        <div id="tab1" class="tab-pane active">sample1</div>
            <table class="table table-hover mt-2">
                <caption>Show User</caption>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                    <?php forach($result as $value) {?>
                        <th><?php echo "value[id]"?></th>
                        <th><?php echo "value[User]"?></th>
                        <th><?php echo "value[20]"?></th>
                    <?php } ?>
                </tbody>
            </table>
            <div id="tab2" class="tab-pane">sample2</div>
                    <from action="mt-S" action="./insert.php" method="POST">
                        <div class="form-group" row>
                            <label class="col-sm-2 col-form-label" for="id" >ID</label>
                            <input class="form-control" type="text" name="id" id="id">
                        </div>
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input class="form-control" type="text" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input class="form-control" type="text" name="age" id="age">
                        </div>
                        <button type="submit" class="btn btn-primary">Insert</button>
                    </form>
                    <from action="mt-S" action="./insert.php" method="POST">
                        <div class="form-group" row>
                            <label class="col-sm-2 col-form-label" for="id" >ID</label>
                            <input class="form-control" type="text" name="id" id="id">
                        </div>
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input class="form-control" type="text" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input class="form-control" type="text" name="age" id="age">
                        </div>
                        <button type="submit" class="btn btn-primary">Insert</button>
                    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
     integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
     integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
     integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"></script>
</body>
</html>