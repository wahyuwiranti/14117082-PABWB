<!DOCTYPE html>
<html lang="en" id="home">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <title>Hasil Data</title>
    </head>

    <body>
    <?php 
        if (isset($_POST["submit"])) {
            $Nama = $_POST["Nama"];
            $Alamat = $_POST["Alamat"];
            $Gender = $_POST["jk"];
            $Goldar = $_POST["Goldar"];
            $hobi = $_POST["hoby"];
            $keterangan = $_POST["keterangan"];
    ?>
	
    <table class="table">
        <tr>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>JENIS KELAMIN</th>	
            <th>GOLONGAN DARAH</th>
            <th>HOBI</th>
            <th>KETERANGAN</th>
        </tr>
        <tr>
            <td><?php echo $Nama; ?></td>
            <td><?php echo $Alamat; ?></td>
            <td><?php echo $Gender; ?></td>
            <td><?php echo $Goldar; ?></td>       
            <td><?php 
                foreach($hobi as $value){
                    echo "$value <br>";
                }
            ?></td>
            <td><?php echo $keterangan; ?></td>
        </tr>

        <?php } 
        ?> 
        
    </body>
</html>