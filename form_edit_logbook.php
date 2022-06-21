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
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">Edit Data <span class="font-weight-bold text-primary">Logbook</span></h5></div>
            <div class="card-body">
                <?php $select = mysqli_query($conn, "SELECT logbook.tanggal_mulai, logbook.tanggal_selesai, logbook.pekerjaan, mahasiswa.id_mahasiswa, mahasiswa.nim, mahasiswa.nama_mahasiswa FROM logbook, mahasiswa WHERE logbook.id_logbook=$id AND logbook.id_mahasiswa=mahasiswa.id_mahasiswa")?>
                
              <form action="function/function_edit_logbook.php" method="post">
                
              <div class="form-group">
                <?php while($data = mysqli_fetch_array($select)){?>
                  <label>mulai</label>
                  <input type="date" name="mulai" class="form-control" placeholder="NIM" value="<?php echo $data['tanggal_mulai'];?>">
                </div>
                <div class="form-group">
                  <label>selesai</label>
                  <input type="date" name="selesai" class="form-control" placeholder="Nama Mahasiswa" value="<?php echo $data['tanggal_selesai'];?>">
                </div>
                <div class="form-group">  
                  <textarea name="pekerjaan" class="form-control" placeholder="Apa yang kamu kerjakan" ><?php echo $data['pekerjaan'];?></textarea>
                </div>
               
                <div class="form-group">
                  <input type="hidden" name="id" value=<?php echo $id;?>> 
                </div>
                
                <?php } ?>
                <div class="form-group">
                  <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include("footer.php");?>
  </body>