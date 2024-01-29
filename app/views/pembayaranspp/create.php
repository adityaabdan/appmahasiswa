<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $data['title']; ?></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><?= $data['title']; ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="<?= base_url; ?>/pembayaranspp/simpanPembayaranspp" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Mahasiswa..." name="nama_mahasiswa">
                    </div>
                    <div class="form-group">
                        <label>Npm Mahasiswa</label>
                        <input type="text" class="form-control" placeholder="Masukkan Npm Mahasiswa..." name="npm_mahasiswa">
                    </div>
                    <div class="form-group">
                        <label>Fakultas</label>
                        <input type="text" class="form-control" placeholder="Masukkan Fakultas..." name="fakultas">
                    </div>
                    <div class="form-group">
                        <label>Biaya</label>
                        <input type="text" class="form-control" placeholder="Masukkan Biaya..." name="spp">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="<?= base_url; ?>/pembayaranspp">Kembali</a>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->