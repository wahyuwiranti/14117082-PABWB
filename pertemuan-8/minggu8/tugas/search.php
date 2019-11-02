<HTML>
    <HEAD>
        <title>Pencarian Data Mahasiswa</title>
    </HEAD>
    <BODY>
        <h1>Pencarian Data Mahasiswa</h1>
        <?php
            $cari=isset ($_GET['Nama']);
            $conn=mysqli_connect("localhost","root","");
            mysqli_select_db($conn,"web");
            $sqlstr="select * from mahasiswa where Nama like '%$cari%'";
            $hasil=mysqli_query($conn,$sqlstr);
            $jumlah=mysqli_num_rows($hasil);
            echo "<h3>Data ditemukan : $jumlah</h3>";
			
            while($record=mysqli_fetch_row($hasil)){
                echo "<br>NRP : $record[0] <br>";
                echo "Nama : $record[1] <br>";
                echo "Foto : $record[2] <br>";
                $sqlstr="select nama from jurusan where ID_Jur='$record[3]'";
                $hasil2=mysqli_fetch_row(mysqli_query($conn,$sqlstr));
                echo "Jurusan : $hasil2[0] <br>";
            }
        ?>
    </BODY>
</HTML>