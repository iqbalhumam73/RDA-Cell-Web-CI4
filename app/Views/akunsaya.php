<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
RHA Cell - Transaksi Saya
<?= $this->endsection(); ?>


<?= $this->section('content'); ?>
<div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
            <h1 style="color:#2487ce">Akun Saya</h1>
        </div>
        <div>
            <form>
                <fieldset enabled>
                    <!-- <legend>Disabled fieldset example</legend> -->
                    <div class="mb-3">
                        <label for="akun_nama" class="form-label">Nama:</label>
                        <input type="text" id="akun_nama" name="akun_nama" class="form-control" value="Taylor Swift" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="akun_email" class="form-label">Email:</label>
                        <input type="text" id="akun_email" name="akun_email" class="form-control" value="taylorswift13@gmail.com" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="akun_notelp" class="form-label">No Telepon:</label>
                        <input type="text" id="akun_notelp" name="akun_notelp" class="form-control" value="08135135133153" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="akun_alamat" class="form-label">Alamat:</label>
                        <input type="text" id="akun_alamat" name="akun_alamat" class="form-control" value="Cornelia St. 13" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="akun_password" class="form-label">Password:</label>
                        <input type="text" id="akun_password" name="akun_password" class="form-control" value="tes1234" readonly>
                    </div>
                    <button class="btn btn-warning">Ubah Data</button>
                    <button class="btn btn-danger">Keluar</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>