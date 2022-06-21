<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php include("header.php"); ?>
<?php include("koneksi.php");?>


        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Beranda</h4>
                    </div>

                  

                    

                    <?php if(isset($_SESSION['dosen'])) { $dosen = $_SESSION['dosen']; ?>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="daftar_mhs.php" class="fw-normal">Daftar Mahasiswa</a></li>
                            </ol>
                            
                        </div>
                    
                    </div>
                    <?php $select = mysqli_query($conn, "SELECT mahasiswa.id_mahasiswa, mahasiswa.nama_mahasiswa, mahasiswa.nim, kelompok.nama_kelompok, dosen.nama_dosen, dosen.nid FROM kelompok, mahasiswa, dosen WHERE kelompok.id_dosen = dosen.id_dosen AND kelompok.id_mahasiswa = mahasiswa.id_mahasiswa AND dosen.id_dosen=$dosen"); ?>
                    <?php } ?>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    
                    
                
                <!-- ============================================================== -->
                <!-- Tabel Surat -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Daftar Mahasiswa Bimbingan</h3>
                                
                                
                                <!-- <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                    <select class="form-select shadow-none row border-top">
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                    </select>
                                </div> -->
                            </div>
                           
                            
                       

                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <?php if(isset($_SESSION['dosen'])){?>
                                        <tr>
                                            <th class="border-top-0">Nama Kelompok</th>
                                            <th class="border-top-0">Nim</th>
                                            <th class="border-top-0">Nama Mahasiswa</th>
                                            
                                            
                                            <th class="border-top-0">aksi</th>
                                        <?php } ?>
                                        
                                    </thead>
                                    <tbody>
                                    <?php while($data = mysqli_fetch_array($select)){?>
                                        <tr>
                                            <td><?php echo $data['nama_kelompok'];?>
                                            <td><?php echo $data['nim'];?></td>
                                            <td class="txt-oflo"><?php echo $data['nama_mahasiswa'];?></td>
                                            
                                            
                                            
                                            <?php if(isset($_SESSION['dosen'])){?>
                                            <td><a href="nilai_dosen.php?id=<?php echo $data['id_mahasiswa'];?>"><span class="btn btn-primary btn-block">nilai</span></a> </td>
                                            <?php } ?>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                    <!-- /.col -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <?php include("footer.php");?>
</body>

</html>