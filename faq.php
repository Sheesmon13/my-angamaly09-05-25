<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get answers to frequently asked questions about shopping, shipping, returns, and payments. Discover everything you need to know for a seamless shopping experience.">
    <meta name="keyword" content="">
    <title>MY-ANGAMALY</title>
    <?php include_once("includes/links.php"); ?>
</head>

<body>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section faq-bg">
        <div class="section-overlay">
            <div class="container breadcrumb-container">
                <div class="breadcrumb-area">
                    <h1>Faq</h1>
                </div>
                <div class="breadcrumb">
                    <a href="#">Home</a>
                    <i class="fa fa-minus" aria-hidden="true"></i>
                    <span class="current">faq</span>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Section -->


    <!-- Faq Section -->
    <section class="section faq-main-section pad-all">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="faq-tab-section">
                        <div class="faq-head">
                            <h1>Everything You Need to Know</h1>
                            <p class="gn-text">Duis vel interdum elit. Vivamus vel risus est. Integer a porta Quisque nisi felis, tincidunt cursus efficitur at.</p>
                        </div>
                    </div>
                    <div class="faq-search">
                        <div class="faq-search-para">
                        <p class="gn-text">What are You looking for?</p>
                        </div>
                        <div class="faq-search-button">
                            <button type="button" class="btn faq-btn btn-danger"><i class="fa fa-search" aria-hidden="true"></i><span>Search</span></button>
                        </div>
                    </div>
                    <div class="faq-tab-section">
                        <ul class="nav nav-tabs" id="faqTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="privacy-policy-tab" data-bs-toggle="tab" data-bs-target="#privacy-policy" type="button" role="tab" aria-controls="privacy-policy" aria-selected="true">Privacy Policy</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="report-spam-tab" data-bs-toggle="tab" data-bs-target="#report-spam" type="button" role="tab" aria-controls="report-spam" aria-selected="false">Report Or Spam</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="listing-policy-tab" data-bs-toggle="tab" data-bs-target="#listing-policy" type="button" role="tab" aria-controls="listing-policy" aria-selected="false">Listing Policy</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="deactivate-tab" data-bs-toggle="tab" data-bs-target="#deactivate" type="button" role="tab" aria-controls="deactivate" aria-selected="false">Deactivate</button>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="faqTabContent">
                        <div class="tab-pane fade show active" id="privacy-policy" role="tabpanel" aria-labelledby="privacy-policy-tab">
                            <div class="accordion" id="privacyPolicyAccordion">
                                <div class="accordion-item faq-item">
                                    <h2 class="accordion-header faq-acc-hd" id="headingOne">
                                        <button class="accordion-button faq-acc-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <h4>What is the benefit of using the Myangamaly website?</h4>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#privacyPolicyAccordion">
                                        <div class="accordion-body faq-body-para">
                                        <p class="gn-text"> Odio euismod lacinia at quis risus sed. Volutpate odio ut enim blandit. Ornare lectus sit amet est placerat in egestas...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item faq-item">
                                    <h2 class="accordion-header faq-acc-hd" id="headingTwo">
                                        <button class="accordion-button faq-acc-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <h4> How can I find a certain service or business on this website?</h4>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#privacyPolicyAccordion">
                                        <div class="accordion-body faq-body-para">
                                        <p class="gn-text">You can search for services or businesses by using the search bar at the top of the page or filtering based on categories...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item faq-item">
                                    <h2 class="accordion-header faq-acc-hd" id="headingThree">
                                        <button class="accordion-button faq-acc-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <h4> How do you I update or delete my listing on this website?</h4>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#privacyPolicyAccordion">
                                        <div class="accordion-body faq-body-para">
                                        <p class="gn-text">You can search for services or businesses by using the search bar at the top of the page or filtering based on categories...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item faq-item">
                                    <h2 class="accordion-header faq-acc-hd" id="headingFour">
                                        <button class="accordion-button faq-acc-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            <h4> How can I find a certain service or business on this website?</h4>
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#privacyPolicyAccordion">
                                        <div class="accordion-body faq-body-para">
                                        <p class="gn-text">You can search for services or businesses by using the search bar at the top of the page or filtering based on categories...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="report-spam" role="tabpanel" aria-labelledby="report-spam-tab">
                            <div class="accordion" id="reportSpamAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            How do I report spam or abuse?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#reportSpamAccordion">
                                        <div class="accordion-body">
                                            To report spam, go to the "Contact Us" section and submit a detailed report about the issue...
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="listing-policy" role="tabpanel" aria-labelledby="listing-policy-tab">
                            <div class="accordion" id="listingPolicyAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            What is the listing policy for this website?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#listingPolicyAccordion">
                                        <div class="accordion-body">
                                            Listings must adhere to community guidelines, avoiding prohibited content and ensuring accuracy of information...
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="deactivate" role="tabpanel" aria-labelledby="deactivate-tab">
                            <div class="accordion" id="deactivateAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                            How do I deactivate my account?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#deactivateAccordion">
                                        <div class="accordion-body">
                                            You can deactivate your account by visiting your profile settings and selecting the "Deactivate" option...
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="faq-contact-section">
                        <div class="faq-cnt-image">
                            <img src="assets/images/contact/faq.png" class="img-fluid">
                        </div>
                        <div class="faq-cnt-form">
                            <h6>Didn't find the answer?</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!--End Faq Section -->



    <?php include_once("includes/scripts.php"); ?>


</body>

</html>