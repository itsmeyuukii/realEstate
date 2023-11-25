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
                                    <div class="dropzone upload-file text-center py-5"
                                        data-uploader="true"
                                        id="myDropzone"
                                        data-uploader-url="./dashboard-add-new-property.html">
                                    <div class="dz-default dz-message">
                                        <span class="upload-icon lh-1 d-inline-block mb-4">
                                            <i class="fal fa-cloud-upload-alt"></i></span>
                                        <p class="text-heading fs-22 lh-15 mb-4">Drag and drop image or</p>
                                        <button class="btn btn-indigo px-7 mb-2" type="button">
                                        Browse file
                                        </button>
                                        <input name= "images[]" type="file" multiple hidden>
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
                                    <label for="video-from" class="text-heading">Video
                                        from Youtube</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xxl-6 px-2">
                                    <div class="form-group mb-md-0">
                                        <label for="embed-video-id" class="text-heading">Embed Video id</label>
                                        <input type="text" name="embed_video"
                                                class="form-control form-control-lg border-0"
                                                id="embed-video-id">
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="card mb-6">
                            <div class="card-body p-6">
                                <h3 class="card-title mb-0 text-heading fs-22 lh-15">Virtual
                                Tour</h3>
                                <p class="card-text mb-5">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit</p>
                                <div class="form-group mb-0">
                                <label for="virtual-tour"
                                                        class="text-heading">Virtual Tour</label>
                                <input type="text"
                                                        class="form-control form-control-lg border-0"
                                                        id="virtual-tour" name="virtual-tour">
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
                                                    <label for="" class="text-heading">Region </label>
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
                                                    <label for="" class="text-heading">Province </label>
                                                    <select class="form-control border-0 shadow-none form-control-lg"
                                                            title="Select" data-style="btn-lg py-2 h-52"
                                                            id="provinceSelect" name="province_id">
                                                            
                                                    </select>
                                                </div>
                                                <div class="form-group mb-md-0">
                                                    <label for="" class="text-heading">Municipality </label>
                                                    <select class="form-control border-0 shadow-none form-control-lg"
                                                            title="Select" data-style="btn-lg py-2 h-52"
                                                            id="municipalitySelect" name="municipality_id">
                                                            
                                                    </select>
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
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="p_code" class="text-heading">Property Code</label>
                                        <input type="text" class="form-control form-control-lg border-0"
                                                id="p_code" name="p_code">
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