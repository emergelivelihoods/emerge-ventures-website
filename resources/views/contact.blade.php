@extends('layouts.master')

@section('title', 'Contact Us')

@section('content')

  <link rel="stylesheet" href="assets/css/contact.css" />
<body>
  <!-- Loader -->
  <div id="ms-overlay">
    <div class="loader"></div>
  </div>

  <!-- Hero Banner Section -->
  <section class="contact-hero">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="hero-content">
            <h1 class="hero-title">Let's Connect</h1>
            <p class="hero-subtitle">Ready to transform your ideas into reality? We're here to help you every step of
              the way.</p>
            <div class="hero-stats">
              <div class="stat-item">
                <span class="stat-number">24h</span>
                <span class="stat-label">Response Time</span>
              </div>
              <div class="stat-item">
                <span class="stat-number">100+</span>
                <span class="stat-label">Projects Completed</span>
              </div>
              <div class="stat-item">
                <span class="stat-number">5★</span>
                <span class="stat-label">Client Rating</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="contact-wrapper">
            <div class="row g-0">
              <!-- Contact Form -->
              <div class="col-lg-7">
                <div class="contact-form-card">
                  <div class="form-header">
                    <h3>Send us a Message</h3>
                    <p>We'll get back to you within 24 hours</p>
                  </div>

                  <form class="modern-form">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="fname" placeholder="Full Name" required>
                          <label for="fname">Full Name</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                          <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                          <label for="email">Email Address</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                          <input type="tel" class="form-control" id="phone" placeholder="Phone Number" required>
                          <label for="phone">Phone Number</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <select class="form-select" id="subject" required>
                            <option value="">Subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="digital-skills">Digital Skills Training</option>
                            <option value="coworking">Co-working Space</option>
                            <option value="entrepreneurship">Entrepreneurship Support</option>
                            <option value="partnership">Partnership</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-floating mb-4">
                          <textarea class="form-control" id="message" style="height: 120px" placeholder="Your Message"
                            required></textarea>
                          <label for="message">Your Message</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn-modern-primary">
                          <span>Send Message</span>
                          <i class="fas fa-paper-plane"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <!-- Contact Info -->
              <div class="col-lg-5">
                <div class="contact-info-card">
                  <div class="info-header">
                    <h4>Get in Touch</h4>
                    <p>Ready to start your journey with us?</p>
                  </div>

                  <div class="contact-methods">
                    <div class="contact-method">
                      <div class="method-icon">
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <div class="method-content">
                        <h6>Visit Us</h6>
                        <p>Emerge Hub - Mzuzu<br>
                          Kwawala House, First Floor<br>
                          P.O. Box 20094, Mzuzu, Malawi</p>
                      </div>
                    </div>

                    <div class="contact-method">
                      <div class="method-icon">
                        <i class="fas fa-phone"></i>
                      </div>
                      <div class="method-content">
                        <h6>Call Us</h6>
                        <p><a href="tel:+265881404393">+265 881 404 393</a></p>
                      </div>
                    </div>

                    <div class="contact-method">
                      <div class="method-icon">
                        <i class="fas fa-envelope"></i>
                      </div>
                      <div class="method-content">
                        <h6>Email Us</h6>
                        <p><a href="mailto:hello@emergeventures.com">hello@emergeventures.com</a></p>
                      </div>
                    </div>
                  </div>

                  <div class="social-links">
                    <h6>Follow Us</h6>
                    <div class="social-icons">
                      <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                      <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                      <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                      <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features-section">
    <div class="container">
      <div class="row text-center">
        <div class="col-12 mb-5">
          <h2 class="section-title">Why Choose Emerge Ventures?</h2>
          <p class="section-subtitle">We're committed to your success every step of the way</p>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-rocket"></i>
            </div>
            <h5>Innovation First</h5>
            <p>Cutting-edge solutions tailored to your unique needs and goals.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-users"></i>
            </div>
            <h5>Expert Team</h5>
            <p>Experienced professionals dedicated to delivering exceptional results.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-clock"></i>
            </div>
            <h5>24/7 Support</h5>
            <p>Round-the-clock assistance whenever you need help or guidance.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-trophy"></i>
            </div>
            <h5>Proven Results</h5>
            <p>Track record of successful projects and satisfied clients across Malawi.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="ms-african-section d-flex align-items-center justify-content-center">
    <div class="ms-content-box text-center">
      <div class="col-md-12">
        <div class="ms-newsletter">
          <div class="ms-newsletter-detail">
            <div class="ms-detail">
              <h4>Stay Connected</h4>
              <p>Subscribe to our newsletter for updates and opportunities</p>
            </div>
            <div class="ms-newsletter-form">
              <form>
                <input type="email" id="newsletter-email" name="email" placeholder="Email Address"><br>
                <button class="ms-btn-2" type="submit" value="Submit"><img src="assets/icons/send.svg" class="svg_img"
                    alt="send"></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
@endsection