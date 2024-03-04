<!DOCTYPE html>
<html lang="en">
    @include('include.header')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<body>
    <div class="contact3">
      <section class="main-f-r-a-m-e">
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
        <header class="home-rooms-about-us-contact-fr">
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
                    <a href="{{ url('aboutus') }}">
                        About Us
                    </a>
                </div>
                <div class="contact">
                    <a href="#" class="active">
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
      <section class="contact-area">
        <div class="container-frame1">
          <div class="container-frame-item"></div>
          <img
            class="image-7-icon2"
            loading="eager"
            alt=""
            src="{{ asset('images/section-image.png') }}"
          />

          <h1 class="contact5">CONTACT</h1>
          <h3 class="home-contact-container">
            <span>
              <span class="home7">Home</span>
              <b> </b>
              <span class="span2">&gt;</span>
              <b> </b>
              <span class="contact6">Contact</span>
            </span>
          </h3>
        </div>
      </section>
      <div class="login-signup-label">
        <div class="subframe">
          <div class="group-frame">
            <h3 class="contact-us">Contact Us</h3>
            <h1 class="leave-message-here">Leave Message Here</h1>
          </div>
          <div class="group1">
            <form action="{{ route('contact.post') }}" class="form-checkout-container name-phone-group" method="POST">
                @csrf

                @if (Session::has('success'))
                    <div class="contact-alert-container">
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                @endif

                @if (Session::has('error'))
                    <div class="contact-alert-container">
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    </div>
                @endif

                <div class="contact-row">
                    <div class="contact-group">
                        <input name="name" type="text" class="rectangle-parent3 form-control" placeholder="Name*" required>
                    </div>
                    <div class="contact-group">
                        <input name="nric" type="text" class="rectangle-parent3 form-control" placeholder="NRIC / Passport Number Without -*" required>
                    </div>
                </div>
                <div class="contact-row">
                    <div class="contact-group">
                        <input name="phone" type="text" class="rectangle-parent3 form-control" placeholder="Phone*" required>
                    </div>
                    <div class="contact-group">
                        <input name="email" type="text" class="rectangle-parent3 form-control" placeholder="Email*" required>
                    </div>
                </div>
                <div class="contact-row">
                    <div class="contact-group">
                        <textarea
                        class="form-frame form-control"
                        placeholder="Message*"
                        rows="5"
                        cols="{42}"
                        name="message"
                      ></textarea>
                    </div>
                </div>

              <div class="vector-icon12">
                <div class="social-media-frame">
                  <div class="submit-button">
                    <input class="rectangle-input" type="checkbox" required/>

                    <div class="leave-your-details">
                      Leave your details and we’ll reach out soonest.
                    </div>
                  </div>
                  <div class="submit-button">
                    <input class="rectangle-input" type="checkbox" required/>
                    <div class="leave-your-details">
                        I hereby consent to the collection, use, and disclosure of my personal information in accordance with the Privacy Policy.
                    </div>
                  </div>
                </div>
              </div>
              <div class="button-submit-container">
                <button type="submit" class="header-frame3">
                    <div class="submit">SUBMIT</div>
                  </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      @include('include.footer')
    </div>
</body>
</html>
