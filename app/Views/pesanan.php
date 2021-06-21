<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
RHA Cell - Daftar Pesanan
<?= $this->endsection(); ?>


<?= $this->section('content'); ?>
<div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
            <h1 style="color:#2487ce">Transaksi Saya</h1>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="color:#2487ce">ID Transaksi</th>
                        <th scope="col" style="color:#2487ce">Nama Barang</th>
                        <th scope="col" style="color:#2487ce">Harga</th>
                        <th scope="col" style="color:#2487ce">Nama Pembeli</th>
                        <th scope="col" style="color:#2487ce">Tanggal Transaksi</th>
                        <th scope="col" style="color:#2487ce">Status</th>
                        <th scope="col" style="color:#2487ce">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">4</th>
                        <td>Samsung Galaxy Note 10 Pro</td>
                        <td>Rp8.700.000</td>
                        <td>Agus Suprapto</td>
                        <td>Sabtu, 19 Januari 2021</td>
                        <td>Pesanan dikirim</td>
                        <td><a href="" class="btn btn-primary">detail</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>