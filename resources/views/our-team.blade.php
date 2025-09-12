@extends('layouts.master')

@section('title', 'Home')

@section('content')
  <link rel="stylesheet" href="assets/css/our-team.css" />
<body>
  <!-- Loader -->
  <div id="ms-overlay">
    <div class="loader"></div>
  </div>

  <!-- Hero Banner Section -->
  <section class="team-hero">
    <div class="container">
      <h1>Meet Our Team</h1>
      <p>Our dedicated team is committed to delivering excellence and innovation. Meet the people driving our success and shaping the future of entrepreneurship in Malawi.</p>
    </div>
  </section>

  <!-- Team Section -->
  <section class="team-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="team-member">
            <img data-src="/assets/img/user/profile1.JPG" alt="Daniel Mvalo" class="lazy responsive-img" />
            <div class="team-member-content">
              <div class="name">Daniel Mvalo</div>
              <div class="title">CEO</div>
            </div>
            <div class="popup">Daniel is our visionary leader, guiding the team towards success and innovation.</div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="team-member">
            <img data-src="/assets/img/user/profile2.jpg" alt="Happy Chiputu" class="lazy responsive-img" />
            <div class="team-member-content">
              <div class="name">Happy Chiputu</div>
              <div class="title">Administration and Operations Officer</div>
            </div>
            <div class="popup">Happy oversees daily operations and ensures smooth administration across the
              organization.</div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="team-member">
            <img data-src="/assets/img/user/profile4.jpg" alt="Shadreck Mawindo" class="lazy responsive-img" />
            <div class="team-member-content">
              <div class="name">Shadreck Mawindo</div>
              <div class="title">Digital Skills Trainer</div>
            </div>
            <div class="popup">Shadreck empowers individuals with essential digital skills for work and innovation.
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="team-member">
            <img data-src="/assets/img/user/profile3.jpg" alt="Hellen Tembo" class="lazy responsive-img" />
            <div class="team-member-content">
              <div class="name">Hellen Tembo</div>
              <div class="title">Client Relations Officer</div>
            </div>
            <div class="popup">Hellen builds strong client relationships and ensures satisfaction with our services.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
@endsection