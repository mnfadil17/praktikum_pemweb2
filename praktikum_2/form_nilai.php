<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <h1 style="text-align:center;">Form Nilai Siswa</h1>
    <form method="POST" action="form_nilai.php">
        <div class="container">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                    <input id="nama" name="nama" placeholder="Masukan nama lengkap" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="DDP">Dasar-Dasar Pemograman</option>
                        <option value="Basdat">Basis data 1</option>
                        <option value="web1">Pemograman web 1</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Masukan nilai UTS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">NIlai UAS</label> 
                <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Masukan nilai UAS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas Praktikum</label> 
                <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan nilai tugas" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary" value="Simpan">Submit</button>
                </div>
            </div>        
        </div>    
    </form>
    <?php
        $proses = $_POST['proses'];
        $nama_siswa = $_POST['nama'];
        $mata_kuliah = $_POST['matkul'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];
        echo 'Proses : '.$proses;
        echo '<br>Nama : '.$nama_siswa;
        echo '<br>Mata Kuliah : '.$mata_kuliah;
        echo '<br>Nilai UTS : '.$nilai_uts;
        echo '<br>Nilai UAS : '.$nilai_uas;
        echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas;
    ?>
</body>
</html>