<?php
            if(isset($_POST['up'])){
                require_once('connect.php');
                $tenbaihat = $_POST['tenbaihat'];
                $casy = $_POST['casy'];
                $theloai = $_POST['theloai'];
                $idx = $_POST['idx'];
                echo $tenbaihat.$casy.$theloai.$idx;
            }
            
            

        
        
        
        ?>