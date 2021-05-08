<?php

if(isset($_POST['btsave'])){
    $nmBalita = $_POST['nmbalita'];
    $tglLahir = $_POST['tgllahir'];
    $jk = $_POST['jk'];
    $umur = $_POST['umur'];
    $ayah = $_POST['ayah'];
    $ibu = $_POST['ibu'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $kecamatan = $_POST['kecamatan'];
    $bbl = $_POST['bbl'];
    $tbl = $_POST['tbl'];

    $insertdb = mysqli_query($db,"INSERT INTO balita(nama, tgllahir, jeniskelamin, umur, ayah,
                                              ibu, rt, rw, kecamatan, bblahir, tblahir)
                                              VALUES('$nmBalita', '$tglLahir', '$jk', '$umur', '$ayah',
                                              '$ibu', '$rt', '$rw', '$kecamatan', '$bbl', '$tbl'
                                              )
                            ");

    if($insertdb){
        echo '<script text="text/javascript">
        alert("berhasil memasukkan data")
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("gagal memasukkan data");
        </script>';
    }
}


?>
