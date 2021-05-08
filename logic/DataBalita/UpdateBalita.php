<?php 

if(isset($_POST['btedit'])){
    $idb = $_POST['idbalita'];
    $nmBalita = $_POST['nmbalita'];
    $tglLahir = $_POST['tgllahir'];
    $jk = $_POST['jk'];
    $umur = $_POST['umur'];
    $ayah = $_POST['ayah'];
    $ibu = $_POST['ibu'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $kecamatan = $_POST['kecamatan'];

    $updatedb = mysqli_query($db, " UPDATE balita SET nama = '$nmBalita', umur = '$umur', jeniskelamin = '$jk',
                                    ayah = '$ayah', ibu = '$ibu', rt = '$rt', rw = '$rw', kecamatan = '$kecamatan'
                                    WHERE idbalita = $idb ");

    if($updatedb){
        echo '<script text="text/javascript">
        alert("berhasil mengupdate data")
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("gagal mengupdate data");
        </script>';
    }
}
?>