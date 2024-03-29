<?php $page_session = \Config\Services::session(); ?>

<?= $this->extend("layouts/home_base"); ?>
<?= $this->section("content"); ?>

<main id="content" class="bg-gray-01">
    <section class="pt-1 pb-1 pb-lg-1 page-title bg-overlay bg-img-cover-center d-none d-lg-block"
        style="background-image: url('<?= base_url('theme/images/BG3.jpg'); ?>');">
        <div class="container">
            <h1 class="fs-22 fs-md-42 mb-0 text-white font-weight-normal text-center py-7 lh-15 px-lg-16"
                data-animate="fadeInDown">
            </h1>
        </div>
    </section>
    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10 my-profile">
        <div class="mb-6 text-center">
        <h2 class="mb-0 lh-15 text-primary">Sell My Property
        </h2>
        <p class="mb-1">Fill out the form below so we can start selling your property</p>
        </div>
        <div class="collapse-tabs new-property-step">
        
        <?php if (session()->has('success')): ?>
            <div class="alert alert-success">
                <?= session()->get('success') ?>
            </div>
        <?php endif; ?>
        <div class="tab-content shadow-none p-0">
            <?= form_open_multipart(); ?>
            <div id="collapse-tabs-accordion">
                <div class="tab-pane tab-pane-parent fade show active px-0" id="description"
                    role="tabpanel"
                    aria-labelledby="description-tab">
                    <div class="card bg-transparent border-0">
                        <div class="card-body py-4 py-md-0 px-0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card mb-6">
                                        <?= form_open() ?>
                                        <div class="card-body p-6">
                                            <h3 class="card-title mb-0 text-heading fs-22 lh-15">Property
                                            Information</h3>
                                            <div class="form-group">
                                                <label for="type" class="text-heading">Property Type</label>
                                                    <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="Select"
                                                            id="type" name="type">
                                                        <option value="pre-owned">Pre-Owned</option>
                                                        <option value="new">New</option>
                                                        <option value="pre-sell">Pre-sell</option>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="text-heading">Title Status</label>
                                                    <span class="text-muted text-primary">*</span>
                                                <input type="text" class="form-control form-control-lg border-0"
                                                        id="title" name="title" placeholder="Title Status">
                                            </div>
                                            <div class="form-group">
                                            <label for="class" class="text-heading">Property Class</label>
                                                    <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="Select"
                                                            id="class" name="class">
                                                        <option value="townhouse">Townhouse`</option>
                                                        <option value="house and lot">House and Lot</option>
                                                        <option value="lot">Lot</option>
                                                        <option value="commercial">Commercial</option>
                                                        <option value="condominium">Condominium</option>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="address" class="text-heading">Complete Address</label>
                                                    <span class="text-muted text-primary">*</span>
                                                <input type="text" class="form-control form-control-lg border-0"
                                                        id="address" name="address" placeholder="house number / Barangay / Municipality / Province">
                                            </div>
                                            <div class="form-group">
                                                <label for="maps" class="text-heading">Waze/Google Maps Links</label>
                                                    <span class="text-muted text-primary">*</span>
                                                <input type="text" class="form-control form-control-lg border-0"
                                                        id="maps" name="maps" placeholder="number/brgy/municipality/province">
                                            </div>
                                            <div class="form-group">
                                                <label for="floor_area" class="text-heading">Floor Area</label>
                                                    <span class="text-muted text-primary">*</span>
                                                <input type="text" class="form-control form-control-lg border-0"
                                                        id="floor_area" name="floor_area" placeholder="&#13217">
                                            </div>
                                            <div class="form-group">
                                                <label for="lot_area" class="text-heading">Lot Area</label>
                                                    <span class="text-muted text-primary">*</span>
                                                <input type="text" class="form-control form-control-lg border-0"
                                                        id="lot_area" name="lot_area" placeholder="&#13217">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card mb-6">
                                        <div class="card-body p-6">
                                            <h3 class="card-title mb-0 text-heading fs-22 lh-15">Property Owner Information</h3>
                                            <div class="form-row mx-n2">
                                                <div class="col-md-6 col-lg-12 col-xxl-6 px-2 mb-4 mb-md-0">
                                                <div class="form-group">
                                                <label for="full_name" class="text-heading">Full name</label>
                                                    <span class="text-muted text-primary">*</span>
                                                <input type="text" class="form-control form-control-lg border-0"
                                                        id="full_name" name="full_name" placeholder="Fullname">
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone" class="text-heading">Contact number</label>
                                                        <span class="text-muted text-primary">*</span>
                                                    <input type="text" class="form-control form-control-lg border-0"
                                                            id="phone" name="phone" placeholder="Tel#/Mobile#">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="text-heading">Email</label>
                                                        <span class="text-muted text-primary">*</span>
                                                    <input type="text" class="form-control form-control-lg border-0"
                                                            id="email" name="email" placeholder="email">
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="text-right">
                        <button class="btn btn-lg btn-primary mb-3" type="submit" name="submit">Submit property
                        </button>
                        </div>
                        <?= form_close() ?>
                    </div>
                    </div>
                </div>
                </div>
                
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>


<script src="<?= base_url('theme/js/tinymce/tinymce.min.js'); ?>"></script>
<script type="text/javascript">
tinymce.init({
        selector: '#textcontent'
    });
</script>

<?= $this->endSection(); ?>