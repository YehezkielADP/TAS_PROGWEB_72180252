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
                        <h4 class="page-title">Nilai</h4>
                    </div>

                    

                    

                    <?php if(isset($_SESSION['mhs'])) { $mhs = $_SESSION['mhs']; ?>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="home_mhs.php" class="fw-normal">Beranda Mahasiswa</a></li>
                            </ol>
                            
                        </div>
                    
                    </div>
                    <?php $select = mysqli_query($conn, "SELECT mahasiswa.id_mahasiswa, mahasiswa.nama_mahasiswa, mahasiswa.nim, mahasiswa.email_mahasiswa, mahasiswa.id_timeline , timeline.status FROM  mahasiswa, timeline WHERE mahasiswa.id_mahasiswa ='$mhs' AND mahasiswa.id_timeline=timeline.id_timeline"); ?>
                    <?php } ?>
                    <?php while($data = mysqli_fetch_array($select)){ $nim = $data['nim']; $nama = $data['nama_mahasiswa']; $email = $data['email_mahasiswa']; $status = $data['status'];}?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <h1> NILAI KAMU </h1>
            <h3> <?php echo $nama;?> / <?php echo $nim ?></h3>
            <br>
            <br>
            <?php $nilai = mysqli_query($conn, "SELECT nilai FROM nilai WHERE id_mahasiswa='$mhs'");?>
            <?php while($datanilai = mysqli_fetch_array($nilai)){ $nl = $datanilai['nilai'];} ?>
            
            <?php if(empty($nl)){?>
                <h3> Nilai Belum Tersedia</h3>
            <?php }if(isset($nl)){?>
                <h3> Nilai = <?php echo $nl;?> </h3>
            <?php }?>

            <a href="home_mhs.php"><span class="btn btn-primary btn-block">kembali</span></a>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <?php include("footer.php");?>
</body>

</html>