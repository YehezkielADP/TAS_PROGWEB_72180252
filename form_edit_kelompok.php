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
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">Input Data <span class="font-weight-bold text-primary">Kelompok</span></h5></div>
            <div class="card-body">
                <?php $kelompok = mysqli_query($conn, "SELECT kelompok.nama_kelompok, kelompok.id_kelompok, kelompok.id_dosen, dosen.id_dosen, dosen.nama_dosen, dosen.nid FROM kelompok, dosen WHERE kelompok.id_kelompok='$id' AND kelompok.id_dosen=dosen.id_dosen");?>
              <form action="function/function_edit_kelompok.php" method="post">
                <?php while($dataa=mysqli_fetch_array($kelompok)){?>
              <div class="form-group">
                  <input type="text" name="kelompok" class="form-control" value="<?php echo $dataa['nama_kelompok'] ?>">
                </div>
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <?php $select = mysqli_query($conn, "SELECT * FROM dosen ORDER BY nid ASC");?>
                <div class="form-group">
                  <select class="form-control" name="dosen">
                    <option value="<?php echo $dataa['id_dosen'];?>"><?php echo $dataa['nid'];?> : <?php echo $dataa['nama_dosen'];?></option>
                    <?php }?>
                    <?php while($data = mysqli_fetch_array($select)){?>
                    <option value="<?php echo $data['id_dosen'];?>"><?php echo $data['nid'];?> : <?php echo $data['nama_dosen'];?></option>
                    <?php }?>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <select class="form-control" name="mahasiswa">
                        <option value="">pilih mahasiswa</option>
                        <?php $mhs = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY nim ASC");?>
                        <?php while($datamhs = mysqli_fetch_array($mhs)){?>
                        <option value="<?php $datamhs['id_mahasiswa'];?>"><?php echo $datamhs['nim'];?> : <?php echo $datamhs['nama_mahasiswa'];?></option>
                        <?php } ?>
                        </select>
                </div> -->
                
                
                <div class="form-group">
                  <input type="submit" name="submit" value="edit" class="btn btn-primary btn-block">
                  <a href="kelompok.php"><span class="btn btn-primary btn-blocl">Batal</span></a>
                </div>
              </form>
              
            </div>
          </div>
          <!-- <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        
                                        <tr>
                                            <th class="border-top-0">Kelompok</th>
                                            <th class="border-top-0">Dosen</th>
                                            <th class="border-top-0">Mahasiswa</th>
                                            <th class="border-top-0">aksi</th>
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $anggota = mysqli_query($conn, "SELECT kelompok.id_mahasiswa, kelompok.id_kelompok, kelompok.id_dosen, dosen.id_dosen, dosen.nid, dosen.nama_dosen , mahasiswa.nama_mahasiswa FROM kelompok, dosen, mahasiswa WHERE kelompok.id_kelompok='$id' AND kelompok.id_dosen=dosen.id_dosen AND kelompok.id_mahasiswa=mahasiswa.id_mahasiswa");?>
                                    <?php while($data1 = mysqli_fetch_array($anggota)){?>
                                        <tr>
                                        
                                            <td><?php $data1['id_kelompok'];?></td>
                                            <td class="txt-oflo"><?php $data1['nama_dosen'];?></td>
                                            <td class="txt-oflo"><?php $data1['nama_mahasiswa'];?></td>
                                            
                                            
                                            
                                             
                                            <td><a href="function/function_delete_anggota.php?id=<?php echo $data1['id_mahasiswa'];?>"><span class="btn btn-primary btn-block">hapus</span></a></td>
                                            
                                            
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div> -->
        </div>
        
      </div>
      
    </div>
                        

<?php include("footer.php");?>
  </body>