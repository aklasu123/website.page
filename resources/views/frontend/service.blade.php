@extends('templates.master')

@section('body')
    
<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="images/my image.jpg" alt="">
      </div>
    </div>

    <!-- end header section -->
  </div>

  <!-- service section -->

  <section class="service_section layout_padding ">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our services
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/support.jpg" alt="" width="100%">

            </div>
            <div class="detail-box">
              <h6>
                Tech Support Services


              </h6>
              <p>
                Our experienced tech support team is here to help you with any problems or questions you may have. Whether you need assistance with your PC, mobile device, or any other tech-related issue, our team is ready to give you the best experience.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/website.jpg" alt="" width="100%">

            </div>
            <div class="detail-box">
              <h6>
                Website Development
              </h6>
              <p>
                Our web development expertise means that we can create custom websites and web applications that are both visually stunning and functional. From e-commerce platforms and portfolio sites to simple blogs, we have the expertise to bring your vision to life.


              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/mobile app.webp" alt="" width="100%">

            </div>
            <div class="detail-box">
              <h6>
                Mobile App Development  

              </h6>
              <p>
                You have the next big app idea; Our team of experienced mobile app developers will bring your ideas to life, delivering custom apps for iOS and Android devices. Whether you are looking for a business app, a game, or anything in between, we have the skills and experience to make it happen.

              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->
  <section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>
          Other Services:
        </h2>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/custom pc.webp" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Custom PC Building
                </h4>
                <p>
                  For those who demand the best in computing power, we offer custom PC builds, including gaming PCs and workstations, built to your exact specifications. Whether you are a gamer, a creative professional, or just need a reliable computer for everyday use
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="box">
              <div class="img-box">
                <img src="images/security.png" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Information Security

                </h4>
                <p>
                  We understand the importance of protecting your data and information. Our information security experts can help you protect your devices, networks, and data from cyber threats
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="box">
              <div class="img-box">
                <img src="images/marketing.jpg" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Digital Marketing
                </h4>
                <p>
                  Our digital marketing team is here to help you get noticed online. Whether you need help with search engine optimization (SEO), social media marketing, or any other aspect of digital marketing, we are committed to helping businesses and individuals in Africa and around the world stay ahead of the curve
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- info section -->
  @endsection

