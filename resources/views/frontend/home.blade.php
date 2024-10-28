@extends('templates.master')



@section('body')
  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="images/my image.jpg" alt="">
      </div>
    </div>

    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      <span>
                        Welcome to Drevap
                      </span>
                    </h1>
                    <p>
                      Africa's premier web and mobile app development company! We are a team of experienced and passionate engineers, dedicated to delivering innovative solutions that harness the power of technology to help build a greener, more sustainable future for Africa and the world.


                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-2">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1></h1>
                      <span>
                        Welcome to Drevap
                      </span>
                    </h1>
                    <p>
                      Africa's premier web and mobile app development company! We are a team of experienced and passionate engineers, dedicated to delivering innovative solutions that harness the power of technology to help build a greener, more sustainable future for Africa and the world.

                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-2">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      <span>
                        Welcome to Drevap
                      </span>
                    </h1>
                    <p>
                      Africa's premier web and mobile app development company! We are a team of experienced and passionate engineers, dedicated to delivering innovative solutions that harness the power of technology to help build a greener, more sustainable future for Africa and the world.

                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-2">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container idicator_container">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img_container">
            <div class="img-box">
              <img src="images/about us 2.avif" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                About Drevap
              </h2>
            </div>
            <p>
              Welcome to drevap, the leading technology company revolutionizing the African tech landscape. We are a team of innovative tech enthusiasts who are passionate about delivering world-class web, mobile, and desktop app development services to businesses across the continent. With a deep understanding of the African market and a commitment to innovation, we help organizations unlock the full potential of technology to drive growth and success. Our skilled developers have the experience and expertise to bring your ideas to life, delivering powerful solutions that help you stay ahead of the competition.
            </p>
            <div class="btn-box">
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our services
        </h2>
      </div>
      
      <div class="row">
        <div class="col-md-4">
          <div class="box container">
            <img src="images/support.jpg" alt="" width="100%">
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
            <div class="detail-box">
              <h6>
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


  <!-- client section -->

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

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="contact_bg_box">
      <div class="img-box">
        <img src="images/contact us.jpg" alt="">
      </div>
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Interact with Us:
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-7 mx-auto">
            <form action="#">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Full Name" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email " />
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div class="">
                    <input type="text" placeholder="Message" class="message_input" />
                  </div>
                  <div class="btn-box ">
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- team section -->

 
  <!-- end team section -->

@endsection







