<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Data Diri</title>
</head>
<body>
    <div class="container">
        <h1>Form Data Diri</h1>
        <form class="form-horizontal" action="TM_7hasil.php" method="POST" enctype="multipart/form-data">
		
            <div class="form-group">
                <label for="Nama">Nama :</label>
                <input type="text" name="Nama" class="form-control" id="Nama">
            </div>
			
            <div class="form-group">
                <label for="Alamat">Alamat :</label>
                <input type="text" name="Alamat" class="form-control" id="Alamat">
            </div>
			
            <div class="form-group">
                <label for="jk">Jenis Kelamin :</label> &nbsp;
                <input type="radio" name="jk" id="jk" value="Laki-laki">Laki-laki &nbsp;
                <input type="radio" name="jk" id="jk" value="Perempuan">Perempuan &nbsp;
            </div>
			
            <div class="form-group">
                <label for="Goldar">Golongan Darah :</label>
                <select class="form-control" name="Goldar" id="Goldar">
                    <option disabled hidden selected>Pilih Golongan Darah</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>
			
            <div class="form-group">
                <label for="hobi">Hobi :</label>
                <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" name="hoby[]" value="Ngoding">Ngoding <br>
                        <input type="checkbox" name="hoby[]" value="Berenang">Berenang <br>
                        <input type="checkbox" name="hoby[]" value="Bulutangkis">Bulutangkis <br>
                        <input type="checkbox" name="hoby[]" value="Travelling">Travelling <br>
                    </label>
                </div>
            </div>
			
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" name="keterangan" rows="5"></textarea>
            </div>
			
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>