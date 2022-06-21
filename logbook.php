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
                        <h4 class="page-title">Logbook</h4>
                    </div>

                    

                   <?php if(isset($_SESSION['dosen'])){ $id_dosen = $_SESSION['dosen'];?>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="home.php" class="fw-normal">Data Peserta</a></li>
                            </ol>
                            
                        </div>
                    </div>
                    <?php $select = mysqli_query($conn, "SELECT timeline.status, mahasiswa.id_mahasiswa, mahasiswa.nim, mahasiswa.nama_mahasiswa, mahasiswa.email_mahasiswa, mahasiswa.id_timeline, logbook.tanggal_mulai, logbook.tanggal_selesai, logbook.pekerjaan, kelompok.nama_kelompok FROM timeline, mahasiswa, logbook, kelompok WHERE mahasiswa.id_timeline=timeline.id_timeline AND logbook.id_mahasiswa=mahasiswa.id_mahasiswa AND kelompok.id_mahasiswa=mahasiswa.id_mahasiswa AND kelompok.id_dosen=$id_dosen ORDER BY mahasiswa.nim ASC"); ?>
                    <?php } ?>

                    <?php if(isset($_SESSION['mhs'])){ $id_mhs = $_SESSION['mhs'];?>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="home.php" class="fw-normal">Data Peserta</a></li>
                            </ol>
                            
                        </div>
                    </div>
                    <?php $select = mysqli_query($conn, "SELECT logbook.id_logbook, timeline.status, mahasiswa.id_mahasiswa, mahasiswa.nim, mahasiswa.nama_mahasiswa, mahasiswa.email_mahasiswa, mahasiswa.id_timeline, logbook.tanggal_mulai, logbook.tanggal_selesai, logbook.pekerjaan, kelompok.nama_kelompok FROM timeline, mahasiswa, logbook, kelompok WHERE mahasiswa.id_timeline=timeline.id_timeline AND logbook.id_mahasiswa=mahasiswa.id_mahasiswa AND kelompok.id_mahasiswa=mahasiswa.id_mahasiswa AND kelompok.id_mahasiswa=$id_mhs ORDER BY mahasiswa.nim ASC"); ?>
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
                                <h3 class="box-title mb-0">Daftar Logbook</h3>
                                
                                
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
                           
                            
                            <?php if(isset($_SESSION['mhs'])){?>
                            <a href="form_logbook.php?id=<?php echo $id_mhs?>"><button class="btn btn-primary btn-block">Tambah Data</button></a>
                            <?php } ?>
                            
                            
                            <?php if(isset($_SESSION['dosen'])){?>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        
                                        
                                        <tr>
                                            <th class="border-top-0">nama kelompok</th>
                                            <th class="border-top-0">nim</th>
                                            <th class="border-top-0">nama mahasiswa</th>
                                            <th class="border-top-0">tgl mulai</th>
                                            <th class="border-top-0">tgl selesai</th>
                                            <th class="border-top-0">pekerjaan</th>
                                           
                                            
                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($data = mysqli_fetch_array($select)){?>
                                        <tr>
                                            <td><?php echo $data['nama_kelompok'];?></td>
                                            <td><?php echo $data['nim'];?></td>
                                            <td class="txt-oflo"><?php echo $data['nama_mahasiswa'];?></td>
                                            <td><?php echo $data['tanggal_mulai'];?></td>
                                            <td><?php echo $data['tanggal_selesai'];?></td>
                                            <td><?php echo $data['pekerjaan'];?></td>
                                            
                                                                                       
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } ?>

                            
                            <?php if(isset($_SESSION['mhs'])){?>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        
                                        
                                        <tr>
                                            <th class="border-top-0">nama kelompok</th>
                                            <th class="border-top-0">nim</th>
                                            <th class="border-top-0">nama mahasiswa</th>
                                            <th class="border-top-0">tgl mulai</th>
                                            <th class="border-top-0">tgl selesai</th>
                                            <th class="border-top-0">pekerjaan</th>
                                            <th class="border-top-0">aksi</th>
                                           
                                            
                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($data = mysqli_fetch_array($select)){?>
                                        <tr>
                                            <td><?php echo $data['nama_kelompok'];?></td>
                                            <td><?php echo $data['nim'];?></td>
                                            <td class="txt-oflo"><?php echo $data['nama_mahasiswa'];?></td>
                                            <td><?php echo $data['tanggal_mulai'];?></td>
                                            <td><?php echo $data['tanggal_selesai'];?></td>
                                            <td><?php echo $data['pekerjaan'];?></td>
                                            <td><a href="form_edit_logbook.php?id=<?php echo $data['id_logbook'];?>"><span class="btn btn-primary btn-block">edit</span></a> <a href="function/function_delete_logbook.php?id=<?php echo $data['id_logbook'];?>"><span class="btn btn-primary btn-block">hapus</span></a></td>
                                                                                       
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } ?>
                            
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