@extends('layouts.master')

@section('title', 'Co-Workspace')

@section('content')
    <style>
        .page-hero {
            background: url('assets/img/bg/63.jpg');
            background-size: cover;
            background-position: center;
            padding: 150px 0 100px;
            color: white;
            text-align: center;
        }

        .space-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
            margin-bottom: 30px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(0, 0, 0, 0.04);
        }

        .space-card .card-img-top {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .space-card .card-body {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 1.75rem;
        }

        .space-card .card-title {
            color: #2C3E50;
            font-weight: 600;
            margin-bottom: 0.75rem;
            font-size: 1.25rem;
        }

        .space-card .card-text {
            color: #6C757D;
            margin-bottom: 1.25rem;
            line-height: 1.6;
        }

        .space-card .amenities-list {
            margin-bottom: 1rem;
            flex-grow: 1;
        }

        .space-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.1);
        }

        .space-card:hover .card-img-top {
            transform: scale(1.03);
        }

        .pricing-card {
            background: #f9f9f9;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            margin-bottom: 30px;
            border: 2px solid #eee;
        }

        .pricing-card.featured {
            border-color: #4C808A;
            position: relative;
        }

        .amenities-list {
            list-style: none;
            padding: 0;
        }

        .amenities-list li {
            margin-bottom: 8px;
            padding-left: 28px;
            position: relative;
            color: #5A6A7D;
            font-size: 0.95rem;
        }

        .amenities-list li:before {
            content: '\f00c';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            color: #4C808A;
            position: absolute;
            left: 0;
            background: rgba(76, 128, 138, 0.1);
            width: 22px;
            height: 22px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
        }

        .btn-primary {
            background-color: #4C808A;
            border-color: #4C808A;
        }

        .btn-primary:hover {
            background-color: #3B4167;
            border-color: #3B4167;
        }

        .btn-outline-primary {
            color: #4C808A;
            border-color: #4C808A;
        }

        .btn-outline-primary:hover {
            background-color: #4C808A;
            border-color: #4C808A;
            color: white;
        }

        .cta-section {
            background: linear-gradient(135deg, #4C808A 0%, #3B4167 100%);
            color: white;
            padding: 80px 0;
        }

        @media (max-width: 768px) {
            .page-hero h1 {
                font-size: 2.5rem;
            }
        }
    </style>
<body>
    <!-- Loader -->
    <div id="ms-overlay">
        <div class="loader"></div>
    </div>

    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <h1>Creative Co-Workspace</h1>
            <p class="lead">Join our vibrant community of innovators, entrepreneurs, and creatives in a collaborative
                workspace designed to inspire and connect.</p>
            <a href="#pricing" class="btn btn-light btn-lg">View Pricing</a>
        </div>
    </section>

    <!-- Workspace Options -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="space-card">
                        <img src="assets/img/Co-working_space/1.jpg" class="card-img-top" alt="Hot Desk">
                        <div class="card-body">
                            <h5 class="card-title">Hot Desk</h5>
                            <p class="card-text">Flexible workspace for those who value freedom and variety.</p>
                            <ul class="amenities-list">
                                <li>Access 8am - 6pm, Mon-Fri</li>
                                <li>High-speed internet</li>
                                <li>Printing facilities</li>
                                <li>Complimentary refreshments</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="space-card">
                        <img src="assets/img/Co-working_space/2.jpg" class="card-img-top" alt="Dedicated Desk">
                        <div class="card-body">
                            <h5 class="card-title">Dedicated Desk</h5>
                            <p class="card-text">Your own personal workspace in our collaborative environment.</p>
                            <ul class="amenities-list">
                                <li>24/7 access</li>
                                <li>Personal storage space</li>
                                <li>Meeting room access</li>
                                <li>Mail handling</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="space-card">
                        <img src="assets/img/Co-working_space/3.jpg" class="card-img-top" alt="Private Office">
                        <div class="card-body">
                            <h5 class="card-title">Private Office</h5>
                            <p class="card-text">A fully furnished private office for teams of 2-6 people.</p>
                            <ul class="amenities-list">
                                <li>24/7 access</li>
                                <li>Fully furnished</li>
                                <li>Custom branding</li>
                                <li>Reception services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="pricing-card">
                        <h4>Hot Desk</h4>
                        <div class="price">MWK 50,000<span>/month</span></div>
                        <p>Perfect for freelancers</p>
                        <ul class="amenities-list">
                            <li>Flexible seating</li>
                            <li>High-speed internet</li>
                            <li>Meeting room access</li>
                            <li>Community events</li>
                        </ul>
                        <a href="#contact" class="btn btn-outline-primary">Get Started</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pricing-card featured">
                        <h4>Dedicated Desk</h4>
                        <div class="price">MWK 80,000<span>/month</span></div>
                        <p>Ideal for professionals</p>
                        <ul class="amenities-list">
                            <li>Personal workspace</li>
                            <li>24/7 access</li>
                            <li>Storage space</li>
                            <li>Mail handling</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary">Get Started</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="pricing-card">
                        <h4>Private Office</h4>
                        <div class="price">MWK 200,000<span>/month</span></div>
                        <p>Perfect for teams</p>
                        <ul class="amenities-list">
                            <li>Fully furnished</li>
                            <li>Custom branding</li>
                            <li>Reception services</li>
                            <li>Team events</li>
                        </ul>
                        <a href="#contact" class="btn btn-outline-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2>Ready to Join Our Community?</h2>
                    <p class="lead mb-0">Schedule a tour of our space today.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <button class="btn btn-light btn-lg" data-bs-toggle="modal" data-bs-target="#tourModal">Schedule a
                        Tour</button>
                </div>
            </div>
        </div>
    </section>


    <!-- Tour Modal -->
    <div class="modal fade" id="tourModal" tabindex="-1" aria-labelledby="tourModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tourModalLabel">Schedule a Tour</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="tourForm">
                        <div class="mb-3">
                            <label for="tourName" class="form-label">Full Name <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="tourName" required>
                        </div>
                        <div class="mb-3">
                            <label for="tourEmail" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="tourEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="tourPhone" class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="tourPhone" required>
                        </div>
                        <div class="mb-3">
                            <label for="tourDate" class="form-label">Preferred Date <span
                                    class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="tourDate" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Schedule Tour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Set current year in footer
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        // Set minimum date for tour date picker (tomorrow)
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        document.getElementById('tourDate').min = tomorrow.toISOString().split('T')[0];

        // Form submission
        document.getElementById('tourForm').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Thank you for your interest! We will contact you shortly to confirm your tour.');
            this.reset();
            var modal = bootstrap.Modal.getInstance(document.getElementById('tourModal'));
            modal.hide();
        });

    </script>
</body>
@endsection