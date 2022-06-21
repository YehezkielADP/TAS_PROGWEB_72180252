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

                   

                    <?php if(isset($_SESSION['koor'])) { $koor = $_SESSION['koor'];?>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="home.php" class="fw-normal">Data Peserta</a></li>
                            </ol>
                            
                        </div>
                    </div>
                    <?php $select = mysqli_query($conn, "SELECT timeline.status, mahasiswa.id_mahasiswa, mahasiswa.nim, mahasiswa.nama_mahasiswa, mahasiswa.email_mahasiswa, mahasiswa.id_timeline FROM timeline, mahasiswa GROUP BY mahasiswa.nim ORDER BY mahasiswa.nim ASC"); ?>
                    
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
                                <h3 class="box-title mb-0">Data Peserta Peterpan</h3>
                                
                                
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
                            <?php if(isset($_SESSION['koor'])){?>
                            <a href="form_input_mhs.php"><button class="btn btn-primary btn-block">Tambah Data</button></a>
                            <?php } ?>
                            <?php if(isset($_SESSION['dosen'])){?>
                            <a href=""><button class="btn btn-primary btn-block">Tambah Data</button></a>
                            <?php } ?>
                            <?php if(isset($_SESSION['mhs'])){?>
                            <a href=""><button class="btn btn-primary btn-block">Tambah Data</button></a>
                            <?php } ?>

                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <?php if(isset($_SESSION['koor'])){?>
                                        <tr>
                                            <th class="border-top-0">Nim</th>
                                            <th class="border-top-0">Nama Mahasiswa</th>
                                            <th class="border-top-0">Email Mahasiswa</th>
                                            <th class="border-top-0">Status </th>
                                            
                                            <th class="border-top-0">aksi</th>
                                        <?php } ?>
                                        <?php if(isset($_SESSION['mhs'])){?>
                                        <tr>
                                            <th class="border-top-0">tanggal</th>
                                            <th class="border-top-0">lokasi</th>
                                            <th class="border-top-0">nama mitra</th>
                                            <th class="border-top-0">keterangan</th>
                                            <th class="border-top-0">nama mahasiswa</th>
                                            <th class="border-top-0">file</th>
                                            <th class="border-top-0">aksi</th>
                                        <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($data = mysqli_fetch_array($select)){?>
                                        <tr>
                                        
                                            <td><?php echo $data['nim'];?></td>
                                            <td class="txt-oflo"><?php echo $data['nama_mahasiswa'];?></td>
                                            <td><?php echo $data['email_mahasiswa'];?> </td>
                                            <td><?php echo $data['status'];?> </td>
                                            
                                            <?php if(isset($_SESSION['koor'])){?>
                                            <td><a href="form_edit_mahasiswa.php?id=<?php echo $data['id_mahasiswa'];?>"><span class="btn btn-primary btn-block">edit</span></a> 
                                            <a href="function/function_delete_mahasiswa.php?id=<?php echo $data['id_mahasiswa'];?>"><span class="btn btn-primary btn-block">hapus</span></a></td>
                                            <?php } ?>
                                            <?php if(isset($_SESSION['mhs'])){?>
                                            <td><a href="form_edit_surat_mhs.php?id=<?php echo $data['id_surat_mhs'];?>"><span class="btn btn-primary btn-block">edit</span></a> <a href="function_delete_surat.php?id=<?php echo $data['id_surat_mhs'];?>"><span class="btn btn-primary btn-block">hapus</span></a></td>
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