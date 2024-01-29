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
            <form role="form" action="<?= base_url; ?>/ukm/updateUkm" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['ukm']['id']; ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" placeholder="masukkan Kegiatan..." name="nama_ukm" value="<?= $data['ukm']['nama_ukm']; ?>">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="<?= base_url; ?>/ukm">Kembali</a>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->