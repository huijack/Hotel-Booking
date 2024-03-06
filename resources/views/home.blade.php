<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.header')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-us.css')}}">
</head>
<body>
    <div class="home">
    <section class="frame-parent">
        <div class="day-label-parent">
        <div class="day-label">
            <div class="person-info">
                <div class="welcome-user">
                    Welcome, {{ Auth::user()->username }}
                </div>
            </div>


        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="log-in">
                <button type="submit" class="btn btn-logout">Logout</button>
            </div>
        </form>
        </div>
        <header class="infosierr-email">
            <div class="s-i-e-r-r-a-logo">
                <div class="sierra-hotel-logo2">SIERRA HOTEL LOGO</div>
            </div>
        <div class="follow-us">
            <div class="home1">
                <a href="#" class="active">
                    Hotel
                </a>
            </div>
            <div class="rooms">
                <a href="{{ url('rooms') }}">
                    Rooms
                </a>
            </div>
            <div class="about-us">
                <a href="{{ url('aboutus' )}}">
                    About Us
                </a>
            </div>
            <div class="contact">
                <a href="{{ url('contact') }}">
                    Contact
                </a>
            </div>
        </div>
        <div class="next-button">
            <a href="{{ url('rooms') }}" class="remove-text-decoration read-more-hover">
                <button class="contact-parent">
                    <div class="book-now">BOOK NOW</div>
                </button>
            </a>
        </div>
        </header>
    </section>
    <section class="header-frame">
        <div id="carouselHomePageIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselHomePageIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselHomePageIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/Rectangle 2.png') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-flex carousel-caption-sierra">
                        <p>HOTEL & RESORT</p>
                        <div class="mb-2"></div>
                        <h2>WELCOME TO SIERRA HOTEL</h2>
                        <div class="mb-5"></div>
                        <a class="remove-text-decoration read-more-hover" href="{{ url('aboutus') }}">
                            <button class="bed-services-frame">
                                <b class="discover-now">Discover Now</b>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/CarouselSierra2.png') }}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-flex carousel-caption-sierra">
                        <h2>"THE BEST RESORT OFFERED IN MALAYSIA"</h2>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselHomePageIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselHomePageIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="wifi-television-frame">
        <div class="bathroom-frame1">
        <div class="testimonials-frame">
            <div class="our-guests-love-us-frame">
            <div class="robert-downey-frame">
                <div class="vector-vector-frame">
                <div class="about-us1">ABOUT US</div>
                <h1 class="malaysias-1-ranked">
                    Malaysia’s #1 ranked hotel in 2023
                </h1>
                </div>
                <div class="address-frame">
                <div class="with-over-340">
                    With over 340 hotels worldwide, Sierra Hotel Group offers a
                    wide variety of hotels catering for a perfect stay no matter
                    where your destination.
                </div>
                </div>
                <div class="read-more-parent">
                <div class="read-more">
                    <a href="{{ url('aboutus') }}">
                        READ MORE
                    </a>
                </div>
                <div class="book-now-button-frame"></div>
                </div>
            </div>
            </div>
            <div class="contact-us-now-frame">
            <img
                class="image-3-icon"
                loading="eager"
                alt=""
                src="{{ asset('images/image-3@2x.png')}}"
            />

            <div class="s-i-e-r-r-a-h-o-t-e-l-l-o-g-o">
                <img
                class="image-4-icon"
                loading="eager"
                alt=""
                src="{{asset('images/image-4@2x.png') }}"
                />
            </div>
            </div>
        </div>
        </div>
    </section>
    <section class="header-frame1">
        <button class="frame-button" id="prevBtn">
            <div class="frame-child2"></div>
            <div class="previous">Previous</div>
        </button>
        <button class="next-button2" id="nextBtn">
            <div class="next-button-child"></div>
            <div class="next">Next</div>
        </button>

        <div class="content-container">
            <div data-for-switch="standardRoom" class="text-frame content-container">
                <div class="room-image-container">
                    <div class="image-button">
                        <img class="img-fluid float-left image-height" src="{{asset('images/image-1@2x.png')}}" alt="">

                    </div>
                </div>
                <div class="group-parent">
                    <div class="group">
                      <div class="text">
                        <div class="standard-room-parent">
                          <h1 class="standard-room">Standard Room</h1>
                          <div class="person-parent">
                            <div class="person">
                              <div class="rm200">RM200</div>
                              <div class="size-parent">
                                <div class="size">
                                  <ul class="size1">
                                    <li>Size</li>
                                  </ul>
                                </div>
                                <div class="capacity">
                                  <ul class="capacity1">
                                    <li>Capacity</li>
                                  </ul>
                                </div>
                                <div class="bed">
                                  <ul class="bed1">
                                    <li>Bed</li>
                                  </ul>
                                </div>
                                <div class="services">
                                  <ul class="services1">
                                    <li>Services</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="book-now-button">
                              <div class="next-button1">
                                <div class="day">/ Day</div>
                              </div>
                              <div class="ft-parent">
                                <div class="ft">: 30 ft</div>
                                <div class="person1">: 3-4 Person</div>
                                <div class="king-beds">: King Beds</div>
                                <div class="wifi-televion-bathroom">
                                  : Wifi, Televion, Bathroom
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a class="remove-text-decoration" href="{{ url('rooms') }}">
                            <button class="empty-frames">
                                <b class="book-now1">Book Now</b>
                            </button>
                        </a>
                      </div>
                    </div>
                  </div>
            </div>

            <div data-for-switch="deluxeRoom" class="text-frame">
                <div class="room-image-container">
                    <img class="img-fluid float-left image-height" src="{{asset ('images/frame-261@2x.png') }}">
                </div>
                <div class="group-parent">
                    <div class="group">
                      <div class="text">
                        <div class="standard-room-parent">
                          <h1 class="standard-room">Deluxe Room</h1>
                          <div class="person-parent">
                            <div class="person">
                              <div class="rm200">RM350</div>
                              <div class="size-parent">
                                <div class="size">
                                  <ul class="size1">
                                    <li>Size</li>
                                  </ul>
                                </div>
                                <div class="capacity">
                                  <ul class="capacity1">
                                    <li>Capacity</li>
                                  </ul>
                                </div>
                                <div class="bed">
                                  <ul class="bed1">
                                    <li>Bed</li>
                                  </ul>
                                </div>
                                <div class="services">
                                  <ul class="services1">
                                    <li>Services</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="book-now-button">
                              <div class="next-button1">
                                <div class="day">/ Day</div>
                              </div>
                                <div class="ft-parent">
                                    <div class="ft">: 45 ft</div>
                                    <div class="person1">: 3-4 Person</div>
                                    <div class="king-beds">: King Beds</div>
                                    <div class="wifi-televion-bathroom">
                                    : Wifi, Televion, Bathroom
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a class="remove-text-decoration" href="{{ url('rooms') }}">
                            <button class="empty-frames">
                                <b class="book-now1">Book Now</b>
                            </button>
                        </a>
                      </div>
                    </div>
                </div>
            </div>

            <div data-for-switch="familyRoom" class="text-frame">
                <div class="room-image-container">
                    <img class="img-fluid float-left image-height" src="{{asset ('images/frame-262@2x.png') }}">
                </div>
                <div class="group-parent">
                    <div class="group">
                    <div class="text">
                        <div class="standard-room-parent">
                        <h1 class="standard-room">Family Room</h1>
                        <div class="person-parent">
                            <div class="person">
                            <div class="rm200">RM450</div>
                            <div class="size-parent">
                                <div class="size">
                                <ul class="size1">
                                    <li>Size</li>
                                </ul>
                                </div>
                                <div class="capacity">
                                <ul class="capacity1">
                                    <li>Capacity</li>
                                </ul>
                                </div>
                                <div class="bed">
                                <ul class="bed1">
                                    <li>Bed</li>
                                </ul>
                                </div>
                                <div class="services">
                                <ul class="services1">
                                    <li>Services</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                            <div class="book-now-button">
                            <div class="next-button1">
                                <div class="day">/ Day</div>
                            </div>
                                <div class="ft-parent">
                                    <div class="ft">: 60 ft</div>
                                    <div class="person1">: 5-6 Person</div>
                                    <div class="king-beds">: Queen Beds</div>
                                    <div class="wifi-televion-bathroom">
                                    : Wifi, Televion, Bathroom
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a class="remove-text-decoration" href="{{ url('rooms') }}">
                            <button class="empty-frames">
                                <b class="book-now1">Book Now</b>
                            </button>
                        </a>
                    </div>
                    </div>
                </div>
            </div>

            <div data-for-switch="seasideViewRoom" class="text-frame">
                <div class="room-image-container">
                    <img class="img-fluid float-left image-height" src="{{asset ('images/frame-260-1@2x.png') }}">
                </div>
                <div class="group-parent">
                    <div class="group">
                    <div class="text">
                        <div class="standard-room-parent">
                        <h1 class="standard-room">Seaside View Room</h1>
                        <div class="person-parent">
                            <div class="person">
                            <div class="rm200">RM340</div>
                            <div class="size-parent">
                                <div class="size">
                                <ul class="size1">
                                    <li>Size</li>
                                </ul>
                                </div>
                                <div class="capacity">
                                <ul class="capacity1">
                                    <li>Capacity</li>
                                </ul>
                                </div>
                                <div class="bed">
                                <ul class="bed1">
                                    <li>Bed</li>
                                </ul>
                                </div>
                                <div class="services">
                                <ul class="services1">
                                    <li>Services</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                            <div class="book-now-button">
                            <div class="next-button1">
                                <div class="day">/ Day</div>
                            </div>
                                <div class="ft-parent">
                                    <div class="ft">: 30 ft</div>
                                    <div class="person1">: 3-4 Person</div>
                                    <div class="king-beds">: King Beds</div>
                                    <div class="wifi-televion-bathroom">
                                    : Wifi, Televion, Bathroom
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <a class="remove-text-decoration" href="{{ url('rooms') }}">
                            <button class="empty-frames">
                                <b class="book-now1">Book Now</b>
                            </button>
                        </a>
                    </div>
                    </div>
                </div>
            </div>

        <div data-for-switch="treetopViewRoom" class="text-frame">
            <div class="room-image-container">
                <img class="img-fluid float-left image-height" src="{{asset ('images/frame-261-1@2x.png') }}">
            </div>
            <div class="group-parent">
                <div class="group">
                  <div class="text">
                    <div class="standard-room-parent">
                      <h1 class="standard-room">Treetop View Room</h1>
                      <div class="person-parent">
                        <div class="person">
                          <div class="rm200">RM340</div>
                          <div class="size-parent">
                            <div class="size">
                              <ul class="size1">
                                <li>Size</li>
                              </ul>
                            </div>
                            <div class="capacity">
                              <ul class="capacity1">
                                <li>Capacity</li>
                              </ul>
                            </div>
                            <div class="bed">
                              <ul class="bed1">
                                <li>Bed</li>
                              </ul>
                            </div>
                            <div class="services">
                              <ul class="services1">
                                <li>Services</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="book-now-button">
                          <div class="next-button1">
                            <div class="day">/ Day</div>
                          </div>
                            <div class="ft-parent">
                                <div class="ft">: 30 ft</div>
                                <div class="person1">: 3-4 Person</div>
                                <div class="king-beds">: King Beds</div>
                                <div class="wifi-televion-bathroom">
                                : Wifi, Televion, Bathroom
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <a class="remove-text-decoration" href="{{ url('rooms') }}">
                        <button class="empty-frames">
                            <b class="book-now1">Book Now</b>
                        </button>
                    </a>
                  </div>
                </div>
            </div>
        </div>

        <div data-for-switch="campingRoom" class="text-frame">
            <div class="room-image-container">
                <img class="img-fluid float-left image-height" src="{{asset ('images/frame-262-1@2x.png') }}">
            </div>
            <div class="group-parent">
                <div class="group">
                  <div class="text">
                    <div class="standard-room-parent">
                      <h1 class="standard-room">Camping Room</h1>
                      <div class="person-parent">
                        <div class="person">
                          <div class="rm200">RM350</div>
                          <div class="size-parent">
                            <div class="size">
                              <ul class="size1">
                                <li>Size</li>
                              </ul>
                            </div>
                            <div class="capacity">
                              <ul class="capacity1">
                                <li>Capacity</li>
                              </ul>
                            </div>
                            <div class="bed">
                              <ul class="bed1">
                                <li>Bed</li>
                              </ul>
                            </div>
                            <div class="services">
                              <ul class="services1">
                                <li>Services</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="book-now-button">
                          <div class="next-button1">
                            <div class="day">/ Day</div>
                          </div>
                            <div class="ft-parent">
                                <div class="ft">: 25 ft</div>
                                <div class="person1">: 3-4 Person</div>
                                <div class="king-beds">: Queen Beds</div>
                                <div class="wifi-televion-bathroom">
                                : Wifi, Televion, Bathroom
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <a class="remove-text-decoration" href="{{ url('rooms') }}">
                        <button class="empty-frames">
                            <b class="book-now1">Book Now</b>
                        </button>
                    </a>
                  </div>
                </div>
            </div>
        </div>
        </div>

    </section>
    <section class="frame-group">
        <div class="image-5-parent">
        <img
            class="image-5-icon"
            loading="eager"
            alt=""
            src="{{ asset('images/image-5@2x.png')}}"
        />

        <div class="image">
            <div class="frame-container">
                <div class="testimonials-parent">
                    <div class="testimonials">TESTIMONIALS</div>
                    <h1 class="our-guests-love">Our Guests Love Us</h1>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="robert-downey">
                            <div class="my-experience-at">
                            “My experience at the Sierra Hotel was exceptional and I
                            highly recommend it to anyone looking for a comfortable and
                            affordable stay with great services and facilities. I will
                            definitely be returning on my next trip. Thank you, Sierra
                            Hotel, for a wonderful stay!”
                            </div>
                            <div class="frame-div">
                            <img
                                class="group-icon"
                                loading="eager"
                                alt=""
                                src="{{ asset('images/group-6.svg')}}"
                            />

                            <div class="contact-us-form">
                                <div class="robert-downey1">Robert Downey</div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="robert-downey">
                            <div class="my-experience-at">
                            “I recently had the pleasure of staying at Sierra Hotel and I must say,
                            it exceeded all of my expectations. From the moment I arrived, I was impressed by the affordable price for such a high-quality hotel.
                            The accommodations were top-notch, with comfortable beds and all the necessary amenities. Thank you for an unforgettable stay!”
                            </div>
                            <div class="frame-div">
                            <img
                                class="group-icon"
                                loading="eager"
                                alt=""
                                src="{{ asset('images/group-6.svg')}}"
                            />

                            <div class="contact-us-form">
                                <div class="robert-downey1">Chris Evans</div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <div class="rectangle-parent2">
        <div class="frame-child3"></div>
        <div class="follow-us-buttons">
            <h1 class="contact-us-now">Contact Us Now!</h1>
            <div class="contact-12-345-678-9999">
            Contact (+60) 12-345 6789 to book directly or for advice
            </div>
        </div>
        <a class="remove-text-decoration" href="{{ url('contact') }}">
            <button class="footer-contact-frame">
                <b class="contact-now">Contact Now</b>
            </button>
        </a>
        </div>
    </section>
    @include('include.footer')

    <script src="owlcarousel/owl.carousel.min.js"></script>

    <script src="{{ asset('js/backtotop.js') }}"></script>
    <script src="{{ asset('js/horizontalslider.js') }}"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    </script>
    </div>
</body>
</html>
