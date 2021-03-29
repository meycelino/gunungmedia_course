<?php
include "header.php";
include "sidebar.php";
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Halaman Kelola Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- mulai dari sini content-->
    <section class="content">
        <div class="container-fluid">
        
        <a href="add-admin.php" class="btn btn-primary">Tambah Admin</a><br></br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Kelola Admin</h3>
                        </div>
                        
                        <?php 
                        include "../config/koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM admin");
                        ?>

                        <div class="card-body">
                           <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Updated</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                        
                        <?php
                        while($row = mysqli_fetch_array($sql)){
                        ?>
                                    <tr>
                                        <td><?php echo $row['id_admin']; ?></td>
                                        <td><?php echo $row['nama_lengkap']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td><?php echo $row['updated']; ?></td>
                                        <td><a href="edit-admin.php" class="btn btn-warning">Edit</a> 
                                            <a href="hapus-admin.php" class="btn btn-danger">Hapus</a> 
                                        </td>
                                    </tr>
                        <?php } ?>         
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sampai sini content -->


</div>
<!-- /.content-wrapper -->

<?php include "footer.php"; ?>