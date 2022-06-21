<?php include("koneksi.php");?>
<?php include("header.php");?>
<?php $id = $_GET['id'];?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Manajemen Proyek Peterpan</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">Input Nilai <span class="font-weight-bold text-primary">Peserta</span></h5></div>
            <div class="card-body">
            <?php if(isset($_SESSION['mhs'])){?>
                <?php $select = mysqli_query($conn, "SELECT mahasiswa.nim, mahasiswa.nama_mahasiswa, mahasiswa.email_mahasiswa, mahasiswa.id_timeline, timeline.tanggal_mulai, timeline.tanggal_selesai, timeline.status FROM mahasiswa, timeline WHERE mahasiswa.id_timeline=timeline.id_timeline AND id_mahasiswa='$id'")?>
                <?php while($data = mysqli_fetch_array($select)){?>
                <form action="function/function_edit_mahasiswa.php" method="post">
                
              <div class="form-group">
                  <input type="text" disabled="disabled" name="nim" class="form-control" value="<?php echo $data['nim'];?>">
                </div>
                <div class="form-group">
                  <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_mahasiswa'];?>">
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control" value="<?php echo $data['email_mahasiswa'];?>">
                </div>
                

                <input type="hidden" name="id" value="<?php echo $id;?>">
                <?php }?>
                   
                
                <div class="form-group">
                  <input type="submit" name="submit" value="edit" class="btn btn-primary btn-block">
                  <a href="ubah_password.php?id=<?php echo $id?>"><span class="btn btn-primary btn-block">ubah password</span></a>
                </div>
              </form>
              <?php } ?>
                
              <?php if(isset($_SESSION['dosen'])){?>

                <?php $nilai = mysqli_query($conn, "SELECT nilai.nilai FROM mahasiswa, nilai WHERE mahasiswa.id_mahasiswa=nilai.id_mahasiswa AND mahasiswa.id_mahasiswa='$id'");?>
                <?php while($dataanilai = mysqli_fetch_array($nilai)){?>
                <?php $nil = $dataanilai['nilai'];?>
                <?php } ?> 


                <?php if(isset($nil)){?>

                <?php $select = mysqli_query($conn, "SELECT mahasiswa.nim, mahasiswa.nama_mahasiswa, mahasiswa.email_mahasiswa, mahasiswa.id_timeline, timeline.tanggal_mulai, timeline.tanggal_selesai, timeline.status, nilai.nilai FROM mahasiswa, timeline, nilai WHERE mahasiswa.id_timeline=timeline.id_timeline AND mahasiswa.id_mahasiswa='$id' AND nilai.id_mahasiswa=mahasiswa.id_mahasiswa")?>
                <?php while($data = mysqli_fetch_array($select)){?>

              <form action="function/function_edit_nilai.php" method="post">
                
              <div class="form-group">
                  <input type="text" disabled="disabled" name="nim" class="form-control" value="<?php echo $data['nim'];?>">
                </div>
                <div class="form-group">
                  <input type="text" disabled="disabled" name="nama" class="form-control" value="<?php echo $data['nama_mahasiswa'];?>">
                </div>
                
                <div class="form-group">
                  <input type="text" name="nilai" class="form-control" value="<?php echo $data['nilai'];?>">
                </div>

                <input type="hidden" name="id" class="form-control" value="<?php echo $id;?>">

                <div class="form-group">
                  <input type="submit" name="submit" value="edit" class="btn btn-primary btn-block">
                  <a href="ubah_password.php?id=<?php echo $id;?>"><span class="btn btn-primary btn-block">ubah password</span></a>
                </div>
                </form>
                <?php } ?>
                <?php } ?>

                <?php if(empty($nil)){?>

                <?php $select = mysqli_query($conn, "SELECT mahasiswa.nim, mahasiswa.nama_mahasiswa, mahasiswa.email_mahasiswa, mahasiswa.id_timeline, timeline.tanggal_mulai, timeline.tanggal_selesai, timeline.status FROM mahasiswa, timeline WHERE mahasiswa.id_timeline=timeline.id_timeline AND mahasiswa.id_mahasiswa='$id'")?>
                <?php while($data = mysqli_fetch_array($select)){?>

                <form action="function/function_input_nilai.php" method="post">

                <div class="form-group">
                  <input type="text" disabled="disabled" name="nim" class="form-control" value="<?php echo $data['nim'];?>">
                </div>
                <div class="form-group">
                  <input type="text" disabled="disabled" name="nama" class="form-control" value="<?php echo $data['nama_mahasiswa'];?>">
                </div>

                <div class="form-group">
                    <input type="text" name="nilai" class="form-control" placeholder="data nilai huruf">
                </div>
                <input type="hidden" name="id" class="form-control" value="<?php echo $id;?>">

                <div class="form-group">
                     <input type="submit" name="submit" value="input" class="btn btn-primary btn-block">
                     <a href="ubah_password.php?id=<?php echo $id;?>"><span class="btn btn-primary btn-block">ubah password</span></a>
                </div>
                </form>
                <?php } ?>
                <?php } ?>


                <?php } ?>
                

                
             

            </div>
          </div>
        </div>
      </div>
    </div>
<?php include("footer.php");?>
  </body>