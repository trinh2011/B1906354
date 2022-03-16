<?php
    session_start();
    if(isset($_SESSION["name"])&&$_SESSION["name"]!=NULL){
        unset($_SESSION["name"]);
        echo "Thoat thanh cong";
    }
			
?>
