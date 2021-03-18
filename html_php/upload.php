<?php
    require_once("db.php");//匯入連接DB的程式
    $tmpname=$_FILES['file']['tmp_name'];
    $fp= fopen($tmpname, 'r');
    $fileContent=fread($fp,filesize($tmpname));
     
    $file_uploads = base64_encode($fileContent);
     
    //加入UPDATE 或是 INSERT SQL指令
    $sql = "UPDATE `writing` SET `pic`='data:image/png;base64,".$file_uploads."' where `XXX`=XXX";
    $current_id = mysql_query($sql) or die("<b>Error:</b> Problem on Image Insert<br/>" .mysql_error());
     
    fclose($fp);
     
    if(isset($current_id)) {
            echo '<script language="javascript">
             history.back(1);
            </script>';
    }
    ?>