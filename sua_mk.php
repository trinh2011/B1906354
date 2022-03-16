<?php
  session_start();
    if($_POST["old_pass"] == $_SESSION["pass"] && $_POST["new_pass"] == $_POST["re_pass"]){
        echo 'đổi thành công';
    }
    else{
        echo 'đổi không thành công';
    }

?>