<!DOCTYPE html>
<html lang="en">
    @include('include.header')
    <link rel="stylesheet" href="{{ asset('css/about-us.css' )}}">
<body>
    <div class="about-us3">
        <section class="trang-ch-parent">
            <div class="day-label-parent">
                <div class="day-label">
                    <div class="person-info">
                    <a class="top-link" href="#">
                        <div class="telephonefill">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="bathroom-icon">(603) 1234 5678</div>
                    </a>
                    </div>
                    <div class="testimonials-section">
                    <a class="top-link" href="#">
                        <i class="fa-regular fa-envelope"></i>
                        <div class="infosierragmailcom">info.sierra@gmail.com</div>
                    </a>
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
          <header class="lionshopcom">
            <div class="s-i-e-r-r-a-logo">
                <div class="sierra-hotel-logo2">SIERRA HOTEL LOGO</div>
            </div>
            <div class="follow-us">
                <div class="home1">
                    <a href="{{ url('home') }}">
                        Hotel
                    </a>
                </div>
                <div class="rooms">
                    <a href="{{ url('rooms') }}">
                        Rooms
                    </a>
                </div>
                <div class="about-us">
                    <a href="#" class="active">
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
                <a href="#" class="remove-text-decoration read-more-hover">
                    <button class="contact-parent">
                        <div class="book-now">BOOK NOW</div>
                    </button>
                </a>
            </div>
        </header>
        </section>
        <section class="about-us-container">
          <div class="image-frame1">
            <div class="image-frame-child"></div>
            <img
              class="image-7-icon1"
              loading="eager"
              alt=""
              src="{{ asset('images/section-image.png') }}"
            />

            <h1 class="about-us5">ABOUT US</h1>
            <div class="home-about-container">
              <span>
                <span class="home5">Home</span>
                <b> </b>
                <span class="span1">&gt;</span>
                <b> </b>
                <span class="about-us6">About Us</span>
              </span>
            </div>
          </div>
        </section>
        <section class="welcome-frame">
          <div class="feature-frames">
            <div class="feature-frames1">
              <h1 class="welcome-to-sierra1">Welcome to Sierra.</h1>
              <div class="built-in-2005">
                Built in 2005 during the Vision 2001 - 2010, this hotel is located
                in the center of Kuala Lumpur, with easy access to the city’s
                tourist attractions. It offers tastefully decorated rooms.
              </div>
              <div class="indulge-in-exquisite">
                Indulge in exquisite dining, sustainable practices, and
                unforgettable experiences. Discover why Sierra Hotel is the
                premier choice for discerning travelers seeking unparalleled
                hospitality.
              </div>
            </div>
            <img
              class="image-8-icon"
              loading="eager"
              alt=""
              src="{{ asset('images/image-8@2x.png') }}"
            />
          </div>
        </section>
        <section class="lifestyle-frame">
          <div class="item-frames">
            <div class="sunglasses">
              <img
                class="item-frames-icon"
                loading="eager"
                alt=""
                src="{{ asset('images/vector-21.svg') }}"
              />
            </div>
            <div class="relaxation">Relaxation</div>
          </div>
          <div class="item-frames1">
            <div class="frame-parent19">
              <div class="transportation-wrapper">
                <div class="transportation">Transportation</div>
              </div>
              <img
                class="car-icon"
                loading="eager"
                alt=""
                src="{{ asset('images/car@2x.png') }}"
              />
            </div>
          </div>
          <div class="item-frames2">
            <div class="controller">
              <div class="vector-parent2">
                <img class="vector-icon7" alt="" src="{{ asset('images/vector-3.svg') }}" />

                <img
                  class="item-frames-icon1"
                  loading="eager"
                  alt=""
                  src="{{ asset('images/vector-41.svg') }}"
                />
              </div>
            </div>
            <div class="entertainment">Entertainment</div>
          </div>
          <div class="item-frames3">
            <button class="restaurant-wrapper">
              <img
                class="restaurant-icon"
                alt=""
                src="{{ asset('images/restaurant@2x.png') }}"
              />
            </button>
            <div class="restaurant">Restaurant</div>
          </div>
          <div class="item-frames4">
            <img
              class="vector-icon8"
              loading="eager"
              alt=""
              src="{{ asset('images/vector-51.svg') }}"
            />

            <div class="pool-bar">Pool & Bar</div>
          </div>
        </section>
        <section class="contact-frame">
          <div class="our-gallery-frame">
            <div class="our-gallery">OUR GALLERY</div>
            <div class="image-container">
              <div class="image-frames">
                <div class="individual-images">
                  <img
                    class="image-10-icon"
                    loading="eager"
                    alt=""
                    src="{{ asset('images/image-10@2x.png') }}"
                  />

                  <div class="individual-images1">
                    <img
                      class="image-12-icon"
                      loading="eager"
                      alt=""
                      src="{{ asset('images/image-12@2x.png') }}"
                    />

                    <img
                      class="image-14-icon"
                      loading="eager"
                      alt=""
                      src="{{ asset('images/image-14@2x.png') }}"
                    />
                  </div>
                </div>
                <div class="individual-images2">
                  <img
                    class="image-9-icon"
                    alt=""
                    src="{{ asset('images/image-9@2x.png') }}"
                  />
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="contact-section">
          <div class="contact-call-to-action">
            <div class="contact-call-to-action-child"></div>
            <div class="contact-info1">
              <h2 class="contact-us-now1">Contact Us Now!</h2>
              <div class="contact-12-345-678-99991">
                Contact (+60) 12-345 6789 to book directly or for advice
              </div>
            </div>
            <a class="remove-text-decoration" href="{{ url('contact') }}">
                <button class="email-frame">
                    <b class="contact-now1">Contact Now</b>
                </button>
            </a>

          </div>
        </section>
        @include('include.footer')

        <script src="{{ asset('js/backtotop.js') }}"></script>
        <script src="{{ asset('js/backtotop.js') }}"></script>
    </div>
</body>
</html>
