<?php echo $this->extend("layouts/home_base"); ?>

<?php echo $this->section("title"); ?>
Msg-Homes | Home
<?php echo $this->endSection(); ?>

<?= $this->section("content"); ?>

<main>
  <section class="pt-1 pb-1 pb-lg-1 page-title bg-overlay bg-img-cover-center d-none d-lg-block"
      style="background-image: url('<?= base_url('theme/images/BG3.jpg'); ?>');">
      <div class="container">
          <h1 class="fs-22 fs-md-42 mb-0 text-white font-weight-normal text-center py-7 lh-15 px-lg-16"
              data-animate="fadeInDown">
          </h1>
      </div>
  </section>

  <section>
      <div class="container container-xxl">
        <div class="py-lg-8 py-6 border-top">
          <div class="slick-slider mx-0 partners"
                data-slick-options='{"slidesToShow": 3, "autoplay":true,"dots":false,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":4}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 3}},{"breakpoint": 576,"settings": {"slidesToShow": 2}}]}'>
            <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
              <a href="#" class="item position-relative hover-change-image">
                <img src="<?= base_url('theme/images/commend/all-star-2020-2022.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 1">
                <img src="<?= base_url('theme/images/commend/all-star-2020-2022_bw.png') ?>" alt="Partner 1" class="image">
              </a>
            </div>
            <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
              <a href="#" class="item position-relative hover-change-image">
                <img src="<?= base_url('theme/images/commend/Most-leads-2019.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 1">
                <img src="<?= base_url('theme/images/commend/Most-leads-2019_bw.png') ?>" alt="Partner 1" class="image">
              </a>
            </div>
            <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
              <a href="#" class="item position-relative hover-change-image">
                <img src="<?= base_url('theme/images/commend/Golden-globe-2019.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 2">
                <img src="<?= base_url('theme/images/commend/Golden-globe-2019_bw.png') ?>" alt="Partner 2" class="image">
              </a>
            </div>
          </div>
        </div>
        <div class="py-lg-8 py-6 border-top">
          <div class="slick-slider mx-0 partners"
                data-slick-options='{"slidesToShow": 3, "autoplay":true,"dots":false,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":4}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 3}},{"breakpoint": 576,"settings": {"slidesToShow": 2}}]}'>
            <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
              <a href="#" class="item position-relative hover-change-image">
                <img src="<?= base_url('theme/images/commend/Brokerage-2018.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 2">
                <img src="<?= base_url('theme/images/commend/Brokerage-2018_bw.png') ?>" alt="Partner 2" class="image">
              </a>
            </div>
            <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
              <a href="#" class="item position-relative hover-change-image">
                <img src="<?= base_url('theme/images/commend/Brokerage-2017.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 1">
                <img src="<?= base_url('theme/images/commend/Brokerage-2017_bw.png') ?>" alt="Partner 1" class="image">
              </a>
            </div>
            <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
              <a href="#" class="item position-relative hover-change-image">
                <img src="<?= base_url('theme/images/commend/Brokerage-2016.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 2">
                <img src="<?= base_url('theme/images/commend/Brokerage-2016_bw.png') ?>" alt="Partner 2" class="image">
              </a>
            </div>
          </div>
        </div>
        <div class="py-lg-8 py-6 border-top">
          <div class="slick-slider mx-0 partners"
                data-slick-options='{"slidesToShow": 3, "autoplay":true,"dots":false,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":4}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 3}},{"breakpoint": 576,"settings": {"slidesToShow": 2}}]}'>
            <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
              <a href="#" class="item position-relative hover-change-image">
                <img src="<?= base_url('theme/images/commend/BDO-2015.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 3">
                <img src="<?= base_url('theme/images/commend/BDO-2015_bw.png') ?>" alt="Partner 3" class="image">
              </a>
            </div>
            <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
              <a href="#" class="item position-relative hover-change-image">
                <img src="<?= base_url('theme/images/commend/BDO-2014.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 1">
                <img src="<?= base_url('theme/images/commend/BDO-2014_bw.png') ?>" alt="Partner 1" class="image">
              </a>
            </div>
            <div class="box d-flex align-items-center justify-content-center" data-animate="fadeInUp">
              <a href="#" class="item position-relative hover-change-image">
                <img src="<?= base_url('theme/images/commend/BDO-2013_bw.png') ?>" class="hover-image position-absolute pos-fixed-top" alt="Partner 2">
                <img src="<?= base_url('theme/images/commend/BDO-2013.png') ?>" alt="Partner 2" class="image">
              </a>
            </div>
          </div>
        </div>
      </div>
  </section>
</main>

<?= $this->endSection(); ?>