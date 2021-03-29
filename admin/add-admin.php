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
                    <h1 class="m-0 text-dark">Dashboard</h1>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Admin</h3>
                        </div>
                        <form role="form" action="proses-tambah-admin.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label> Nama Lengkap </label>
                                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap Anda">
                                </div>
                                <div class="form-group">
                                    <label> Username </label>
                                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda">
                                </div>
                                <div class="form-group">
                                    <label> Password </label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
                                </div>
                                  
                                  
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary"> Tambah </button>
                                    <button type="reset" class="btn btn-danger"> Batal </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sampai sini content -->


</div>
<!-- /.content-wrapper -->

<?php include "footer.php"; ?>