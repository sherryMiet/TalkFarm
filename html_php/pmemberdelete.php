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


        echo '<script>if(confirm("確定刪除該會員?"+' . $dmid . ')){';

        $dsn = "mysql:host=localhost;dbname=accounting;charset=utf8";
		$dbh = new PDO($dsn,'root','');
		if(!$dbh){
			echo "unable to connect to database";
        }

        $dmember = "DELETE FROM member
                    WHERE m_id=$dmid";
        $dmembersql = $dbh -> exec($dmember);

           header("Location: http://localhost/pmember.php");

        echo '}</script>';

        $dbh = null;
    ?>
</body>
</html>