<?php echo $this->extend("layouts/home_base"); ?>

<?php echo $this->section("title"); ?>
Msg-Homes | Home
<?php echo $this->endSection(); ?>

<?= $this->section("content"); ?>

<main id="content">
    <section class="pt-1 pb-1 pb-lg-1 page-title bg-overlay bg-img-cover-center d-none d-lg-block"
        style="background-image: url('<?= base_url('theme/images/BG3.jpg'); ?>');">
        <div class="container">
            <h1 class="fs-22 fs-md-42 mb-0 text-white font-weight-normal text-center py-7 lh-15 px-lg-16"
                data-animate="fadeInDown">
            </h1>
        </div>
    </section>

    <?php if($blog): ?>
    <section class="py-12">
        <div class="container">
            <ul class="list-inline text-center mb-3">
                <!-- <li class="list-inline-item">
                <a href="#" class="badge bg-gray-01 letter-spacing-1 text-body bg-hover-accent px-2">Rentals</a>
                </li> -->
                <!-- <li class="list-inline-item">
                <a href="#" class="badge bg-gray-01 letter-spacing-1 text-body bg-hover-accent px-2">Creative</a>
                </li> -->
                <!-- <li class="list-inline-item">
                <a href="#" class="badge bg-gray-01 letter-spacing-1 text-body bg-hover-accent px-2">ForeClosed Properties</a>
                </li> -->
            </ul>
            <h2 class="fs-md-32 text-heading lh-141 mb-6 mxw-670 text-center">
                <?= $blog->title ?>
            </h2>
            <ul class="list-inline text-center mb-8">
                <!-- <li class="list-inline-item mr-4"><img class="mr-1" src="images/author-01.jpg" alt="D. Warren">
                    D. Warren
                </li> -->
                <li class="list-inline-item mr-4"><i class="far fa-calendar mr-1"></i> <?= $blog->created_at ?></li>
                <!-- <li class="list-inline-item mr-4"><i class="far fa-eye mr-1"></i> 149 views</li> -->
            </ul>
            <img class="mb-9" src="<?= $base_url . $blog->image_path ?>"
                alt="blog-image-post">

              <?php if($blog->custom == 'yes') : ?>
                <?= $blog->description ?>
              <?php else :?>
            <div class="mxw-751">
            <div class="lh-214 mb-9">
              <?= $blog->description ?>
              <!-- <p class="ml-8 pl-4 fs-16 text-heading font-weight-500 lh-2 border-left border-4x border-primary mxw-521 my-6">
                GrandHome is an estate agency that
                helps people live in more thoughtful and
                beautiful ways. We believe in design as a powerful force for good.</p> -->
            </div>
            <?php endif; ?>
            <div class="row pb-7 mb-6 border-bottom">
              <div class="col-sm-6 d-flex">
                <span class="d-inline-block mr-2"><i class="fal fa-tags"></i></span>
                <ul class="list-inline">
                  <li class="list-inline-item mr-0"><a href="#" class="text-muted hover-dark">real estate,</a>
                  </li>
                  <li class="list-inline-item mr-0"><a href="#" class="text-muted hover-dark">thememove,</a>
                  </li>
                  <li class="list-inline-item mr-0"><a href="#" class="text-muted hover-dark">building</a>
                  </li>
                </ul>
              </div>
              <div class="col-sm-6 text-left text-sm-right">
                <span class="d-inline-block text-heading font-weight-500 lh-17 mr-1">Share this post</span>
                <button type="button"
                            class="btn btn-primary rounded-circle w-52px h-52 fs-20 d-inline-flex align-items-center justify-content-center"
                            data-container="body"
                            data-toggle="popover" data-placement="top" data-html="true" data-content=' <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                                        class="fab fa-twitter"></i></a>
                  </li>
                  <?php 
                    $url = base_url('blog-detail/' . $blog->slugs);
                  ?>
                  <li class="list-inline-item ">
                      <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $url ?>" 
                      class="text-muted fs-15 hover-dark lh-1 px-2" 
                      target="_blank">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                                        class="fab fa-instagram"></i></a>
                  </li>
                  <li class="list-inline-item ">
                    <a href="https://www.youtube.com/share?url=" 
                      class="text-muted fs-15 hover-dark lh-1 px-2" 
                      target="_blank">
                      <i class="fab fa-youtube"></i>
                    </a>
                  </li>
                </ul>
                '>
                <i class="fad fa-share-alt"></i>
              </button>
            </div>
          </div>
          <div class="media flex-wrap flex-sm-nowrap mb-8">
            <div class="mb-3 mb-sm-0 mr-sm-2 text-center w-100 w-sm-auto">
              <img src="images/author-2.jpg" alt="Maggie Strickland">
              <ul class="list-inline mb-0 mt-3">
                <li class="list-inline-item mr-0">
                  <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                    class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item mr-0">
                  <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                    class="fab fa-facebook-f"></i></a>
                </li>
                <li class="list-inline-item mr-0">
                  <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                    class="fab fa-instagram"></i></a>
                </li>
                <li class="list-inline-item mr-0">
                  <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                    class="fab fa-youtube"></i></a>
                </li>
              </ul>
            </div>
            <div class="media-body text-center text-sm-left">
              <h5 class="text-dark fs-16 mb-2">Maggie Strickland</h5>
              <p class="mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit
                anim id est laboruLorem ipsum dolor sit amet datat non proident</p>
            </div>
          </div>
          <div class="row mb-7">
            <div class="col-sm-6 mb-6">
              <div class="card">
                <img src="images/blog-nav-01.jpg"
                             alt="How to Create an Effective Elevator Pitch" class="card-img">
                <a href="#"
                           class="card-img-overlay d-flex align-items-center justify-content-center text-white fs-16 font-weight-500 px-4 pl-sm-5 pr-sm-8 py-6">
                  <span class="d-inline-block mr-4 fs-24"><i class="fal fa-angle-left"></i></span>
                  How to Create an Effective Elevator Pitch
                </a>
              </div>
            </div>
            <div class="col-sm-6 mb-6">
              <div class="card">
                <img src="images/blog-nav-02.jpg"
                             alt="How to Create an Effective Elevator Pitch" class="card-img">
                <a href="#" class="card-img-overlay d-flex align-items-center justify-content-center text-white fs-16 font-weight-500 px-4 pr-sm-5 pl-sm-10 py-6 text-right">
                  Top Strategic Technology Trends for 2019
                  <span class="d-inline-block ml-4 fs-24"><i class="fal fa-angle-right"></i></span>
                </a>
              </div>
            </div>
          </div>
          <h3 class="fs-22 text-heading lh-15 mb-6">Comments (3)</h3>
          <div class="media mb-6 pb-5 border-bottom">
            <div class="w-70px mr-2">
              <img src="images/testimonial-5.jpg" alt="Dollie Horton">
            </div>
            <div class="media-body">
              <p class="text-heading fs-16 font-weight-500 mb-0">Dollie Horton</p>
              <p class="mb-4">Very good and fast support during the week. Thanks for always keeping your
                WordPress themes
                up to date. Your level of support and dedication is second to none. Solved all my problems
                in a pressing time! Excited to see the other themes they make!</p>
              <ul class="list-inline">
                <li class="list-inline-item text-muted">02 Dec 2019 at 2:40pm<span
                                class="d-inline-block ml-2">|</span></li>
                <li class="list-inline-item"><a href="#" class="text-heading hover-primary">Reply</a></li>
              </ul>
            </div>
          </div>
          <div class="media mb-6 pb-5 border-bottom">
            <div class="w-70px mr-2">
              <img src="images/review-05.jpg" alt="Dollie Horton">
            </div>
            <div class="media-body">
              <p class="text-heading fs-16 font-weight-500 mb-0">Dollie Horton</p>
              <p class="mb-4">Very good and fast support during the week. Thanks for always keeping your
                WordPress themes
                up to date. Your level of support and dedication is second to none. Solved all my problems
                in a pressing time! Excited to see the other themes they make!</p>
              <ul class="list-inline">
                <li class="list-inline-item text-muted">02 Dec 2019 at 2:40pm<span class="d-inline-block ml-2">|</span></li>
                <li class="list-inline-item"><a href="#" class="text-heading hover-primary">Reply</a></li>
              </ul>
            </div>
          </div>
          <div class="media mb-10 pb-5 border-bottom">
            <div class="w-70px h-70 mr-2 bg-gray-01 rounded-circle fs-18 text-muted d-flex align-items-center justify-content-center">
              DH
            </div>
            <div class="media-body">
              <p class="text-heading fs-16 font-weight-500 mb-0">Dollie Horton</p>
              <p class="mb-4">Very good and fast support during the week. Thanks for always keeping your
                WordPress themes
                up to date. Your level of support and dedication is second to none. Solved all my problems
                in a pressing time! Excited to see the other themes they make!</p>
              <ul class="list-inline">
                <li class="list-inline-item text-muted">02 Dec 2019 at 2:40pm<span class="d-inline-block ml-2">|</span></li>
                <li class="list-inline-item"><a href="#" class="text-heading hover-primary">Reply</a></li>
              </ul>
            </div>
          </div>
          <h3 class="fs-22 text-heading lh-15 mb-6">Leave your thought here</h3>
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group mb-4">
                  <input type="text" placeholder="Your Name" name="name" class="form-control form-control-lg border-0">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-4">
                  <input placeholder="Your Email" class="form-control form-control-lg border-0" type="email" name="email">
                </div>
              </div>
            </div>
            <div class="form-group mb-6">
              <textarea class="form-control border-0" placeholder="Message" name="message" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-lg btn-primary px-9">Submit</button>
          </form>
        </div>
      </div>
    </section>
    <?php else: ?>
        Error
    <?php endif; ?>

</main>

<?= $this->endSection(); ?>