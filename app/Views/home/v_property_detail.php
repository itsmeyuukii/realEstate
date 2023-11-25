<?php echo $this->extend("layouts/home_base"); ?>

<?php echo $this->section("title"); ?>
Msg-Homes | Home
<?php echo $this->endSection(); ?>

<?= $this->section("content"); ?>

<link rel="stylesheet" href="<?= base_url("theme/css/p_style.css") ?>">
<link rel="stylesheet" href="<?= base_url("theme/css/p_style.css") ?>">

<div class="container">
    <div class="properties-listing spacer">

        <div class="row">
            <div class="col-lg-3 col-sm-4 hidden-xs">

                <div class="hot-properties hidden-xs">
                    <h4>Hot Properties</h4>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/4.jpg"
                                class="img-responsive img-circle" alt="properties" /></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                            <p class="price">$300,000</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"
                                class="img-responsive img-circle" alt="properties" /></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                            <p class="price">$300,000</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/3.jpg"
                                class="img-responsive img-circle" alt="properties" /></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                            <p class="price">$300,000</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/2.jpg"
                                class="img-responsive img-circle" alt="properties" /></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                            <p class="price">$300,000</p>
                        </div>
                    </div>

                </div>



                <div class="advertisement">
                    <h4>Advertisements</h4>
                    <img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">

                </div>

            </div>

            <div class="col-lg-9 col-sm-8 ">

                <h2>2 room and 1 kitchen apartment</h2>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="property-images">
                            <!-- Slider Starts -->

                            <!-- #Slider Ends -->
                            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
                                <?php foreach ($images as $image): ?>
                                        <div class="bg-white border rounded p-1">
                                            <img src="<?= $image->image_link ?>" class="" alt="properties" />
                                            <div class="d-flex align-items-center">
                                                <div class="ps-3">
                                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                                    <small>Profession</small>
                                                </div>
                                            </div>
                                        </div>
                                <?php endforeach ?>
                            </div>
                        </div>

                        <div class="spacer">
                            <h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
                            <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize
                                timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar
                                solutions without functional solutions.</p>
                            <p>Completely synergize resource sucking relationships via premier niche markets.
                                Professionally cultivate one-to-one customer service with robust ideas. Dynamically
                                innovate resource-leveling customer service for state of the art customer service</p>

                        </div>
                        <div>
                            <h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
                            <div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no"
                                    marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="col-lg-12  col-sm-6">
                            <div class="property-info">
                                <p class="price">$ 200,000,000</p>
                                <p class="area"><span class="glyphicon glyphicon-map-marker"></span> 344 Villa, Syndey,
                                    Australia</p>

                                <div class="profile">
                                    <span class="glyphicon glyphicon-user"></span> Agent Details
                                    <p>John Parker<br>009 229 2929</p>
                                </div>
                            </div>

                            <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
                            <div class="listing-detail">
                                <span data-toggle="tooltip" data-placement="bottom"
                                    data-original-title="Bed Room">5</span> <span data-toggle="tooltip"
                                    data-placement="bottom" data-original-title="Living Room">2</span> <span
                                    data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span>
                                <span data-toggle="tooltip" data-placement="bottom"
                                    data-original-title="Kitchen">1</span>
                            </div>

                        </div>
                        <div class="col-lg-12 col-sm-6 ">
                            <div class="enquiry">
                                <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
                                <form role="form">
                                    <input type="text" class="form-control" placeholder="Full Name" />
                                    <input type="text" class="form-control" placeholder="you@yourdomain.com" />
                                    <input type="text" class="form-control" placeholder="your number" />
                                    <textarea rows="6" class="form-control"
                                        placeholder="Whats on your mind?"></textarea>
                                    <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>