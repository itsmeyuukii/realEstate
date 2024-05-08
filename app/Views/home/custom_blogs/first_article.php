<?php echo $this->extend("layouts/home_base"); ?>

<?php echo $this->section("title"); ?>
Msg-Homes | Home
<?php echo $this->endSection(); ?>

<?= $this->section("content"); ?>

<main id="content">
    

    
    <section class="pt-12 pb-5">
        <div class="container">
            <ul class="list-inline text-center mb-3">
                
                <li class="list-inline-item">
                <a href="#" class="badge bg-gray-01 letter-spacing-1 text-body bg-hover-accent px-2">ForeClosed Properties</a>
                </li>
            </ul>
            <h2 class="fs-md-32 text-heading lh-141 mb-6 mxw-670 text-center">
                </?= $blog->title ?>
            </h2>
            <ul class="list-inline text-center mb-8">
               
                <li class="list-inline-item mr-4"><i class="far fa-calendar mr-1"></i> </?= $blog->created_at ?></li>
                
            </ul>
            <img class="mb-9" src="</?= $base_url . $blog->image_path ?>"
                alt="Ten Benefits Of Rentals That May Change Your Perspective">
            <div class="mxw-851">
                <div class="lh-143 mb-9">
                    <!-- Section Start 1st Page -->
                    <div class="row">
                        <div class="col-md-6 pt-0 pl-md-8">
                            <p class="text-justify fs-15">
                            There may have been quite a number of
                            business success stories, but in the field of
                            real estate in the Philippines, My Saving
                            Grace Realty and Development Corp is one
                            story to tell.
                            <br>
                            <br>
                            MSGRDC started in 2013 as a comeback
                            venture of a real estate broker, Ramil
                            Alquileta. Seven years prior, Mr. Alquileta had
                            stopped doing the real estate business for
                            several personal reasons. But then, he found
                            luck in establishing what later became one of
                            the country’s most successful real estate
                            businesses.
                            </p>
                        </div>
                        <div class="col-md-6 text-center py-5 my-5">
                            <img src="<?= base_url('public/uploads/blog_images/page-2.png')?>" alt="photo-2" class="" style="width: 15rem;">
                        </div>
                    </div>
                    <!-- Section Start 2nd Page -->
                    <div class="row bg-primary history-section">
                        <div class="col-md-5 order-sm-1 pt-8">
                            <div class="brief-history-box">
                                <h3 class="text-white">Our History</h3>
                                <p class="text-justify text-white fs-13">
                                My Saving Grace Realty and Development Corp
                                is based in Cavite, initially offering selling of bank
                                foreclosed properties. Two years after its
                                inception, the company began partnering with
                                digital selling platforms for real estate like
                                Lamudi. This move expands the business’
                                horizon, connecting itself to more sellers and
                                buyers, and helping it digitalize its transactions
                                with them.
                                <br>
                                <br>
                                In 5 years, the company further its services to
                                consulting on transferring and consolidation of
                                titles, mortgage origination, and facilitation of
                                home loans and insurance with financial
                                institutions, as well as taxation, property
                                inspections, and other services related to buying
                                and selling properties.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 order-sm-0 text-center">
                            <div class="img-box-article">
                                <img src="<?= base_url('public/uploads/blog_images/page-3.png')?>" alt="photo-3" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-12 order-sm-2 pt-md-5">
                            <p class="px-6 px-lg-8 text-justify text-white fs-13">
                            “Isang magandang opportunity na dumating is to partner with entities like Lamudi na isang online platform kung saan may
                            easy access ang mga sellers and buyers ng property. This way, na- digitize ang proseso ng pagbebenta. At the same time,
                            we were able to reach wider audience and target market online,” Mr. Ramil Alquileta, Founder, explained.
                            <br>
                            <br>
                            As MSGRDC continued its pursuit of becoming a top-of-mind firm in the industry, it sought and acquired accreditation
                            from several universal and commercial banks in the country as their marketing arm in areas of asset management and
                            acquisition.
                            <br>
                            <br>
                            While solidifying its foundation through partnerships, the corporation has managed to widen its reach to international
                            property buyers and investors. Its wide selection of properties from excellent home deals to bank-foreclosed assets has
                            attracted both local and overseas clients.
                            </p>
                        </div>
                    </div>
                    <!-- Section Start 3rd Large page -->
                    <div class="row ceo-bg-md mt-8">
                        <div class="col-md-8 text-justify">
                            <p>
                            When Mr. Alquileta established MSGRDC in 2013, he had one vision in mind:
                            that the company will become the preferred one-stop service provider of
                            quality and affordable real estate properties in the country.
                            <br>
                            <br>
                            “Buying properties used to be tedious and exhausting. One reason is
                            because iba iba ang kausap mo bawat phase ng process. Iba yung
                            magbebenta sayo sa mag aasikaso ng documents. Pag may iba ka pang
                            gusto gawin sa property iba na naman. That’s why what I wanted is to make
                            My Saving Grace as a one-stop shop. So the process of acquiring property
                            will be so much easier with only one focal office na kausap mo fro the very
                            beginning up to the transfer.”
                            <br>
                            <br>
                            The company’s wide range of services provides aid in almost every state of
                            need of a client- from those who have properties and have no idea how
                            best to maximize the, to those looking for one, for tenants, for buyers, for
                            assistance in property legal services, and even for insurance for these
                            properties.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <div class="ceo-box-img">
                                <img src="<?= base_url('public/uploads/blog_images/page-4.png')?>" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Section Start 3rd Mobile page -->
                    <div class="row ceo-bg-sm mt-8">
                        <div class="text-justify pl-7 d-flex">
                            <div class="col-4">
                                <div class="ceo-box-img pt-6">
                                    <img src="<?= base_url('public/uploads/blog_images/page-4.png')?>" alt="">
                                </div>
                            </div>
                            <p class="col-8">
                            When Mr. Alquileta established MSGRDC in 2013, he had one vision in mind:
                            that the company will become the preferred one-stop service provider of
                            quality and affordable real estate properties in the country.
                            </p>
                        </div>
                        <div class="container">
                            <p class="col-12 text-justify">
                                “Buying properties used to be tedious and exhausting. One reason is
                                because iba iba ang kausap mo bawat phase ng process. Iba yung
                                magbebenta sayo sa mag aasikaso ng documents. Pag may iba ka pang
                                gusto gawin sa property iba na naman. That’s why what I wanted is to make
                                My Saving Grace as a one-stop shop. So the process of acquiring property
                                will be so much easier with only one focal office na kausap mo fro the very
                                beginning up to the transfer.”
                                <br>
                                <br>
                                The company’s wide range of services provides aid in almost every state of
                                need of a client- from those who have properties and have no idea how
                                best to maximize the, to those looking for one, for tenants, for buyers, for
                                assistance in property legal services, and even for insurance for these
                                properties.
                            </p>
                        </div>
                    </div>
                    <div class="row py-lg-10 py-5 bg-primary text-white">
                        <div class="col-md-6">
                            <div class="section-4-img-box">
                                <img src="<?= base_url('public/uploads/blog_images/page-5.png') ?>" alt="photo-4">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="pt-8 text-justify">
                                Over the years, My Saving Grace Realty and
                                Development Corporation has served over 20,000
                                clients from all over the country and from countries
                                overseas such as Singapore, Dubai, USA, and Europe.
                                <br>
                                <br>
                                <span class="font-italic">
                                “Our commitment as a company is to continuously
                                provide convenience, worry- free services. That is
                                while guaranteeing honesty in all our dealings,
                                integrity, and of course, on top of all is loyalty to our
                                partners..”
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="row py-lg-10 py-5">
                        <div class="col-lg-6">
                            <h4 class="text-primary">A COMMITMENT TO QUALITIY</h4>
                            <p>
                            In over nine years of business operation, MSGRDC has consistently
                            earned commendations from partner banks, companies, and
                            award- giving body.
                            <br><br>
                            It has a record 3 years feat as BDO Broker of the year from 2013 to
                            2015; another 3-year feat as Brokerage of the Year from 2016 to
                            2018, Most Leads Generated in 2019, and 2020 All-Star Portfolio
                            award by Lamudi. In 2019, it also earned one of the most
                            prestigious awards, the Golden Globe Annual Awards for Business
                            Excellence.
                            <br><br>
                            While these recognitions become the company’s pride, it is
                            humble in pursuing excellence and quality in service for the
                            purpose of helping people realize their real- estate dreams.
                            <br><br>
                            <span class="font-italic">
                            “In my years of experience in the real estate, I heard so many
                            stories about people swindled by unlicensed brokers. Yung perang
                            pinaghihirapan ng mga kababayan natin napupunta sa wala tinatakbuhan na sila pagkatapos makuha ang pera. It’s saddening
                            to hear that, and as much as possible, we want to help to eliminate
                            these kind of experiences.”
                            </span>
                             - Ramil Alquileta
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <div class="commitment-img-box">
                                <img src="../public/uploads/blog_images/page-6.png" alt="photo-6">
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="pt-2">
                            With this, the company strives to further its reach and aid more sellers and buyers of properties in and out of the country with
                            its wide array of quality real estate services.
                            <br><br>
                            Learn more about My Saving Grace Realty and Development Corp. Make sure to follow our Facebook Page
                            facebook/msgrdc.official and visit our website at www.msg-homes.com.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    

</main>

<?= $this->endSection(); ?>