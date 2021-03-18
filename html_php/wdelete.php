<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理者介面</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
    <?php
        extract($_GET);


        echo '<script>if(confirm("確定刪除這個文章?"+' . $wid . ')){';

        $dsn = "mysql:host=localhost;dbname=accounting;charset=utf8";
		$dbh = new PDO($dsn,'root','');
		if(!$dbh){
			echo "unable to connect to database";
        }

        $commsql = "DELETE FROM comment
                    WHERE com_w_id=$wid";
        $commcount = $dbh -> exec($commsql);
        
        
        $sql = "DELETE FROM writing
                WHERE w_id=$wid";
        $count = $dbh -> exec($sql);

        echo '}else{';

           header("Location: http://localhost/allarticle.php?memberid=$mid");

        echo '}</script>';

        $dbh = null;
    ?>
</body>
</html>

