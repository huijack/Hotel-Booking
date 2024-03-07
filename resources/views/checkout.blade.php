<!DOCTYPE html>
<html lang="en">
    @include('include.header')
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<body>
    <div class="checkout">
        <div class="frame-parent24">
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
          <div class="frame-parent27">
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
          </div>
        <form class="form-checkout-container" action="{{ route('checkout.post') }}" method="POST">
            @csrf

            @if (Session::has('success'))
                <div class="alert alert-success alert-width" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if (Session::has('error'))
                <div class="alert alert-danger alert-width" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif

            <section class="billingdetailsframe">
            <div class="firstnameframe">
                <div class="companynameframe">
                    <div class="inputframes">
                        <h1 class="billing-details">billing Details</h1>
                        <div class="form-gap">
                            <div class="d-flex custom-gap">
                                <div class="form-group name-group">
                                    <label class="checkout-label" for="first-name">First Name<span class="star-red">*</span>
                                    </label>
                                    <input type="text" class="phone-email-group-child form-control" id="first-name" name="first-name" required>
                                </div>
                                <div class="form-group name-group">
                                    <label class="checkout-label" for="last-name">Last Name<span class="star-red">*</span></label>
                                    <input type="text" class="phone-email-group-child form-control" id="last-name" name="last-name" required>
                                </div>
                            </div>
                            <div class="d-flex custom-gap">
                                <div class="form-group group-big">
                                    <label class="checkout-label" for="company-name">Company Name</label>
                                    <input type="text" class="phone-email-group-big form-control" id="company-name" name="company-name">
                                </div>
                            </div>
                            <div class="d-flex custom-gap">
                                <div class="form-group group-big">
                                    <label class="checkout-label" for="countries-dropdown">Country<span class="star-red">*</span></label>
                                    <select name="countries" id="countries-dropdown" class="phone-email-group-big form-control" required>
                                        <option value="">Select a Country</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex custom-gap">
                                <div class="form-group group-big">
                                    <label class="checkout-label" for="address">Address<span class="star-red">*</span></label>
                                    <div class="input-address">
                                        <input type="text" class="phone-email-group-big form-control" id="address" name="address" required>
                                        <input type="text" class="phone-email-group-big form-control" id="address2" name="address2" placeholder="Apartment, suite, unit etc. (optional)">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex custom-gap">
                                <div class="form-group group-big">
                                    <label class="checkout-label" for="province">Province<span class="star-red">*</span></label>
                                    <input type="text" class="phone-email-group-big form-control" id="province" name="province" required>
                                </div>
                            </div>
                            <div class="d-flex custom-gap">
                                <div class="form-group group-big">
                                    <label class="checkout-label" for="postcode">Postcode<span class="star-red">*</span></label>
                                    <input type="text" class="phone-email-group-big form-control" id="postcode" name="postcode" required>
                                </div>
                            </div>
                            <div class="d-flex custom-gap">
                                <div class="form-group name-group">
                                    <label class="checkout-label" for="phone">Phone<span class="star-red">*</span></label>
                                    <input type="text" class="phone-email-group-child form-control" id="phone" name="phone" required>
                                </div>
                                <div class="form-group name-group">
                                    <label class="checkout-label" for="email">Email<span class="star-red">*</span></label>
                                    <input type="email" class="phone-email-group-child form-control" id="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="additional-information-parent">
                            <h1 class="additional-information">Additional Information</h1>
                            <div class="follow-us-label">
                                <div class="additional-info-group form-group">
                                    <label for="additional-info" class="checkout-label">Order Notes</label>
                                    <textarea
                                    class="notes-group form-control"
                                    id="additional-info"
                                    name="additional-info"
                                    rows="4"
                                    placeholder="Notes about your order, e.g. Special Notes for Delivery"
                                    ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="orderframe">
                        <div class="submit-order-text">
                            <div class="add-info-frame">
                            <h1 class="your-order">Your Order</h1>
                            <div class="notes-for-del-text">
                                <div class="payment-form-frame">
                                <div class="product">Product</div>
                                <div class="total">Total</div>
                                </div>
                                <div class="dates-accommodation">
                                <div class="total-cost-rect">
                                    <div class="room-reservation">Room Reservation</div>
                                    <div class="order-summary-frame">
                                    <div class="dates">Dates:
                                        <input name="date_check_in" type="hidden" value="{{ $dateCheckIn }}">
                                        <input name="date_check_out" type="hidden" value="{{ $dateCheckOut }}">
                                        <div class="date-check ml-1">
                                            {{ date('d/m/Y', strtotime($dateCheckIn)) }} - {{ date('d/m/Y', strtotime($dateCheckOut)) }} ({{ $numberOfDays }} days)
                                        </div>
                                    </div>
                                    <div class="accommodation">Accommodation:
                                        <input name="room_type" type="hidden" value="{{ $room->type }}">
                                        <input name="room_quantity" type="hidden" value="{{ $roomQuantity }}">
                                        <input name="total_price" type="hidden" value="{{ $totalPrice }}">
                                        <input name="adults" type="hidden" value="{{ $adults }}">
                                        <input name="children" type="hidden" value="{{ $children }}">
                                        <div class="room-type">
                                            <div>
                                                {{ $room->type }} * {{ $roomQuantity }}
                                            </div>
                                            <div>
                                                RM{{ $totalPrice }}
                                            </div>
                                        </div>

                                    </div>
                                    </div>
                                </div>
                                <div class="new-order-button">
                                    <div class="total1">
                                        <div>
                                            Total
                                        </div>
                                        <div>
                                            RM{{ $totalPrice }}
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <button type="submit" class="contacts-and-email-frame">
                                <b class="submit-order">Submit Order</b>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </form>

          @include('include.footer')
      </div>

    <script>
        // Fetch countries from REST Countries API
        fetch('https://restcountries.com/v3.1/all')
            .then(response => response.json())
            .then(data => {
                // Extract country names and codes
                const countries = data.map(country => ({
                    name: country.name.common,
                    code: country.cca2
                }));

                countries.sort((a, b) => a.name.localeCompare(b.name));

                // Populate the select dropdown
                const dropdown = document.getElementById('countries-dropdown');
                countries.forEach(country => {
                    const option = document.createElement('option');
                    option.text = country.name;
                    option.value = country.code;
                    dropdown.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching countries:', error));
    </script>
</body>
</html>
