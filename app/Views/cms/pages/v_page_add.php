<?php $page_session = \Config\Services::session(); ?>

<?= $this->extend("layouts/admin_base"); ?>

<?= $this->section("content"); ?>

<main id="content" class="bg-gray-01">
    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10 my-profile">
        
        <div class="collapse-tabs new-property-step">
        
        <?php if (session()->getTempdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getTempdata('error'); ?>
            </div>
        <?php endif; ?>
        <div class="tab-content shadow-none p-0">
            <?= form_open_multipart(); ?>
            <div id="collapse-tabs-accordion">
                <div class="tab-pane tab-pane-parent fade show active px-0" id="description"
                    role="tabpanel"
                    aria-labelledby="description-tab">
                    <div class="card bg-transparent border-0">
                        <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0"
                                id="heading-description">
                            <h5 class="mb-0">
                                <button class="btn btn-lg collapse-parent btn-block border shadow-none"
                                            data-toggle="collapse" data-number="1."
                                            data-target="#description-collapse"
                                            aria-expanded="true"
                                            aria-controls="description-collapse">
                                <span class="number"></span>Update Content
                                </button>
                            </h5>
                        </div>
                        <div id="description-collapse" class="collapse show collapsible"
                            aria-labelledby="heading-description"
                            data-parent="#collapse-tabs-accordion">
                            <div class="card-body py-4 py-md-0 px-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card mb-6">
                                            <div class="card-body p-6">
                                                <h3 class="card-title mb-0 text-heading fs-22 lh-15">Page's Information</h3>
                                                <p class="card-text mb-5">Please Enter Fields</p>
                                                <div class="form-group">
                                                    <label for="page_title" class="text-heading">Page's Name
                                                        <span class="text-muted">(mandatory)</span>
                                                    </label>
                                                    <input type="text" class="form-control form-control-lg border-0"
                                                            id="page_title" name="page_title">

                                                    <label for="is_display" class="text-heading mt-1">Page's Display
                                                        <span class="text-muted">(mandatory)</span>
                                                    </label>
                                                    <select class="form-control border-0 shadow-none form-control-lg"
                                                            title="Select" data-style="btn-lg py-2 h-52"
                                                            id="is_display" name="is_display">
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card mb-6">
                                            <div class="card-body p-6">
                                                <h3 class="card-title mb-0 text-heading fs-22 lh-15">Page's SEO</h3>
                                                <p class="card-text mb-5">Please Enter Fields</p>
                                                <div class="form-group">
                                                    <label for="slug" class="text-heading">Slug
                                                        <span class="text-muted">(mandatory)</span>
                                                    </label>
                                                    <input type="text" class="form-control form-control-lg border-0"
                                                            id="slug" name="slug">
                                                    <label for="meta_key" class="text-heading">Meta Key
                                                        <span class="text-muted">(mandatory)</span>
                                                    </label>
                                                    <input type="text" class="form-control form-control-lg border-0"
                                                            id="meta_key" name="meta_key">
                                                    <label for="meta_description" class="text-heading">Meta Description
                                                        <span class="text-muted">(mandatory)</span>
                                                    </label>
                                                    <input type="text" class="form-control form-control-lg border-0"
                                                            id="meta_description" name="meta_description">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card mb-6">
                                            <div class="card-body p-6">
                                                <h3 class="card-title mb-0 text-heading fs-22 lh-15">Page Content</h3>
                                                <p class="card-text mb-5"></p>
                                                <div class="form-group mb-0">
                                                    <label class="text-heading">Content</label>
                                                    <textarea class="form-control border-0" name="content" id="textcontent"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="text-right">
                                <button class="btn btn-lg btn-primary" type="submit">SUBMIT </button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</main>

<script src="<?= base_url('theme/js/tinymce/tinymce.min.js'); ?>"></script>
<script>
    tinymce.init({
        selector: '#textcontent'
    });

</script>


<?= $this->endSection(); ?>