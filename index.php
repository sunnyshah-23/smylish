<?php include_once("script.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <script src="https://use.fontawesome.com/1d4fd6aa49.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <!-- first header -->
    <!-- <div class="navbar navbar-light bg-light justify-content-between">
      <div class="social-links">
        <a class="navbar-brand" href="#">
          <img
            src="img/icons/facebook.png"
            alt=""
            width="30"
            height="30"
            class="d-inline-block align-top"
          />
          <img
            src="img/icons/location.png"
            alt=""
            width="30"
            height="30"
            class="d-inline-block align-top"
          />
          <img
            src="img/icons/instagram.png"
            alt=""
            width="30"
            height="30"
            class="d-inline-block align-top"
          />
          <img
            src="img/icons/mail.png"
            alt=""
            width="30"
            height="30"
            class="d-inline-block align-top"
          />
          <img
            src="img/icons/whatsapp.png"
            alt=""
            width="30"
            height="30"
            class="d-inline-block align-top"
          />
        </a>
      </div>
      <div class="book-now">
        <button type="button" class="btn btn-secondary btn-lg">Book Now</button>
      </div>
    </div> -->
    <!-- first header ends -->

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div class="social-links">
                <a class="navbar-brand" href="#">
                    <img src="img/icons/facebook.png" alt="" width="30" height="30" class="d-inline-block align-top" />
                    <img src="img/icons/location.png" alt="" width="30" height="30" class="d-inline-block align-top" />
                    <img src="img/icons/instagram.png" alt="" width="30" height="30" class="d-inline-block align-top" />
                    <img src="img/icons/mail.png" alt="" width="30" height="30" class="d-inline-block align-top" />
                    <img src="img/icons/whatsapp.png" alt="" width="30" height="30" class="d-inline-block align-top" />
                </a>
            </div>
            <div class="booknow">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Book
                    Now</button>
            </div>
        </div>
    </nav>
    <!-- Just an image -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/logo (3).png" alt="" width="150" height="50" />
        </a>
        <a class="navbar-brand" href="#">
          <h6>Home</h6>
        </a>
        <a class="navbar-brand" href="#">
          <h6>Reasons to Smilysh</h6>
        </a>
        <a class="navbar-brand" href="#">
          <h6>The Smilysh Life</h6>
        </a>
        <a class="navbar-brand" href="#">
          <h6>How it Works</h6>
        </a>
        <a class="navbar-brand" href="#">
          <h6>Pricing</h6>
        </a>
        <a class="navbar-brand" href="#">
          <h6>Certified Orthodentist</h6>
        </a>
      </div>
    </nav> -->

    <!-- second header -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="img/logo (3).png" alt="" width="150" height="50" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span> <i class="fa fa-bars" aria-hidden="true"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#carouselExampleControls">
                            <h6>Home</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reasons-to-smilysh">
                            <h6>Reasons to Smilysh</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#the-smilysh-life">
                            <h6>The Smilysh Life</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how-it-works">
                            <h6>How it Works</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#smlyish-pricing">
                            <h6>Pricing</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <h6>Certified Orthodentist</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- second header ends -->

    <!-- carousel -->




    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/banners/BANNER 1.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="/img/banners/BANNER 2.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="/img/banners/BANNER 3.png" class="d-block w-100" alt="..." />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel ends -->

    <!-- REASONS TO SMILE -->

    <div class="container-fluid" id="reasons-to-smilysh">
        <div class="d-flex justify-content-center">
            <p class="top-reasons">TOP REASONS TO SMILYSH</p>
        </div>
        <div class="d-flex">
            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-4 col-12">
                    <img src="img/members/1 image.png" class="img-fluid" alt="..." />
                    <div class="text-center">
                        <p class="r-title">

                            SMILYSH ACCURACY
                        <p class="designation">Designed by Orthodentist</p>
                        </p>
                        <p class="r-description">

                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-12">
                    <img src="img/members/2 image.png" class="img-fluid" alt="..." />
                    <div class="text-center reasons-content">
                        <p class="r-title">
                            SMILYSH TOUCH
                        <p class="designation">Follow-up from Experts </p>
                        </p>
                        <p class="r-description">

                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-12">
                    <img src="img/members/3 image.png" class="card-img-top" alt="..." />
                    <div class="text-center">
                        <p class="r-title">

                            SMILYSH FOR LIFE
                        <p class="designation">Life-long Guarantee*</p>
                        </p>
                        <p class="r-description">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ENDS -->

    <!-- NEED MORE REASONS TO SMILE -->

    <div class="container">
        <div class="more_reasons">
            <div class="row justify-content-center">
                <img src="img/More reasons/need more reasons to smilysh (text).png "
                    style="width: 38rem; height: 3rem; margin-top: 30px" />
            </div>
            <div class="row justify-content-center mt-5 more-reasons-img-r1">
                <div class="col-md-3 col-xs-12 text-center">
                    <img src="img/More reasons/treatment by speacialists.png" />
                    <p>treatment by speacialists</p>
                </div>
                <div class="col-md-3 col-xs-12 text-center">
                    <img src="img/More reasons/accurate 3D imaging.png" />
                    <p>Accurate 3d imaging</p>
                </div>
                <div class="col-md-3 col-xs-12 text-center">
                    <img src="img/More reasons/made in india.png" />
                    <p>Made in india</p>
                </div>
                <div class="col-md-3 col-xs-12 text-center">
                    <img src="img/More reasons/experts follow up.png" />
                    <p>Experts follow up</p>
                </div>
            </div>
            <div class="row justify-content-center more-reasons-img-r2">
                <div class="col-md-3 col-xs-12 text-center">
                    <img src="img/More reasons/ling long guarantee.png" />
                    <p>life long guarantee</p>
                </div>
                <div class="col-md-3 col-xs-12 text-center">
                    <img src="img/More reasons/customized for comfort.png" />
                    <p>customized for comfort</p>
                </div>
                <div class="col-md-3 col-xs-12 text-center">
                    <img src="img/More reasons/accurate 3D imaging.png" />
                    <p>Accurate 3d imaging</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ENDS -->

    <!-- SMILISH LIFE -->
    <div class="smylish_life" id="the-smilysh-life">
        <div class="container">
            <div class="row justify-content-center">
                <img src="img/the smilysh life/(heading) the smilysh life.png" style="width: 18rem" />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0" style="align-items: center">
                            <div class="col-md-3">
                                <img src="img/the smilysh life/it_s invisble.png" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #f1717d; font-weight: 700;">It's Invisible</h5>
                                    <p class="card-text" style="font-size: 0.8rem">
                                        It's not Harry Potter's invisible cloak, but its unnoticeable. Your friends and
                                        colleages will be
                                        like - when and how? Surprise then with your incognito treatment.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0" style="align-items: center">
                            <div class="col-md-3">
                                <img src="img/the smilysh life/its cool.png" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #f1717d; font-weight: 700;">It's Cool</h5>
                                    <p class="card-text" style="font-size: 0.8rem">
                                        Using our state of the art scanners and design software, we help you
                                        visualize your smile in 3D even before the treatment begins.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0 no-emergencies" style="align-items: center">
                            <div class="col-md-3">
                                <img src="img/the smilysh life/no emergencies.png" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #f1717d; font-weight: 700;">No Emergencies</h5>
                                    <p class="card-text" style="font-size: 0.8rem">
                                        Unlike braces, no need for appointments and emergencies due to poking wires and
                                        loose
                                        brackets. Align your teeth comfortably at home.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0" style="align-items: center">
                            <div class="col-md-3">
                                <img src="img/the smilysh life/teeth whitening.png" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #f1717d; font-weight: 700;">Teeth whitening
                                    </h5>
                                    <p class="card-text" style="font-size: 0.8rem">
                                        Your aligner trays can double up as your teeth whitening trays as well! Get in
                                        touch
                                        with your dentist for fluoride and whitening treatments.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0" style="align-items: center">
                            <div class="col-md-3">
                                <img src="img/the smilysh life/its chill.png" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #f1717d; font-weight: 700;">It's Chill</h5>
                                    <p class="card-text" style="font-size: 0.8rem">
                                        No swelling, no smell, no sore mouth! Smilysh aligners are made with safe and
                                        comfortable materials so you can wear it all day, all night.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0" style="align-items: center">
                            <div class="col-md-3">
                                <img src="img/the smilysh life/foodie friendly.png" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #f1717d; font-weight: 700;">Foodie Friendly
                                    </h5>
                                    <p class="card-text" style="font-size: 0.8rem">
                                        We know you won't be cracking nuts or chewing cane with your aligners. Apart
                                        from that, the foodie
                                        in you is free to forget the aligners and enjoy.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="row g-0" style="align-items: center">
                            <div class="col-md-3">
                                <img src="img/the smilysh life/selfie worthy.png" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #f1717d; font-weight: 700;">Selfie Worthy</h5>
                                    <p class="card-text" style="font-size: 0.8rem">
                                        No ugly metal to spoil your selfies! Flaunt your smile in your selfies, enjoying
                                        you favorite food or socializing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ENDS -->

    <!-- AM I ELIGIBLE -->
    <div class="eligible">
        <div class="container">
            <div class="row">
                <h5 class="text-center" style="font-weight: 700; font-size: 1.5rem">
                    AM I ELIGIBLE ?
                </h5>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p style="font-size: 1rem; text-align: center; font-weight: 400">
                        You may have any of the below malocclusions or simply want to
                        fine-tune your smile to perfection. Book an appointment and our
                        experts will guide you.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ENDS -->

    <!-- Multi item Carosuel-->
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="img/am I eligible/Openbite.png" alt="" />
            <p class="owl-item-text">Openbite</p>
        </div>
        <div class="item">
            <img src="img/am I eligible/underbite.png" alt="" />
            <p class="owl-item-text">Underbite</p>
        </div>
        <div class="item">
            <img src="img/am I eligible/crooked teeth.png" alt="" />
            <p class="owl-item-text">Crooked Teeth</p>
        </div>
        <div class="item">
            <img src="img/am I eligible/crossbite.png" alt="" />
            <p class="owl-item-text">Crossbite</p>
        </div>
        <div class="item">
            <img src="img/am I eligible/gap teeth.png" alt="" />
            <p class="owl-item-text">Gap Teeth</p>
        </div>
        <div class="item">
            <img src="img/am I eligible/overbite.png" alt="" />
            <p class="owl-item-text">Overbite</p>
        </div>
        <div class="item">
            <img src="img/am I eligible/mix of baby and parent teeth.png" alt="" />
            <p class="owl-item-text">Mix of Baby and Parent Teeth</p>
        </div>
        <div class="item">
            <img src="img/am I eligible/generally straight teeth.png" alt="" />
            <p class="owl-item-text">Generally Straight Teeth</p>
        </div>
    </div>
    <!-- ENDS -->

    <!-- Aligners start -->

    <div class="aligners-parent" id="how-it-works">
        <div class="container">
            <div class="row aligners-image">
                <img src="img/aligners/get your smilysh aligners within a week.png" alt="" />
            </div>
        </div>
        <div class="container">
            <div class="row aligners-content">
                <div class="col-md-6 d-flex justify-content-end">
                    <p style="margin-top: 80px">Day 0</p>
                    <img src="img/aligners/arrow1.3.svg" alt="" />
                </div>
                <div class="col-md-4">
                    <p style="font-size: 15px">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Perspiciatis, dolor vel ab minima maxime, eos adipisci ipsum
                        nesciunt sequi nemo animi itaque eum iure, saepe autem repellat
                        nobis laudantium quae.
                    </p>
                </div>
            </div>
            <div class="row aligners-content">
                <div class="col-md-6 d-flex justify-content-end">
                    <p style="margin-top: 80px">Day 1</p>
                    <img src="img/aligners/arrow2.2.svg" alt="" />
                </div>
                <div class="col-md-4">
                    <p style="font-size: 15px">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Perspiciatis, dolor vel ab minima maxime, eos adipisci ipsum
                        nesciunt sequi nemo animi itaque eum iure, saepe autem repellat
                        nobis laudantium quae.
                    </p>
                </div>
            </div>
            <div class="row aligners-content">
                <div class="col-md-6 d-flex justify-content-end">
                    <p style="margin-top: 80px">Day 3</p>
                    <img src="img/aligners/arrow1.3.svg" alt="" />
                </div>
                <div class="col-md-4">
                    <p style="font-size: 15px">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Perspiciatis, dolor vel ab minima maxime, eos adipisci ipsum
                        nesciunt sequi nemo animi itaque eum iure, saepe autem repellat
                        nobis laudantium quae.
                    </p>
                </div>
            </div>
            <div class="row aligners-content">
                <div class="col-md-6 d-flex justify-content-end">
                    <p style="margin-top: 80px">Day 7</p>
                    <img src="img/aligners/arrow2.2.svg" alt="" />
                </div>
                <div class="col-md-4">
                    <p style="font-size: 15px">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Perspiciatis, dolor vel ab minima maxime, eos adipisci ipsum
                        nesciunt sequi nemo animi itaque eum iure, saepe autem repellat
                        nobis laudantium quae.
                    </p>
                </div>
            </div>
        </div>
        <div class="">
            <button class="btn btn-primary">
                START USING SMILYSH ALIGNERS
            </button>
        </div>
    </div>

    <!-- END -->

    <!-- Pricing starts -->

    <div class="pricing" id="smlyish-pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <img src="img/Pricing/Pricing.png" width="850" height="150" />

                    <p>
                        Smilish Aligners are the one of the most economic and affordable
                        aligners available in the Indian market. Since the aligners are
                        customized just for you, depending on the number of aligners
                        required for your case your treatment price varies. get in touch
                        with you nearest Smylish Orthodontist for a quote.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ENDS -->

    <!-- Footer 1 starts -->
    <div class="footer1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col text-center left" style="padding:20px">
                            <img src="img/logo (3).png" alt="" width="150" height="50" />
                            <p>Follow us on</p>
                            <img src="img/icons/instagram.png" alt="" width="30" height="30"
                                class="d-inline-block align-top" />
                            <img src="img/icons/facebook.png" alt="" width="30" height="30"
                                class="d-inline-block align-top" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 right" style="padding:20px">
                    <div class="row justify-content-center">
                        <div class="col-md-4 quick-links">
                            <h5>Quick Links</h5>
                            <p>Reasons To Smylish</p>
                            <p>The Smylish Life</p>
                            <p>How it Works?</p>
                            <p>Pricing</p>
                            <p># Fine Print</p>
                        </div>
                        <div class="col-md-5 contact-us">
                            <h5>Contact Us</h5>
                            <p style="margin-top: 3px">
                                <a href="tel:+918850114826">+91 8850114826</a><br />
                                <a href="mailto: info@smylish.in">info@smylish.in</a>
                            </p>

                            <a href="https://goo.gl/maps/XkP7nUQ9N9LSPjar8" target="_blank">
                                <p>
                                    Reg.Add: 001/A Aditi Apna Ghar, Swami Samarth Nagar, Andheri
                                    W, Mumbai-400 053
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ENDS -->

    <!-- Footer2 starts -->
    <div class="footer2">
        <div class="footer">
            <div class="container">
                <div class="row text-center">
                    <p>
                        Copyright 2021 Smilyish Dentistry Private Limited. All Rights
                        Reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ENDS -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Consultation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" method="index.php">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name"></input>
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email"></input>

                        <label for="exampleInputEmail1" class="form-label">Phone</label>

                        <input type="number" class="form-control" name="phone" id="phone"></input>

                        <button class="form-control btn btn-primary mt-2" type="submit" name="submit"
                            value="submit">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>

    <script type="text/javascript">
    $(function() {
        $(document).click(function(event) {
            $('.navbar-collapse').collapse('hide');
        });
    });
    </script>

    <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
        loop: false,
        margin: 50,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 3,
            },
        },
    });
    </script>

    <script language="JavaScript" type="text/javascript">
    $(document).ready(function() {
        $(".carousel").carousel({
            interval: 3000,
        });
    });
    </script>
    <script language="JavaScript" type="text/javascript" src="scripts/jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="scripts/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>