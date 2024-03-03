<!DOCTYPE html>
<html lang="en">
    @include('include.header')
    <link rel="stylesheet" href="{{ asset('css/rooms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<body>
    <div class="rooms1">
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
        <header class="room-type-container">
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
                    <a href="#" class="active">
                        Rooms
                    </a>
                </div>
                <div class="about-us">
                    <a href="#">
                        About Us
                    </a>
                </div>
                <div class="contact">
                    <a href="#">
                        Contact
                    </a>
                </div>
            </div>
          <div class="search1"></div>
            <div class="next-button">
                <a href="#" class="remove-text-decoration read-more-hover">
                    <button class="contact-parent">
                        <div class="book-now">BOOK NOW</div>
                    </button>
                </a>
            </div>
        </header>

        <section class="contact-email-section">
          <div class="roomimagecontainer">
            <div class="roomimagecontainer-child"></div>
            <img
              class="image-7-icon"
              loading="eager"
              alt=""
              src="{{ asset('images/section-image.png') }}"
            />

            <h1 class="our-room">OUR ROOM</h1>
            <h3 class="home-rooms-container">
              <span>
                <span class="home3">Home</span>
                <b> </b>
                <span class="span">&gt;</span>
                <b> </b>
                <span class="rooms3">Rooms</span>
              </span>
            </h3>
          </div>
        </section>

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <section class="framegroup">
          <div class="frame-parent2">
            <img
              class="frame-icon"
              loading="eager"
              alt=""
              src="{{ asset('images/frame-260@2x.png') }}"
            />

            <div class="standard-room-group">
              <h1 class="standard-room1">Standard Room</h1>
              <div class="sizeoptions">
                <div class="capacityselection">
                  <div class="rm2001">RM200</div>
                  <div class="roomtypeday">
                    <div class="day1">/ Day</div>
                  </div>
                </div>
                <div class="roomdetails-parent">
                  <div class="roomdetails">
                    <div class="size-group">
                      <div class="size2">Size</div>
                      <div class="capacity2">Capacity</div>
                      <div class="bed2">Bed</div>
                      <div class="services2">Services</div>
                    </div>
                    <div class="ft-group">
                      <div class="ft1">: 30 ft</div>
                      <div class="person2">: 3-4 Person</div>
                      <div class="king-bed">: 1 King Bed</div>
                      <div class="wifi-televion-bathroom1">
                        : Wifi, Televion, Bathroom
                      </div>
                    </div>
                  </div>
                  <div class="room-selection">
                    <button type="button" class="book-now-frame" data-toggle="modal" data-target="#modalBookingRoom" data-room-type="Standard Room">
                        <b class="book-now3">Book Now</b>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="frame-parent3">
            <div class="frame-wrapper">
              <img
                class="frame-child5"
                loading="eager"
                alt=""
                src="{{ asset('images/frame-261@2x.png') }}"
              />
            </div>
            <div class="deluxe-room-parent">
              <h1 class="deluxe-room">Deluxe Room</h1>
              <div class="frame-parent4">
                <div class="rm350-parent">
                  <div class="rm350">RM350</div>
                  <div class="day-wrapper">
                    <div class="day2">/ Day</div>
                  </div>
                </div>
                <div class="frame-parent5">
                  <div class="frame-parent6">
                    <div class="size-container">
                      <div class="size3">Size</div>
                      <div class="capacity3">Capacity</div>
                      <div class="bed3">Bed</div>
                      <div class="services3">Services</div>
                    </div>
                    <div class="ft-container">
                      <div class="ft2">: 45 ft</div>
                      <div class="person3">: 3-4 Person</div>
                      <div class="queen-bed">: 1 Queen Bed</div>
                      <div class="wifi-televion-bathroom2">
                        : Wifi, Televion, Bathroom
                      </div>
                    </div>
                  </div>
                  <div class="frame-wrapper1">
                    <button type="button" class="book-now-frame" data-toggle="modal" data-target="#modalBookingRoom" data-room-type="Deluxe Room">
                        <b class="book-now4">Book Now</b>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="frame-parent7">
            <img
              class="frame-child6"
              loading="eager"
              alt=""
              src="{{ asset('images/frame-262@2x.png') }}"
            />

            <div class="family-room-parent">
              <h1 class="family-room">Family Room</h1>
              <div class="frame-parent8">
                <div class="rm450-parent">
                  <div class="rm450">RM450</div>
                  <div class="day-container">
                    <div class="day3">/ Day</div>
                  </div>
                </div>
                <div class="frame-parent9">
                  <div class="size-parent1">
                    <div class="size4">Size</div>
                    <div class="capacity4">Capacity</div>
                    <div class="bed4">Bed</div>
                    <div class="services4">Services</div>
                  </div>
                  <div class="ft-parent1">
                    <div class="ft3">: 60 ft</div>
                    <div class="person4">: 5-6 Person</div>
                    <div class="queen-beds">: 2 Queen Beds</div>
                    <div class="wifi-televion-bathroom3">
                      : Wifi, Televion, Bathroom
                    </div>
                  </div>
                </div>
              </div>
              <div class="floor-plan-preview">
                <button type="button" class="book-now-frame" data-toggle="modal" data-target="#modalBookingRoom" data-room-type="Family Room">
                    <b class="book-now5">Book Now</b>
                </button>
              </div>
            </div>
          </div>
          <div class="frame-parent10">
            <img
              class="frame-child7"
              loading="eager"
              alt=""
              src="{{ asset('images/frame-260-1@2x.png') }}"
            />

            <div class="frame-wrapper2">
              <div class="campingroom-parent">
                <div class="campingroom">
                  <h1 class="seaside-view-room">Seaside View Room</h1>
                  <div class="treetopviewroom">
                    <div class="kingbed">
                      <div class="rm340">RM340</div>
                      <div class="wifitelevisionbathroom">
                        <div class="day4">/ Day</div>
                      </div>
                    </div>
                    <div class="sizelabel">
                      <div class="capacitylabel">
                        <div class="size5">Size</div>
                        <div class="capacity5">Capacity</div>
                        <div class="bed5">Bed</div>
                        <div class="services5">Services</div>
                      </div>
                      <div class="frame-container1">
                        <div class="ft4">: 30 ft</div>
                        <div class="person5">: 3-4 Person</div>
                        <div class="king-bed1">: 1 King Bed</div>
                        <div class="wifi-televion-bathroom4">
                          : Wifi, Televion, Bathroom
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="frame-wrapper3">
                  <button type="button" class="book-now-frame" data-toggle="modal" data-target="#modalBookingRoom" data-room-type="Seaside View Room">
                    <b class="book-now6">Book Now</b>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="frame-parent11">
            <div class="frame-wrapper4">
              <img
                class="frame-child8"
                loading="eager"
                alt=""
                src="{{ asset('images/frame-261-1@2x.png') }}"
              />
            </div>
            <div class="frame-wrapper5">
              <div class="frame-parent12">
                <div class="treetop-view-room-parent">
                  <h1 class="treetop-view-room">Treetop View Room</h1>
                  <div class="frame-parent13">
                    <div class="rm340-parent">
                      <div class="rm3401">RM340</div>
                      <div class="day-frame">
                        <div class="day5">/ Day</div>
                      </div>
                    </div>
                    <div class="frame-parent14">
                      <div class="size-parent2">
                        <div class="size6">Size</div>
                        <div class="capacity6">Capacity</div>
                        <div class="bed6">Bed</div>
                        <div class="services6">Services</div>
                      </div>
                      <div class="ft-parent2">
                        <div class="ft5">: 30 ft</div>
                        <div class="person6">: 3-4 Person</div>
                        <div class="king-bed2">: 1 King Bed</div>
                        <div class="wifi-televion-bathroom5">
                          : Wifi, Televion, Bathroom
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="frame-wrapper6">
                    <button type="button" class="book-now-frame" data-toggle="modal" data-target="#modalBookingRoom" data-room-type="Treetop View Room">
                        <b class="book-now7">Book Now</b>
                    </button>
                </div>
              </div>
            </div>
          </div>
          <div class="frame-parent15">
            <img
              class="frame-child9"
              loading="eager"
              alt=""
              src="{{ asset('images/frame-262-1@2x.png') }}"
            />

            <div class="frame-parent16">
              <div class="camping-room-parent">
                <h1 class="camping-room">Camping Room</h1>
                <div class="frame-parent17">
                  <div class="rm350-group">
                    <div class="rm3501">RM350</div>
                    <div class="capacity-label">
                      <div class="day6">/ Day</div>
                    </div>
                  </div>
                  <div class="services-label">
                    <div class="bed-type-label">
                      <div class="size7">Size</div>
                      <div class="capacity7">Capacity</div>
                      <div class="bed7">Bed</div>
                      <div class="services7">Services</div>
                    </div>
                    <div class="contact-email-icon">
                      <div class="ft6">: 25 ft</div>
                      <div class="person7">: 3-4 Person</div>
                      <div class="queen-bed1">: 1 Queen Bed</div>
                      <div class="wifi-televion-bathroom6">
                        : Wifi, Televion, Bathroom
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="frame-wrapper7">
                <button type="button" class="book-now-frame" data-toggle="modal" data-target="#modalBookingRoom" data-room-type="Camping Room">
                    <b class="book-now8">Book Now</b>
                </button>
              </div>
            </div>
          </div>
        </section>

        {{-- Modal --}}
        <div class="modal fade" id="modalBookingRoom" tabindex="-1" aria-labelledby="modalBookingRoomLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modalBookingRoomLabel">Book a Room</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form id="checkoutForm" action="{{ route('checkout') }}" method="GET">
                        @csrf

                        <div class="modal-body" role="document">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date-check-in">Check-in</label>
                                        <div class="input-group date">
                                            <input type="date" name="date_check_in" class="rectangle-parent form-control" id="date-check-in" required>
                                            <div class="frame-child"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date-check-out">Check-out</label>
                                        <div class="input-group date">
                                            <input type="date" name="date_check_out" class="rectangle-parent form-control" id="date-check-out" required>
                                            <div class="frame-child1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="room_type">Room Type</label>
                                        <select name="room_type" id="room_type" class="rectangle-parent1 form-control" required>
                                            <option value="Standard Room">Standard Room</option>
                                            <option value="Deluxe Room">Deluxe Room</option>
                                            <option value="Family Room">Family Room</option>
                                            <option value="Seaside View Room">Seaside View Room</option>
                                            <option value="Treetop View Room">Treetop View Room</option>
                                            <option value="Camping Room">Camping Room</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="room-quantity">Room Quantity</label>
                                        <select name="room_quantity" id="room-quantity" class="rectangle-parent1 form-control" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="adults">Adults</label>
                                        <select name="adults" id="adults" class="rectangle-parent1 form-control" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="children">Children</label>
                                        <select name="children" id="children" class="rectangle-parent1 form-control" required>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-green">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        @include('include.footer')

        <script src="{{ asset('js/roompreselect.js') }}"></script>
        {{-- <script>
            $(document).ready(function() {
                $('#room_type').on('change', function() {
                    var selectedRoomType = $(this).val();
                    $('#checkoutForm').attr('action', "{{ route('checkout', ['room_type' => '']) }}/" + selectedRoomType);
                });
            });
        </script> --}}
    </div>
</body>
</html>
