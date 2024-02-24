<!-- Contact Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Updated Contact Form Content -->
                <hr class="mb-5">
                <h2 class="text-heading mb-2 fs-22 fs-md-32 text-center lh-16 mxw-571 px-lg-8">
                    Do You Have An Upcoming Real Estate Transaction?
                </h2>
                <!-- <p class="text-center mxw-670 mb-8">
                    Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscorem ipsum dolor sit
                    ametcipsum ipsumg consec tetur cing elitelit.
                </p> -->
                <div class="mxw-774">
                <?= form_open('contact'); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="First Name"
                                    class="form-control form-control-lg border-0" name="first-name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Last Name" name="last-name"
                                    class="form-control form-control-lg border-0">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input placeholder="Your Email" class="form-control form-control-lg border-0"
                                    type="text" name="email">
                            </div>
                        </div>
                        <div class="col-md-6 px-2">
                            <div class="form-group">
                                <input type="text" placeholder="Your Phone" name="phone"
                                    class="form-control form-control-lg border-0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-6">
                        <input class="form-control form-control-lg border-0" type="text" placeholder="Subject" name="subject">
                    </div>
                    <div class="form-group mb-6">
                        <textarea class="form-control border-0" placeholder="Message" name="message" rows="5"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-primary px-9">Submit</button>
                    </div>
                <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
