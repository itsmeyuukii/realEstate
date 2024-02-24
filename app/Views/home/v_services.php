<?= $this->extend('layouts/home_base'); ?>

<?= $this->section('title'); ?>
<?= $page_title->page_title; ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<main id="content">
    <section class="pt-2 pb-10 pb-lg-17 page-title bg-overlay bg-img-cover-center"
        style="background-image: url('<?= base_url('theme/images/BG3.jpg'); ?>');">
        <div class="container">

            <h1 class="fs-70 fs-md-42 mb-0 text-white font-weight-normal text-center pt-6 pt-lg-17 pb-8 lh-15 px-lg-16"
                data-animate="fadeInDown">
                <span class="text-primary">Why</span> Choose <span class="text-primary">Us?</span>
            </h1>
            <p class="mxw-751 text-white text-center mb-8 mb-lg-4 px-8">At My Saving Grace Realty and Development Corporation, 
            <span class="text-primary">WE DELIVER</span> unparalleled expertise and personalized techniques to elevate your real estate experience. 
                Our management philosophy is built on pillars of professionalism, integrity, accountability, 
                and quality service—ensuring not just satisfaction, but the assurance of maximum returns on your expectations.
            </p>
        </div>
    </section>
    <section class="bg-patten-05 mb-13">
        <div class="container">
            <div class="card mt-n13 z-index-3 pt-10 border-0">
                <div class="card-body p-0">
                    <h2 class="text-dark lh-1625 text-center mb-2">Services Offered</h2>
                    <p class="mxw-751 text-center mb-8 px-8">We, At <span class="text-primary">MSGRDC</span>, are committed to providing comprehensive 
                    support throughout the entire process, ensuring a seamless and timely transfer of the land title to the new owner.</p>
                </div>
            </div>
            <div class="row mb-9">
                <div class="col-sm-6 col-lg-4 mb-6">
                    <div class="card border-hover shadow-hover-lg-1 px-7 pb-6 pt-4 h-100 bg-transparent bg-hover-white">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                            <span class="text-primary fs-90 lh-1">
                                <svg class="icon icon-e6">
                                    <use xlink:href="#icon-e6"></use>
                                </svg>
                            </span>
                        </div>
                        <div class="card-body px-0 pt-6 text-center pb-5 pb-lg-0">
                            <h4 class="card-title fs-18 lh-17 text-dark mb-2">Titling Services</h4>
                            <p class="card-text px-2">
                                Seamless Titling Solutions: Your Partner in Hassle-Free Property Ownership!
                            </p>
                            <a href="#" class="btn btn-primary read-more" data-toggle="modal" data-target="#modalTitlingServices">Readmore</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <div class="card border-hover shadow-hover-lg-1 px-7 pb-6 pt-4 h-100 bg-transparent bg-hover-white">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                            <span class="text-primary fs-90 lh-1">
                                <img src="<?= base_url('theme/images/svg/cancel-annotation.svg') ?>" alt="cancel-of-annotation">
                            </span>
                        </div>
                        <div class="card-body px-0 pt-6 pb-5 pb-lg-0 text-center d-flex flex-column">
                            <h4 class="card-title fs-18 lh-17 text-dark mb-2">Cancellation of Annotation</h4>
                            <p class="card-text px-2 mb-lg-10">
                                Effortless Resolution: Choose Us for Smooth Cancellation of Annotations!
                            </p>
                            <a href="#" class="btn btn-primary read-more">Readmore</a><a href="#" class="btn btn-primary read-more" data-toggle="modal" data-target="#modalCancellationServices">Readmore</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <div class="card border-hover shadow-hover-lg-1 px-7 pb-6 pt-4 h-100 bg-transparent bg-hover-white">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                            <span class="text-primary fs-90 lh-1">
                                <img src="<?= base_url('theme/images/services/extrajudicial.svg') ?>" alt="retrieval-of-documents">
                            </span>
                        </div>
                        <div class="card-body px-0 pt-6 pb-5 pb-lg-0 text-center">
                            <h4 class="card-title fs-18 lh-17 text-dark mb-2">Extrajudicial Settlement</h4>
                            <p class="card-text px-2 mb-lg-7">
                                Seamless Settlements, Trusted Solutions: Opt for Our Extra-Judicial Settlement Services!
                            </p>
                            <a href="#" class="btn btn-primary read-more" data-toggle="modal" data-target="#modalExtrajudicialServices">Readmore</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <div class="card border-hover shadow-hover-lg-1 px-7 pb-6 pt-4 h-100 bg-transparent bg-hover-white">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                            <span class="text-primary fs-90 lh-1">
                                <img src="<?= base_url('theme/images/services/tax.svg') ?>" alt="certified-true-copy">             
                            </span>
                        </div>
                        <div class="card-body px-0 pt-6 text-center pb-5 pb-lg-0">
                            <h4 class="card-title fs-18 lh-17 text-dark mb-2">Cancellation and Issuance of Tax Declaration</h4>
                            <p class="card-text px-2">
                                Effortless Resolution: Simplify the Cancellation and Issuance of Tax Declaration with Us!
                            </p>
                            <a href="#" class="btn btn-primary read-more" data-toggle="modal" data-target="#modalCanceltaxdecServices">Readmore</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <div class="card border-hover shadow-hover-lg-1 px-7 pb-6 pt-4 h-100 bg-transparent bg-hover-white">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                          <span class="text-primary fs-90 lh-1">
                                <img src="<?= base_url('theme/images/services/real-property-tax.svg') ?>" alt="certified-true-copy">             
                            </span>
                        </div>
                        <div class="card-body px-0 pt-6 pb-5 pb-lg-0 text-center">
                            <h4 class="card-title fs-18 lh-17 text-dark mb-2">Annual Payment of Real Property Tax</h4>
                            <p class="card-text px-2">
                                Simplify Your Obligations: Choose Us for Hassle-Free Annual Payment of Real Property Tax (RPT)!
                            </p>
                            <a href="#" class="btn btn-primary read-more" data-toggle="modal" data-target="#modalAnnualRPTServices">Readmore</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <div class="card border-hover shadow-hover-lg-1 px-7 pb-6 pt-4 h-100 bg-transparent bg-hover-white">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                          <span class="text-primary fs-90 lh-1">
                                <img src="<?= base_url('theme/images/services/reconstitution-of-lost-title.svg') ?>" alt="certified-true-copy">             
                            </span>
                        </div>
                        <div class="card-body px-0 pt-6 text-center pb-0">
                            <h4 class="card-title fs-18 lh-17 text-dark mb-2">Reconstitution of Lost Title</h4>
                            <p class="card-text px-2 mb-10">
                                Recover with Confidence: Opt for Our Services in the Reconstitution of Lost Title!
                            </p>
                            <a href="#" class="btn btn-primary read-more" data-toggle="modal" data-target="#modalLosttitleServices">Readmore</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <div class="card border-hover shadow-hover-lg-1 px-7 pb-6 pt-4 h-100 bg-transparent bg-hover-white">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                            <span class="text-primary fs-90 lh-1">
                                <img src="<?= base_url('theme/images/services/partition.svg') ?>" alt="">
                            </span>
                        </div>
                        <div class="card-body px-0 pt-6 text-center pb-0">
                            <h4 class="card-title fs-18 lh-17 text-dark mb-2">Partition of Property</h4>
                            <p class="card-text px-2 mb-10">
                                Harmonious Division, Clear Solutions: Opt for Our Professional Partition of Property Services!
                            </p>
                            <a href="#" class="btn btn-primary read-more" data-toggle="modal" data-target="#modalPartitionServices">Readmore</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <div class="card border-hover shadow-hover-lg-1 px-7 pb-6 pt-4 h-100 bg-transparent bg-hover-white">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                            <span class="text-primary fs-90 lh-1">
                                <img src="<?= base_url('theme/images/services/assistance.svg') ?>" alt="">
                            </span>
                        </div>
                        <div class="card-body px-0 pt-6 text-center pb-0">
                            <h4 class="card-title fs-18 lh-17 text-dark mb-2">Assistance in Correction of TItle</h4>
                            <p class="card-text px-2 mb-10">
                                Precision in Perfection: Choose Our Expert Assistance for Correction of Title!
                            </p>
                            <a href="#" class="btn btn-primary read-more" data-toggle="modal" data-target="#modalCorectionServices">Readmore</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <div class="card border-hover shadow-hover-lg-1 px-7 pb-6 pt-4 h-100 bg-transparent bg-hover-white">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                            <span class="text-primary fs-90 lh-1">
                                <img src="<?= base_url('theme/images/services/retrieval-of-documents.svg') ?>" alt="">
                            </span>
                        </div>
                        <div class="card-body px-0 pt-6 text-center pb-0">
                            <h4 class="card-title fs-18 lh-17 text-dark mb-2">Trace Back & Title Verification</h4>
                            <p class="card-text px-2 mb-10">
                            Uncover Your Property's History: Trust Our Trace Back & Title Verification Services!
                            </p>
                            <a href="#" class="btn btn-primary read-more" data-toggle="modal" data-target="#modalCanceltaxdecServices">Readmore</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <div class="card border-hover shadow-hover-lg-1 px-7 pb-6 pt-4 h-100 bg-transparent bg-hover-white">
                        <div class="card-img-top d-flex align-items-end justify-content-center">
                            <span class="text-primary fs-90 lh-1">
                                <img src="<?= base_url('theme/images/svg/land-use-conversion.svg') ?>" alt="">
                            </span>
                        </div>
                        <div class="card-body px-0 pt-6 text-center pb-0">
                            <h4 class="card-title fs-18 lh-17 text-dark mb-2">Landuse Conversion</h4>
                            <p class="card-text px-2 mb-10">
                                Unlock Your Property's Potential with Seamless Land Use Conversion Payments!
                            </p>
                            <a href="#" class="btn btn-primary read-more" data-toggle="modal" data-target="#modalTracebackServices">Readmore</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mb-11">

            <h2 class="text-heading mb-2 fs-22 fs-md-32 text-center lh-16 mxw-571 px-lg-8">
                Do You Have An Upcoming
                Real Esate Transaction?
            </h2>
            <p class="text-center mxw-670 mb-8">
                Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscorem ipsum dolor sit ametcipsum
                ipsumg consec tetur cing elitelit.
            </p>
            <form class="mxw-774">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" placeholder="First Name" class="form-control form-control-lg border-0"
                                name="first-name">
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
                            <input placeholder="Your Email" class="form-control form-control-lg border-0" type="email"
                                name="email">
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
                    <textarea class="form-control border-0" placeholder="Message" name="message" rows="5"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-primary px-9">Submit</button>
                </div>
            </form>
        </div>
    </section>
</main>
<!-- Modal for Titling Services -->
<div class="modal fade" id="modalTitlingServices" tabindex="-1" role="dialog" aria-labelledby="modalTitlingServicesLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="modalTitlingServicesLabel">TRANSFER OF TITLE:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-white" style="background-image: url('<?= base_url('theme/images/services/car.jpg') ?>'); background-size: cover;">
        <!-- Add details or content for Titling Services here -->
        <p>•	RESIDENTIAL<br>
            •	COMMERCIAL<br>
            •	CONDOMINIUM<br>
            •	INDUSTRIAL<br><br>
            Possessing the Title is the primary evidence of property ownership.<br><br>
            We can manage the transfer of ownership for you. Our expertise covers various common methods of land title transfer including:<br><br>
            1.	SALE<br> 
            2.	DONATION<br>
            3.	PARTITION<br>
            4.	EXTRA JUDICIAL<br><br>
            <span class="text-primary">WHAT ARE THE REQUIRED DOCUMENTS FOR TRANSFERING LAND TITLE?</span><br><br>
            a.	Original Title <br>
            b.	Tax Declaration (original) <br>
            c.	Real Estate Tax Clearance (original)<br>
            d.	Deed Of Conveyance (Deed of Sale/ Donation or Partition / EJS (notarized))<br>
            e.	Government Identification of both parties. (latest)<br>
            f.	Other requirements (as needed)<br><br>
            Ensure a smooth transfer process by preparing these necessary documents for your land title transfer.


        </p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-toggle="modal" href="#contactModal">Contact Us</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal for Cancellation Services -->
<div class="modal fade" id="modalCancellationServices" tabindex="-1" role="dialog" aria-labelledby="modalCancellationServicesLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="modalCancellationServicesLabel">CANCELLATION OF ANNOTATION ON THE TITLE:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add details or content for Titling Services here -->
        <p>Annotations on a title, such as those related to mortgages, Rule 74 (transfer by succession or Extrajudicial 
            Settlement), and loss titles, often needed thorough attention. Undertaking the cancellation of such annotations 
            involves the submission of essential documents required by the Registry of Deeds.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" href="#contactModal">Contact Us</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal for ExtraJudicial Settlement Services -->
<div class="modal fade" id="modalExtrajudicialServices" tabindex="-1" role="dialog" aria-labelledby="modalExtrajudicialServicesLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="modalExtrajudicialServicesLabel">EXTRA JUDICIAL SETTLEMENT:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add details or content for Titling Services here -->
        <p>
        Skip the courtroom hassle! To lessen your burden on the budget and time, we can help you in drafting your Contract
         or Agreement in settling the estate among the Heirs. Our dedicated support ensures a smooth process, 
         guiding you every step of the way and guaranteeing the timely transfer of your title.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" href="#contactModal">Contact Us</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalCanceltaxdecServices" tabindex="-1" role="dialog" aria-labelledby="modalCanceltaxdecServicesLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="modalCanceltaxdecServicesLabel">CANCELLATION AND ISSUANCE OF TAX DECLARATION:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add details or content for Titling Services here -->
        <p>
        We assist in facilitating inspection,
         assessment and issuance of new Tax Declaration from the Assessor’s 
         Office who covers the property location.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" href="#contactModal">Contact Us</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalAnnualRPTServices" tabindex="-1" role="dialog" aria-labelledby="modalAnnualRPTServicesLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="modalAnnualRPTServicesLabel">ANNUAL PAYMENT OF REAL PROPERTY TAX (RPT):</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add details or content for Titling Services here -->
        <p>
        Avoid penalties and delinquencies, don’t be stress with long line in paying your taxes annually, 
        we do assessment and process of payment ahead of time to enjoy huge discount from the Municipalities
         who covers the property location.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" href="#contactModal">Contact Us</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalLosttitleServices" tabindex="-1" role="dialog" aria-labelledby="modalLosttitleServicesLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="modalLosttitleServicesLabel">RECONSTITUTION OF LOST TITLE:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add details or content for Titling Services here -->
        <p>
        OUR EXPERTISE! Through our competent and trustworthy law firm partners, we can assist you in filing the petition for reconstitution to restore a LOST or DESTROYED TITLE. 
        You have to prove the loss of your title, accompanied by requirements under the law to have it reconstitute, 
        under judicial process.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" href="#contactModal">Contact Us</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalPartitionServices" tabindex="-1" role="dialog" aria-labelledby="modalPartitionServicesLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="modalPartitionServicesLabel">CANCELLATION AND ISSUANCE OF TAX DECLARATION:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add details or content for Titling Services here -->
        <p>
        This process entails the creation of survey plans by a registered Geodetic Engineer to divide the property appropriately. 
        Typically initiated when co-heirs of an inherited property wish to subdivide it in line with their respective shares, 
        or when multiple individual owners desire to partition the property.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" href="#contactModal">Contact Us</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalCorectionServices" tabindex="-1" role="dialog" aria-labelledby="modalCorectionServicesLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="modalCorectionServicesLabel">ASSISTANCE IN CORRECTION OF TITLE:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add details or content for Titling Services here -->
        <p>
        Allow us to guide you through the process of filing a petition for amendment in the appropriate court, 
        specifically addressing corrections in the title that require a court order for resolution and finality.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" href="#contactModal">Contact Us</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalTracebackServices" tabindex="-1" role="dialog" aria-labelledby="modalTracebackServicesLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="modalTracebackServicesLabel">TRACE BACK & TITLE VERIFICATION:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add details or content for Titling Services here -->
        <p>
        Our service provides you peace of mind by guaranteeing that the property you are acquiring is free from any legal impediments 
        or uncertainties about past ownership. We facilitate this assurance by tracing back to previous cancelled titles 
        preceding the current one and meticulously verifying the documents with the Registry of Deeds.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" href="#contactModal">Contact Us</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection(); ?>