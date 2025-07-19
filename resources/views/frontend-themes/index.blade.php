@extends('layouts.forntend')


@section('content')

  <div class="main-banner custom-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
              <div class="row">
                <div class="col-lg-12">
                  <h2>Fast & Reliable Mobile & Laptop Repairs</h2>
                  <p>Having issues with your smartphone or laptop? We offer expert repair services for all brands with genuine parts, quick turnaround time, and affordable prices.</p>
                </div>
                <div class="col-lg-12">
                  <div class="white-button first-button scroll-to-section">
                    <a href="#contact">Mobile Repair Quote <i class="fas fa-mobile-alt"></i></a>
                  </div>
                  <div class="white-button scroll-to-section">
                    <a href="#contact">Laptop Repair Quote <i class="fas fa-laptop"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="{{ asset('assets-fornt/images/slider-dec.png') }}" alt="Repair Image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  
<div id="services" class="services section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
          <h4>Our <em>Repair Services</em></h4>
          <img src="{{ asset('assets-fornt/images/heading-line-dec.png') }}" alt="">
          <p>We provide professional repair services for mobiles and laptops, including screen replacement, battery issues, software fixes, and hardware upgrades.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="service-item first-service">
          <div class="icon"></div>
          <h4>Mobile Repair</h4>
          <p>Screen cracked? Charging issues? We fix all types of mobile problems quickly and affordably.</p>
          <div class="text-button">
            <a href="#contact">Read More <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item second-service">
          <div class="icon"></div>
          <h4>Laptop Repair</h4>
          <p>From slow performance to hardware failure, our experts are ready to bring your laptop back to life.</p>
          <div class="text-button">
            <a href="#contact">Read More <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item third-service">
          <div class="icon"></div>
          <h4>Accessories & Parts</h4>
          <p>We stock genuine mobile and laptop accessories including chargers, covers, and replacement parts.</p>
          <div class="text-button">
            <a href="#contact">Read More <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item fourth-service">
          <div class="icon"></div>
          <h4>24/7 Support</h4>
          <p>Facing an emergency? Our team is here to help you any time, any day.</p>
          <div class="text-button">
            <a href="#contact">Read More <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  
<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="section-heading">
          <h4>About <em>Our Repair Shop</em></h4>
          <img src="{{ asset('assets-fornt/images/heading-line-dec.png') }}" alt="">
          <p>We are experts in mobile and laptop repairing. With years of experience, our goal is to provide high-quality service and customer satisfaction.</p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="box-item">
              <h4><a href="#">Common Mobile Issues</a></h4>
              <p>Screen damage, battery drain, network issues, and more.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box-item">
              <h4><a href="#">Laptop Troubleshooting</a></h4>
              <p>Blue screens, overheating, slow boot, and RAM upgrades.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box-item">
              <h4><a href="#">Quick Diagnosis</a></h4>
              <p>We offer quick check-ups and instant repair quotes.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box-item">
              <h4><a href="#">Buy & Sell Devices</a></h4>
              <p>Get best deals on refurbished phones and laptops.</p>
            </div>
          </div>
          <div class="col-lg-12">
            <p>Trust our skilled technicians to get your device working like new again. We care about your satisfaction and convenience.</p>
            <div class="gradient-button">
              <a href="#contact">Book a Repair</a>
            </div>
            <span>*No Booking Charges</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="right-image">
          <img src="{{ asset('assets-fornt/images/about-right-dec.png') }}" alt="Mobile & Laptop Service">
        </div>
      </div>
    </div>
  </div>
</div>

<div id="pricing" class="pricing-tables">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="section-heading">
          <h4>Our Affordable <em>Repair Packages</em></h4>
          <img src="{{ asset('assets-fornt/images/heading-line-dec.png') }}" alt="">
          <p>Choose a service plan that fits your mobile or laptop repair needs. Fast, reliable, and budget-friendly solutions for every customer.</p>
        </div>
      </div>

      <!-- Basic Repair Plan -->
      <div class="col-lg-4">
        <div class="pricing-item-regular">
          <span class="price">₹299</span>
          <h4>Basic Mobile Service</h4>
          <div class="icon">
            <img src="{{ asset('assets-fornt/images/pricing-table-01.png') }}" alt="">
          </div>
          <ul>
            <li>Screen Cleaning</li>
            <li>Battery Check</li>
            <li class="non-function">Spare Replacement</li>
            <li class="non-function">Software Upgrade</li>
            <li class="non-function">Pickup & Drop</li>
            <li class="non-function">24x7 Support</li>
          </ul>
          <div class="border-button">
            <a href="#contact">Book Now</a>
          </div>
        </div>
      </div>

      <!-- Advanced Repair Plan -->
      <div class="col-lg-4">
        <div class="pricing-item-pro">
          <span class="price">₹899</span>
          <h4>Advanced Laptop Service</h4>
          <div class="icon">
            <img src="{{ asset('assets-fornt/images/pricing-table-01.png') }}" alt="">
          </div>
          <ul>
            <li>Hardware Check</li>
            <li>Virus Removal</li>
            <li>Software Optimization</li>
            <li>Fan & Cooling Clean-up</li>
            <li class="non-function">Pickup & Drop</li>
            <li class="non-function">Extended Warranty</li>
          </ul>
          <div class="border-button">
            <a href="#contact">Book Now</a>
          </div>
        </div>
      </div>

      <!-- Premium Repair Plan -->
      <div class="col-lg-4">
        <div class="pricing-item-regular">
          <span class="price">₹1499</span>
          <h4>Premium Care Plan</h4>
          <div class="icon">
            <img src="{{ asset('assets-fornt/images/pricing-table-01.png') }}" alt="">
          </div>
          <ul>
            <li>Full Device Diagnosis</li>
            <li>Spare Parts Replacement</li>
            <li>Pickup & Drop</li>
            <li>1-Month Service Warranty</li>
            <li>24x7 Priority Support</li>
            <li>Free Follow-up Checkup</li>
          </ul>
          <div class="border-button">
            <a href="#contact">Book Now</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection
