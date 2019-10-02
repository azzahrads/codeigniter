<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Form Tambah Data Mahasiswa
        </div>
        <div class="card-body">
            <?php if(validation_errors()){?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama"> Nama </label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="nim"> Nim </label>
                    <input type="number" class="form-control" id="nim" name="nim">
                </div>
                <div class="form-group">
                    <label for="alamat"> Alamat </label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
            </form>
        </div>
    </div>
</div>