
<!-- logic Show Data Balita -->
<?php
    if(isset($_POST['detailb'])){
        header ('location:index.php?pages=detail-balita');

    }    
    $no = 1;
        $show = mysqli_query($db,"SELECT * FROM balita");
        while($data = mysqli_fetch_array($show)){
            $idb = $data['idbalita'];
            $sTgllahir = $data['tgllahir'];
            $sNamabalita = $data['nama'];
            $sJk = $data['jeniskelamin'];
            $sUmur = $data['umur'];
            $sAyah = $data['ayah'];
            $sIbu = $data['ibu'];
            $sRt = $data['rt'];
            $sRw = $data['rw'];
            $sKecamatan = $data['kecamatan'];

            echo $idb;
        }
        
            
