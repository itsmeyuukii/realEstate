<?php $page_session = \Config\Services::session(); ?>

<?= $this->extend("layouts/admin_base"); ?>
<?= $this->section("content"); ?>

<main id="content" class="bg-gray-01">
    <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10 my-profile">
        <div class="mb-6">
        <h2 class="mb-0 text-heading fs-22 lh-15">Add new property
        </h2>
        <p class="mb-1">Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscipit</p>
        </div>
        <div class="collapse-tabs new-property-step">
        <ul class="nav nav-pills border py-2 px-3 mb-6 d-none d-md-flex mb-6"
            role="tablist">
            <li class="nav-item col">
            <a class="nav-link active bg-transparent shadow-none py-2 font-weight-500 text-center lh-214 d-block"
            id="description-tab" data-toggle="pill" data-number="1."
            href="#description"
            role="tab"
            aria-controls="description" aria-selected="true"><span class="number">1.</span> Description</a>
            </li>
            <li class="nav-item col">
            <a class="nav-link bg-transparent shadow-none py-2 font-weight-500 text-center lh-214 d-block"
            id="media-tab"
            data-toggle="pill" data-number="2."
            href="#media"
            role="tab"
            aria-controls="media" aria-selected="false"><span class="number">2.</span> Media</a>
            </li>
            <li class="nav-item col">
            <a class="nav-link bg-transparent shadow-none py-2 font-weight-500 text-center lh-214 d-block"
            id="location-tab"
            data-toggle="pill" data-number="3."
            href="#location"
            role="tab"
            aria-controls="location" aria-selected="false"><span class="number">3.</span> Location</a>
            </li>
            <li class="nav-item col">
            <a class="nav-link bg-transparent shadow-none py-2 font-weight-500 text-center lh-214 d-block"
            id="detail-tab"
            data-toggle="pill" data-number="4."
            href="#detail"
            role="tab"
            aria-controls="detail" aria-selected="false"><span class="number">4.</span> Detail</a>
            </li>
            
        </ul>
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
                                <span class="number">1.</span> Description
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
                                            <h3 class="card-title mb-0 text-heading fs-22 lh-15">Property
                                            Description</h3>
                                            <p class="card-text mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                            <div class="form-group">
                                                <label for="p_title" class="text-heading">Property Name
                                                    <span class="text-muted">(mandatory)</span>
                                                </label>
                                                <input type="text" class="form-control form-control-lg border-0" id="p_title" name="p_title">
                                            </div>
                                            <div class="form-group">
                                                <label for="p_code" class="text-heading">Property Code</label>
                                                    <span class="text-muted">(mandatory)</span>
                                                <input type="text" class="form-control form-control-lg border-0"
                                                        id="p_code" name="p_code">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label class="text-heading">Description</label>
                                                <textarea class="form-control border-0" rows="5"name="p_desc"  id="textcontent"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-6">
                                        <div class="card-body p-6">
                                            <h3 class="card-title mb-0 text-heading fs-22 lh-15">Select Category</h3>
                                            <p class="card-text mb-5">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit</p>
                                            <div class="form-row mx-n2">
                                            <div class="col-md-6 col-lg-12 col-xxl-6 px-2 mb-4 mb-md-0">
                                                <div class="form-group mb-0">
                                                <label for="p_type" class="text-heading">Property Type</label>
                                                <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="Select"
                                                        id="p_type" name="p_type">
                                                    <option value="House">House and Lot</option>
                                                    <option value="Lot">Lot</option>
                                                    <option value="Condominium">Condominium</option>
                                                    <option value="TownHouse">TownHouse</option>
                                                    <option value="Building">Building</option>
                                                    <option value="WareHouse">WareHouse</option>
                                                    <option value="Island">Island</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12 col-xxl-6 px-2 mb-4 mb-md-0">
                                                <div class="form-group mb-0">
                                                    <label for="p_class" class="text-heading">Property Classification</label>
                                                    <select class="form-control border-0 shadow-none form-control-lg" title="Select"
                                                            id="p_class" name="p_class">
                                                            <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card mb-6">
                                        <div class="card-body p-6">
                                            <h3 class="card-title mb-0 text-heading fs-22 lh-15">Select Category</h3>
                                            <p class="card-text mb-5">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit</p>
                                            <div class="form-row mx-n2">
                                                <div class="col-md-6 col-lg-12 col-xxl-6 px-2 mb-4 mb-md-0">
                                                    <div class="form-group mb-0">
                                                        <label for="p_status" class="text-heading">Property Status</label>
                                                        <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="Select"
                                                                data-style="btn-lg py-2 h-52" id="p_status" name="p_status">
                                                            <option value="Foreclosed">ForeClosed</option>
                                                            <option value="non-foreclosed">Non-ForeClosed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12 col-xxl-6 px-2 mb-4 mb-md-0">
                                                <div class="form-group mb-0">
                                                <label for="ribbon" class="text-heading">Ribbon Text</label>
                                                <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="Select"
                                                        data-style="btn-lg py-2 h-52" id="ribbon" name="ribbon">
                                                    <option value ="1">Featured</option>
                                                    <option value ="2">Foreclose</option>
                                                    <option value ="3">Private</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12 col-xxl-6 px-2 mb-4 mb-md-0">
                                                <div class="form-group mb-0">
                                                <label for="furnish" class="text-heading">Furnishing</label>
                                                <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="Select"
                                                        data-style="btn-lg py-2 h-52" id="furnish" name="furnish">
                                                    <option value="unfurnished">Unfurnished</option>
                                                    <option value="semi-furnished">Semi-furnished</option>
                                                    <option value="fully-furnished">Fully-furnished</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12 col-xxl-6 px-2 mb-4 mb-md-0" id="foreclosedStatusDiv">
                                                <div class="form-group mb-0">
                                                <label for="fc_status" class="text-heading">Foreclosed Status</label>
                                                <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="Select"
                                                        data-style="btn-lg py-2 h-52" id="fc_status" name="fc_status">
                                                    <option value="1">Ready to Sell</option>
                                                    <option value="2">Clean title</option>
                                                    <option value="3">With Posesion</option>
                                                    <option value="4">No Posesion</option>
                                                    <option value="5">For Re-appraisal</option>
                                                    <option value="6">With legal case</option>
                                                    <option value="7">With illegal occupant</option>
                                                    <option value="8">No right of way/Landlocked</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12 col-xxl-6 px-2 mb-4 mb-md-0">
                                                <div class="form-group mb-0">
                                                <label for="list_type" class="text-heading">Listing Type</label>
                                                <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="Select"
                                                        data-style="btn-lg py-2 h-52" id="list_type" name="list_type">
                                                    <option value="buy">Buy</option>
                                                    <option value="rent">Rent</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12 col-xxl-6 px-2 mb-4 mb-md-0">
                                                <div class="form-group mb-0">
                                                <label for="p_feature" class="text-heading">Property Feature</label>
                                                <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="Select"
                                                        data-style="btn-lg py-2 h-52" id="p_feature" name="p_feature">
                                                    <option value="1">No Feature</option>
                                                    <option value="2">Featured</option>
                                                    <option value="3">Private Property</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12 col-xxl-6 px-2 mb-4 mb-md-0">
                                                <div class="form-group mb-0">
                                                <label for="v_status" class="text-heading">Visibility</label>
                                                <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="Select"
                                                        data-style="btn-lg py-2 h-52" id="v_status" name="v_status">
                                                    <option value="Show">Show</option>
                                                    <option value="Hide">Hide</option>
                                                    <option value="Close">Close</option>
                                                </select>
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="card mb-6">
                                        <div class="card-body p-6">
                                            <h3 class="card-title mb-0 text-heading fs-22 lh-15">Property Price</h3>
                                            <p class="card-text mb-5">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit</p>
                                            <div class="form-row mx-n2">
                                            <div class="col-md-6 col-lg-12 col-xxl-6 px-2 mb-4 mb-md-0">
                                                <div class="form-group mb-0">
                                                <label for="price_type" class="text-heading">Payment type</label>
                                                <select class="form-control border-0 shadow-none form-control-lg selectpicker" title="Select"
                                                        data-style="btn-lg py-2 h-52" id="price_type" name="price_type">
                                                    <option value="Contact">Contact us</option>
                                                    <option value="Cash">Cash</option>
                                                    <option value="Monthly">Monthly</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-12 col-xxl-6 px-2" id="priceDiv">
                                                <div class="form-group">
                                                <label for="price" class="text-heading">Price in $ <span class="text-muted">(only numbers)</span></label>
                                                <input type="text" class="form-control form-control-lg border-0" id="price" name="price">
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="text-right">
                        <button class="btn btn-lg btn-primary next-button">Next step
                            <span class="d-inline-block ml-2 fs-16"><i class="fal fa-long-arrow-right"></i></span>
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="tab-pane tab-pane-parent fade px-0" id="media"
                    role="tabpanel"
                    aria-labelledby="media-tab">
                <div class="card bg-transparent border-0">
                    <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0"
                            id="heading-media">
                    <h5 class="mb-0">
                        <button class="btn btn-lg collapse-parent btn-block border shadow-none"
                                    data-toggle="collapse" data-number="2."
                                    data-target="#media-collapse"
                                    aria-expanded="true"
                                    aria-controls="media-collapse">
                        <span class="number">2.</span> Media
                        </button>
                    </h5>
                    </div>
                    <div id="media-collapse" class="collapse collapsible"
                            aria-labelledby="heading-media"
                            data-parent="#collapse-tabs-accordion">
                        <div class="card-body py-4 py-md-0 px-0">
                            <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-6">
                                    <div class="card-body p-6">
                                        <h3 class="card-title mb-0 text-heading fs-22 lh-15">Upload photos
                                        of your property</h3>
                                        <p class="card-text mb-5">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit</p>
                                        <div class="dropzone text-center py-5"
                                            action = "<?= base_url('dropzone/upload') ?>"
                                            method = "POST"
                                            enctype="multipart/form-data"
                                            id='image-upload'>
                                            <div class="dz-default dz-message">
                                                <span class="upload-icon lh-1 d-inline-block mb-4">
                                                    <i class="fal fa-cloud-upload-alt"></i></span>
                                                <p class="text-heading fs-22 lh-15 mb-4">Drag and drop image
                                                or</p>
                                                <button class="btn btn-indigo px-7 mb-2" type="button">
                                                Browse file
                                                </button>
                                                <p>Photos must be JPEG or PNG format and least
                                                1024x768</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-6">
                                    <div class="card-body p-6">
                                        <h3 class="card-title mb-0 text-heading fs-22 lh-15">Video
                                        Option</h3>
                                        <p class="card-text mb-5">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit</p>
                                        <div class="form-row mx-n2">
                                        <div class="col-md-6 col-lg-12 col-xxl-6 px-2">
                                            <div class="form-group mb-md-0">
                                            <label class="text-heading">Video
                                                from Youtube</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-12 col-xxl-6 px-2">
                                            <div class="form-group mb-md-0">
                                                <label for="embed_link" class="text-heading">Embed Video id</label>
                                                <input type="text" name="embed_link"
                                                        class="form-control form-control-lg border-0"
                                                        id="embed_link">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="d-flex flex-wrap">
                            <a href="#"
                                        class="btn btn-lg bg-hover-white border rounded-lg mb-3 mr-auto prev-button">
                                <span class="d-inline-block text-primary mr-2 fs-16"><i
                                                class="fal fa-long-arrow-left"></i></span>Prev step
                            </a>
                            <button class="btn btn-lg btn-primary next-button mb-3">Next step
                                <span class="d-inline-block ml-2 fs-16"><i
                                                class="fal fa-long-arrow-right"></i></span>
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="tab-pane tab-pane-parent fade px-0" id="location" role="tabpanel"
                    aria-labelledby="location-tab">
                    <div class="card bg-transparent border-0">
                        <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0"
                                id="heading-location">
                        <h5 class="mb-0">
                            <button class="btn btn-block collapse-parent collapsed border shadow-none"
                                        data-toggle="collapse" data-number="3."
                                        data-target="#location-collapse"
                                        aria-expanded="true"
                                        aria-controls="location-collapse">
                            <span class="number">3.</span> Location
                            </button>
                        </h5>
                        </div>
                        <div id="location-collapse" class="collapse collapsible"
                                aria-labelledby="heading-location"
                                data-parent="#collapse-tabs-accordion">
                            <div class="card-body py-4 py-md-0 px-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card mb-6">
                                            <div class="card-body p-6">
                                                <h3 class="card-title mb-0 text-heading fs-22 lh-15">Listing Location</h3>
                                                <p class="card-text mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                
                                                <div class="form-group mb-md-0">
                                                    <label class="text-heading">Region </label>
                                                    <select class="form-control border-0 shadow-none form-control-lg selectpicker"
                                                            title="Select" data-style="btn-lg py-2 h-52"
                                                            id="country" name="region_id">
                                                            <?php foreach ($regions as $region): ?>
                                                                    <option value="<?= $region->id ?>">
                                                                        <?= $region->region_name ?>
                                                                    </option>
                                                            <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-md-0">
                                                    <label class="text-heading">Province </label>
                                                    <select class="form-control border-0 shadow-none form-control-lg"
                                                            title="Select" data-style="btn-lg py-2 h-52"
                                                            id="provinceSelect" name="province_id">
                                                            
                                                    </select>
                                                </div>
                                                <div class="form-group mb-md-0">
                                                    <label class="text-heading">Municipality </label>
                                                    <select class="form-control border-0 shadow-none form-control-lg"
                                                            title="Select" data-style="btn-lg py-2 h-52"
                                                            id="municipalitySelect" name="municipality_id">
                                                            
                                                    </select>
                                                </div>
                                                <div class="form-group mb-md-0">
                                                    <label for="address"class="text-heading">Complete Address </label>
                                                    <input type="text" class="form-control form-control-lg border-0"
                                                            id="address" name="address">
                                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card mb-6">
                                            <div class="card-body p-6">
                                                <h3 class="card-title mb-6 text-heading fs-22 lh-15">Place the listing pin on the map</h3>
                                                <div id="map" class="">
                                                <iframe src="https://www.google.com/maps?q=14.293972,120.957529&output=embed" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                                <div class="form-row mx-n2">
                                                <div class="col-md-6 col-lg-12 col-xxl-6 px-2">
                                                    <div class="form-group mb-md-0">
                                                    <label for="latitude"class="text-heading">Latitude </label>
                                                    <input type="text" class="form-control form-control-lg border-0"
                                                            id="latitude" name="latitude">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-12 col-xxl-6 px-2">
                                                    <div class="form-group mb-md-0">
                                                    <label for="longitude" class="text-heading">Longitude</label>
                                                    <input type="text" class="form-control form-control-lg border-0"
                                                            id="longitude" name="longitude">
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap">
                                <a href="#"
                                            class="btn btn-lg bg-hover-white border rounded-lg mb-3 mr-auto prev-button">
                                    <span class="d-inline-block text-primary mr-2 fs-16"><i
                                                    class="fal fa-long-arrow-left"></i></span>Prev step
                                </a>
                                <button class="btn btn-lg btn-primary next-button mb-3">Next step
                                    <span class="d-inline-block ml-2 fs-16"><i
                                                    class="fal fa-long-arrow-right"></i></span>
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane tab-pane-parent fade px-0" id="detail" role="tabpanel"
                    aria-labelledby="detail-tab">
                <div class="card bg-transparent border-0">
                    <div class="card-header d-block d-md-none bg-transparent px-0 py-1 border-bottom-0"
                            id="heading-detail">
                    <h5 class="mb-0">
                        <button class="btn btn-block collapse-parent collapsed border shadow-none"
                                    data-toggle="collapse" data-number="4."
                                    data-target="#detail-collapse"
                                    aria-expanded="true"
                                    aria-controls="detail-collapse">
                        <span class="number">4.</span> Detail
                        </button>
                    </h5>
                    </div>
                    <div id="detail-collapse" class="collapse collapsible"
                            aria-labelledby="heading-detail"
                            data-parent="#collapse-tabs-accordion">
                    <div class="card-body py-4 py-md-0 px-0">
                        <div class="card mb-6">
                        <div class="card-body p-6">
                            <h3 class="card-title mb-0 text-heading fs-22 lh-15">Listing Detail</h3>
                            <p class="card-text mb-5">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit</p>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="floor_area" class="text-heading">FLoor Size
                                            <span class="text-muted">(only numbers)</span>
                                        </label>
                                        <input type="text" class="form-control form-control-lg border-0"
                                                id="floor_area" name="floor_area">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="lot_area" class="text-heading">Lot size <span
                                                class="text-muted">(only numbers)</span></label>
                                        <input type="text" class="form-control form-control-lg border-0"
                                                id="lot_area" name="lot_area">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="bedroom" class="text-heading">Bedroom
                                            <span class="text-muted">(only numbers)</span>
                                        </label>
                                        <input type="text" class="form-control form-control-lg border-0"
                                                id="bedroom" name="bedroom">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="bathroom" class="text-heading">Bathroom <span
                                                class="text-muted">(only numbers)</span></label>
                                        <input type="text" class="form-control form-control-lg border-0"
                                                id="bathroom" name="bathroom">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="garages" class="text-heading">Garages</label>
                                        <input type="text" class="form-control form-control-lg border-0"
                                                id="garages" name="garages">
                                </div>
                            </div>
                        </div>
                        </div>
                        
                        <div class="d-flex flex-wrap">
                        <a href="#" class="btn btn-lg bg-hover-white border rounded-lg mb-3 mr-auto prev-button">
                            <span class="d-inline-block text-primary mr-2 fs-16">
                            <i class="fal fa-long-arrow-left"></i>
                            </span>Prev step
                        </a>
                        <button class="btn btn-lg btn-primary mb-3" type="submit" name="submit">Submit property
                        </button>
                        </div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>


<script src="<?= base_url('theme/js/tinymce/tinymce.min.js'); ?>"></script>
<script type="text/javascript">
tinymce.init({
        selector: '#textcontent'
    });

    Dropzone.options.imageUpload = {
        maxFilesize: 256,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        init: function () {
            var myDropzone = this;

            this.on("success", function (file, response) {
                response = jQuery.parseJSON(response);

                if (response.status == 1) {
                    // Add attribute to the remove button
                    $(file.previewTemplate).find('.dz-remove').attr('data-filename', response.filename);
                }
            });

            this.on("removedfile", function (file) {
                var imageName = $(file.previewTemplate).find('.dz-remove').attr('data-filename');

                console.log('Deleting image with filename:', imageName);

                $.ajax({
                    type: 'POST',
                    url: '<?= base_url('dropzone/remove') ?>',
                    data: {
                        filename: imageName
                    },
                    success: function (data) {
                        var response = JSON.parse(data);
                        if (response.status == 1) {
                            console.log(response.message);
                            // Optionally, you can display a success message to the user
                        } else {
                            console.error(response.message);
                            // Optionally, you can display an error message to the user
                        }
                    },
                    error: function (error) {
                        console.error('Error deleting image:', error);
                        // Optionally, you can display an error message to the user
                    }
                });
            });
        }
    };
</script>

<script>
    // Attach event listener for region dropdown
    document.getElementById('country').addEventListener('change', function () {
        fetchRegionData(this.value);
    });

    // Attach event listener for province dropdown
    document.getElementById('provinceSelect').addEventListener('change', function () {
        fetchProvinceData(this.value);
    });

    function fetchRegionData(regionId) {
        $.ajax({
            url: "<?= base_url("propertylist/province") ?>",
            method: "POST",
            data: {
                rId: regionId
            },
            success: function (result) {
                $('#provinceSelect').html(result);
            }
        });
    };
    function fetchProvinceData(provinceId) {
        $.ajax({
            url: "<?= base_url("propertylist/municipality") ?>",
            method: "POST",
            data: {
                pId: provinceId
            },
            success: function (result) {
                $('#municipalitySelect').html(result);
            }
        });
    };
    
    // Add an event listener to the Property Status select
    document.getElementById('p_status').addEventListener('change', function () {
        // Get the selected value
        var selectedValue = this.value;

        // Get the Foreclosed Status div
        var foreclosedStatusDiv = document.getElementById('foreclosedStatusDiv');

        // Hide or show based on the selected value
        if (selectedValue === 'non-foreclosed') {
            foreclosedStatusDiv.style.display = 'none';
        } else {
            foreclosedStatusDiv.style.display = 'block';
        }
    });
    // Add an event listener to the Property Status select
    document.getElementById('price_type').addEventListener('change', function () {
        // Get the selected value
        var selectedValue = this.value;

        // Get the Foreclosed Status div
        var priceDiv = document.getElementById('priceDiv');

        // Hide or show based on the selected value
        if (selectedValue === 'Contact') {
            priceDiv.style.display = 'none';
        } else {
            priceDiv.style.display = 'block';
        }
    });

</script>


<?= $this->endSection(); ?>