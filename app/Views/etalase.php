<?= $this->extend('layout/template'); ?>

<?= $this->section('title'); ?>
RHA Cell - Etalase
<?= $this->endsection(); ?>


<?= $this->section('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hp">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <h1 style="color:#2487ce">Welcome to RHA Cell!</h1>
                <h5>Pusatnya HP bekas dengan fitur melewati batas!</h5>
            </div>
        </div>
        <!-- <div class="text-center">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div> -->
        <div class="row icon-boxes">
            <?php foreach ($produk as $produk) : ?>
                <div class="col-sm-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box"><a href="/testbuttonbox">
                            <img src="<?php echo base_url('.public/phoneimg/' . $produk->produk_foto); ?>" alt="ndak onok">
                            <img src="/phoneimg/<?= $produk['produk_foto']; ?>" alt="tidak ada" class="fotoiklan">
                            <img src="/phoneimg/foto2.jpg" alt="tidak ada" class="fotoiklan">
                            <h3><?= $produk['produk_harga']; ?></h3>
                            <h4 class="title"><?= $produk['produk_nama']; ?></h4>
                            <p class="description"><?= $produk['produk_deskripsi']; ?></p>
                            <a href="/beliproduk" class="btn-iklan">Beli</a>
                            <!-- <a href="/detailproduk" class="btn btn-warning">Detail</a> -->
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
</section><!-- End Hero -->
<?= $this->endsection(); ?>