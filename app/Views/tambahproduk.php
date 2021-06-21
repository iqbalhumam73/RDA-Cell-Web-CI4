<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
RHA Cell - Tambah Produk
<?= $this->endsection(); ?>


<?= $this->section('content'); ?>
<div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
            <h1 style="color:#2487ce">Tambah Produk</h1>
        </div>
        <div>
            <fieldset enabled>
                <!-- <legend>Disabled fieldset example</legend> -->
                <div class="mb-3">
                    <label for="produk_nama" class="form-label">Nama Produk:</label>
                    <input type="name" id="produk_nama" name="produk_nama" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="produk_harga" class="form-label">Harga:</label>
                    <input type="number" id="produk_harga" name="produk_harga" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="produk_deskripsi" class="form-label">Deskripsi:</label>
                    <input type="text" id="produk_deskripsi" name="produk_deskripsi" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="produk_foto" class="form-label">Foto Produk:</label> <br>
                    <input type="file" id="myFile" name="filename">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>