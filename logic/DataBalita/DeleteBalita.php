<?php

if(isset($_POST['btdelete'])){
    $idb = $_POST['idbalita'];
    
    $deletedb = mysqli_query($db, "DELETE FROM balita WHERE idbalita= $idb");

    if($deletedb){
        echo '<script text="text/javascript">
        alert("berhasil menghapus data")
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("gagal menghapus data");
        </script>';        
    }
}

?>