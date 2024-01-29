<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Edit</h1>
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
            <form role="form" action="<?= base_url; ?>/pembayaranspp/updatePembayaranspp" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['pembayaranspp']['id']; ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" class="form-control" placeholder="masukkan Nama Mahasiswa..." name="nama_mahasiswa" value="<?= $data['pembayaranspp']['nama_mahasiswa']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Npm Mahasiswa</label>
                        <input type="text" class="form-control" placeholder="masukkan Npm..." name="npm_mahasiswa" value="<?= $data['pembayaranspp']['npm_mahasiswa']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Fakultas</label>
                        <input type="text" class="form-control" placeholder="masukkan Fakultas..." name="fakultas" value="<?= $data['pembayaranspp']['fakultas']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Biaya</label>
                        <input type="text" class="form-control" placeholder="masukkan Biaya..." name="spp" value="<?= $data['pembayaranspp']['spp']; ?>">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->