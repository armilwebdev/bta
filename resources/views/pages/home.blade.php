@extends('layouts.app')
@section('content')
<div id="section1">
    <!-- <div class="lightwhite social-media-section d-none d-md-block">
        <div class="container" style="text-align:right;">
            <img src="images/fb-icon.png">
            <img src="images/ig-icon.png">
            <img src="images/linkedin-icon.png">
            <img src="images/youtube-icon.png">
            <img src="images/twitter-icon.png">
        </div>
    </div> -->
    
    
    <div class="company-name-space">
        <div class="company-name">
            B<b>+</b>T<div class="fading-line"></div><br>
            ARQUITEKTOS
        </div>
    </div>

    <a href="#section2" class="down-link"><i class="material-icons down-icon">keyboard_arrow_down</i></a>
    </div>

    <div class="section2 container" id="section2">
    <div class="row quote-row">
        <div class="col-sm-12">
            <center><div class="quote">"Producing innovative design solutions"</div></center>
            <p class="about_page">
                B+T Arquitektos is a Manila based architecture and design office with extensive experience in 
                designing and managing projects from initial concept through construction. The studio promotes 
                innovative design solutions which are culturally progressive and environmentally responsible. 
                Built work includes restaurants, private residences, public spaces, and government offices.
            </p>
        </div>
        <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                  <img src="/images/jihan.jpg" class="main-round-img" style="height:170px; width:170px; border:1px solid black; margin: 0 auto; border-radius:50%;">
                  <h5 class="card-title">Jihan Earl Aeneas Balagot</h5>
                <p class="card-text"> Principal Architect | Co-Founder | B+T Arquitektos</p>
              </div>
            </div>
          </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
          <img src="/images/mar.jpg" class="main-round-img" style="height:170px; width:170px; border:1px solid black; margin: 0 auto; border-radius:50%;">
          <h5 class="card-title">Mar Kenneth Tabladas</h5>
        <p class="card-text"> Principal Architect | Co-Founder | B+T Arquitektos</p>
      </div>
    </div>
  </div>

</div>
</div>

<!-- SECTION 3 -->

<div id="section3" class="container">

    <div class="row">
        <div class="col-12 col-lg-6">
        <p class="img-title"><a href="#">MLQ Market</a></p>
        <p class="img-desc">
            Combining the bounty of Asia's wet markets with immaculate hygiene standards, the MLQ Wet and Dry Market is something to behold.
            Embracing over 400+ stalls, the market is spacious and brightly lit, allowing shoppers to easily cruise for seafood, vegetables, sweets and other food.
        </p>
        </div>
        <div class="col-12 col-lg-6 img1" data-echo="img/photo.jpg">
        </div>
    </div>
</div>

<div id="section4" class="container section4">
    <div class="row">
        <div class="col-12 col-lg-6">
            <p class="img-title"><a href="#">Residential Home</a></p>
        <p class="img-desc">
        Proposed Renovation of 2-Storey residential w/ attic 350sq.m.        </p>
        </div>
        <div class="col-12 col-lg-6 img2">
        </div>
    </div>
</div>
@endsection