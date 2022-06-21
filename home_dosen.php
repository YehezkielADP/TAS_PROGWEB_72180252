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

                    

                    <?php if(isset($_SESSION['dosen'])) { $dosen = $_SESSION['dosen'];?>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="home_dosen.php" class="fw-normal">Beranda Dosen</a></li>
                            </ol>
                            
                        </div>
                    </div>
                    <?php $select = mysqli_query($conn, "SELECT * FROM dosen WHERE id_dosen=$dosen ORDER BY nid ASC"); ?>
                    
                    <?php } ?>

                    
                    <?php while($data = mysqli_fetch_array($select)){ $nid = $data['nid']; $nama = $data['nama_dosen']; $email = $data['email_dosen'];}?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <h1> SELAMAT DATANG </h1>
            <h3> <?php echo $nama;?> / <?php echo $nid ?></h3>

            <a href="profil.php?id=<?php echo $dosen;?>"><span class="btn btn-primary btn-block">lihat profil</span></a>
            <a href="daftar_mhs.php?id=<?php echo $dosen;?>"><span class="btn btn-primary btn-block">daftar mahasiswa</span></a>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <?php include("footer.php");?>
</body>

</html>