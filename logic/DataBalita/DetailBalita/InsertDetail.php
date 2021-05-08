<?php

    if(isset($_POST['btn'])){
        $umur = $_POST['umur'];
        $bb = $_POST['bb'];
        $tb = $_POST['tb'];

        $insertdb = mysqli_query($db, "INSERT INTO cekgizi(idbalita, updateumur, updatebb, updatetb)
                                       VALUES('', '$umur', '$bb', '$tb')");

        if($insertdb){
            
        }

    }

?>