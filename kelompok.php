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

                    

                    
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="home.php" class="fw-normal">Data Kelompok</a></li>
                            </ol>
                            
                        </div>
                    </div>
                    <?php $select = mysqli_query($conn, "SELECT kelompok.nama_kelompok, kelompok.id_kelompok, kelompok.id_dosen, dosen.id_dosen, dosen.nama_dosen FROM kelompok, dosen WHERE kelompok.id_dosen = dosen.id_dosen GROUP BY kelompok.nama_kelompok ORDER BY kelompok.id_kelompok ASC"); ?>
                    
                   

                    

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
                                <h3 class="box-title mb-0">Daftar Kelompok</h3>
                                
                                
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
                            
                            <a href="form_input_kelompok.php"><button class="btn btn-primary btn-block">Tambah Data</button></a>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        
                                        <tr>
                                            <th class="border-top-0">Kelompok</th>
                                            <th class="border-top-0">Dosen</th>
                                            
                                            <th class="border-top-0">aksi</th>
                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($data = mysqli_fetch_array($select)){?>
                                        <tr>
                                        
                                            <td><?php echo $data['nama_kelompok'];?></td>
                                            <td class="txt-oflo"><?php echo $data['nama_dosen'];?></td>
                                            
                                            
                                            
                                            
                                            <td><a href="form_edit_kelompok.php?id=<?php echo $data['id_kelompok'];?>"><span class="btn btn-primary btn-block">Edit</span></a> 
                                            <a href="form_tambah_anggota.php?id=<?php echo $data['id_kelompok'];?>&&klm=<?php echo $data['nama_kelompok'];?>"><span class="btn btn-primary btn-block">Anggota</span></a>
                                            <a href="function/function_delete_kelompok.php?id=<?php echo $data['id_kelompok'];?>"><span class="btn btn-primary btn-block">hapus</span></a></td>
                                            
                                            
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