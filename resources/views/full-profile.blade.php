@extends('layouts.master')

@section('title', 'Home')

@section('content')

  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
	<style>
		/* Custom styles for profile page */
		.profile-hero {
			background: /*linear-gradient(135deg, rgba(76, 128, 138, 0.8) 0%, rgba(59, 65, 103, 0.8) 100%),*/ url('{{ asset('assets/img/bg/63.jpg') }}');
			background-size: cover;
			background-position: center;
			background-attachment: fixed;
			color: white;
			padding: 100px 0 60px;
			position: relative;
			text-align: center;
		}

		.profile-hero::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: rgba(0, 0, 0, 0.3);
			z-index: 1;
		}

		.profile-hero .container {
			position: relative;
			z-index: 2;
		}

		.profile-hero h1 {
			font-size: 3.5rem;
			font-weight: 700;
			margin-bottom: 20px;
			text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
			color: white;
		}

		.profile-hero p {
			font-size: 1.2rem;
			opacity: 0.9;
			max-width: 600px;
			margin: 0 auto;
			color: white;
		}

		.profile-hero .btn-outline-light {
			color: white !important;
			border-color: white !important;
			background-color: transparent !important;
		}

		.profile-hero .btn-outline-light:hover {
			background-color: white !important;
			color: #4C808A !important;
			border-color: white !important;
		}

		/* Action Buttons Styling */
		.action-buttons-widget {
			margin-top: 40px;
			padding: 30px 0;
			border-top: 1px solid #eee;
		}

		.action-buttons {
			display: flex;
			gap: 20px;
			margin-top: 40px;
			flex-wrap: wrap;
		}

		.action-btn {
			padding: 15px 30px;
			border: none;
			border-radius: 50px;
			font-size: 1rem;
			font-weight: 600;
			cursor: pointer;
			transition: all 0.3s ease;
			text-transform: uppercase;
			letter-spacing: 0.5px;
			flex: 1;
			min-width: 160px;
		}

		.btn-performance {
			background: linear-gradient(135deg, #4C808A, #3B4167);
			color: white;
		}

		.btn-invest {
			background: linear-gradient(135deg, #4C808A, #3B4167);
			color: #ffffff;
		}

		.btn-scorecard {
			background: linear-gradient(135deg, #4C808A, #3B4167);
			color: #ffffff;
		}

		.action-btn:hover {
			transform: translateY(-2px);
			box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
		}

		.action-btn i {
			font-size: 14px;
		}

		/* Responsive design for buttons */
		@media (max-width: 768px) {
			.action-buttons {
				flex-direction: column;
				align-items: center;
			}

			.action-btn {
				width: 100%;
				max-width: 300px;
				margin-bottom: 10px;
			}
		}

		/* Location Tab Styles */
		.location-info-widget {
			background: #fff;
			border-radius: 15px;
			padding: 30px;
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
			margin-bottom: 30px;
		}

		.location-header {
			display: flex;
			align-items: center;
			margin-bottom: 25px;
			padding-bottom: 20px;
			border-bottom: 2px solid #f0f0f0;
		}

		.location-icon {
			background: linear-gradient(135deg, #4C808A, #3B4167);
			color: white;
			width: 60px;
			height: 60px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin-right: 20px;
			font-size: 24px;
		}

		.location-details h3 {
			color: #17181c;
			font-weight: 700;
			margin-bottom: 5px;
			font-size: 1.5rem;
		}

		.location-details p {
			color: #666;
			margin: 0;
			font-size: 1rem;
		}

		.address-info {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
			gap: 20px;
			margin-bottom: 30px;
		}

		.address-item {
			display: flex;
			align-items: flex-start;
			padding: 15px;
			background: #f8f9fa;
			border-radius: 10px;
			border-left: 4px solid #4C808A;
		}

		.address-item i {
			color: #4C808A;
			font-size: 18px;
			margin-right: 12px;
			margin-top: 2px;
		}

		.address-content h5 {
			color: #17181c;
			font-weight: 600;
			margin-bottom: 5px;
			font-size: 1rem;
		}

		.address-content p {
			color: #666;
			margin: 0;
			font-size: 0.9rem;
			line-height: 1.4;
		}

		.map-container {
			border-radius: 15px;
			overflow: hidden;
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
			margin-bottom: 20px;
		}

		.map-container iframe {
			width: 100%;
			height: 400px;
			border: none;
		}

		.directions-btn {
			background: linear-gradient(135deg, #4C808A, #3B4167);
			color: white;
			border: none;
			padding: 12px 30px;
			border-radius: 50px;
			font-weight: 600;
			text-decoration: none;
			display: inline-flex;
			align-items: center;
			transition: all 0.3s ease;
			margin-top: 15px;
		}

		.directions-btn:hover {
			transform: translateY(-2px);
			box-shadow: 0 8px 20px rgba(76, 128, 138, 0.3);
			color: white;
			text-decoration: none;
		}

		.directions-btn i {
			margin-right: 8px;
		}

		@media (max-width: 768px) {
			.location-header {
				flex-direction: column;
				text-align: center;
			}

			.location-icon {
				margin-right: 0;
				margin-bottom: 15px;
			}

			.address-info {
				grid-template-columns: 1fr;
			}

			.map-container iframe {
				height: 300px;
			}
		}

		.main-wrapper {
			padding-top: 0;
		}

		.content {
			padding-top: 30px;
		}

		/* Timeline Styles */
		.timeline {
			position: relative;
			padding-left: 30px;
		}

		.timeline::before {
			content: '';
			position: absolute;
			left: 15px;
			top: 0;
			bottom: 0;
			width: 2px;
			background: #e9ecef;
		}

		.timeline-item {
			position: relative;
			margin-bottom: 30px;
		}

		.timeline-marker {
			position: absolute;
			left: -23px;
			top: 5px;
			width: 16px;
			height: 16px;
			border-radius: 50%;
			border: 3px solid #fff;
			box-shadow: 0 0 0 2px #e9ecef;
		}

		.timeline-content {
			background: #f8f9fa;
			padding: 15px 20px;
			border-radius: 8px;
			border-left: 4px solid #4C808A;
		}

		.timeline-content h6 {
			color: #4C808A;
			font-weight: 600;
			margin-bottom: 5px;
		}

		.timeline-content p {
			margin: 0;
			color: #666;
		}

		@media (max-width: 768px) {
			.profile-hero h1 {
				font-size: 2.5rem;
			}

			.profile-hero {
				padding: 100px 0 40px;
			}

			.timeline {
				padding-left: 20px;
			}

			.timeline-marker {
				left: -18px;
			}
		}
	</style>
@php
	$rawBusinessLogo = $entrepreneur->business_logo ?? null;
	$rawProfileImage = $entrepreneur->profile_image ?? null;

	$businessLogoUrl = $rawBusinessLogo;
	if (!$businessLogoUrl) {
		$businessLogoUrl = asset('assets/img/logos/lg1.png');
	} elseif (!filter_var($businessLogoUrl, FILTER_VALIDATE_URL)) {
		$businessLogoUrl = asset(ltrim($businessLogoUrl, '/'));
	}

	$profileImageUrl = $rawProfileImage;
	if (!$profileImageUrl) {
		$profileImageUrl = asset('assets/img/user/profile1.JPG');
	} elseif (!filter_var($profileImageUrl, FILTER_VALIDATE_URL)) {
		$profileImageUrl = asset(ltrim($profileImageUrl, '/'));
	}
@endphp
<body>
	<!-- Loader -->
	<div id="ms-overlay">
		<div class="loader"></div>
	</div>

	<!-- Hero Section -->
	<section class="profile-hero">
		<div class="container">
			<div class="d-flex align-items-center mb-3">
				<a href="{{ route('entrepreneurs.index') }}" class="btn btn-outline-light me-3">
					<i class="fas fa-arrow-left me-2"></i>Back to Entrepreneurs
				</a>
			</div>
			<h1>Entrepreneur Profile</h1>
			<p>Discover the story behind innovative minds amplifying self-reliance and fostering social economic growth
			</p>
		</div>
	</section>

	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<!-- Page Content -->
		<div class="content">
			<div class="container">
				<!-- Doctor Details Tab -->
				<div class="card">
					<div class="card-body pt-0">

						<!-- Tab Menu -->
						<nav class="user-tabs mb-4">
							<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
								<li class="nav-item">
									<a class="nav-link active" href="#doc_overview" data-bs-toggle="tab">Overview</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#doc_locations" data-bs-toggle="tab">Value Proposition</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#doc_reviews" data-bs-toggle="tab">Location</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#doc_business_hours" data-bs-toggle="tab">5 Year Plan</a>
								</li>
							</ul>
						</nav>
						<!-- /Tab Menu -->

						<!-- Tab Content -->
						<div class="tab-content pt-0">

							<!-- Overview Content -->
							<div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
								<div class="row">
									<div class="col-md-12">

										<div class="card-body">
											<div class="doc-info-cont">
												<p class="doc-department">
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
														src="{{ $businessLogoUrl }}" class="img-fluid"
														alt="{{ $entrepreneur->business_name }}"></p>
												<div class="rating"> <span
														class="d-inline-block average-rating">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $entrepreneur->business_name }}</span>
												</div>
											</div>
											<div class="doctor-widget">
												<div class="doc-info-left">
													<div class="doctor-img">
														<img src="{{ $profileImageUrl }}"
															class="img-fluid" alt="{{ $entrepreneur->name }}">
													</div>

												</div>
											</div>

										</div>
										<!-- About Details -->
										<div class="widget about-widget">
											<h4 class="doc-name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $entrepreneur->name }}</h4>
											<div class="widget about-widget"></div>
											<p>{{ $entrepreneur->overview ?? $entrepreneur->business_description }}</p>
										</div>
										<!-- /About Details -->
<br>
										<!-- Education Details -->
										<div class="widget education-widget">
											<h4 class="widget-title">Entrepreneur Details</h4>
											<div class="experience-box">
												<ul class="experience-list">
													@if($entrepreneur->role)
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">Role</a>
																<div>{{ $entrepreneur->role }} for {{ $entrepreneur->business_name }}</div>
															</div>
														</div>
													</li>
													@endif
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">Location</a>
																<div>{{ $entrepreneur->location }}</div>
															</div>
														</div>
													</li>
													@if($entrepreneur->bio)
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">Brief Bio</a>
																<div>{{ $entrepreneur->bio }}</div>
															</div>
														</div>
													</li>
													@endif
													@if($entrepreneur->social_media)
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">Contact Information</a>
																<div>
																	@foreach($entrepreneur->social_media as $platform => $link)
																		<a href="{{ $link }}" target="_blank" class="me-2">{{ ucfirst($platform) }}</a>
																	@endforeach
																</div>
															</div>
														</div>
													</li>
													@endif
												</ul>
											</div>
										</div>
										<!-- /Education Details -->
<br>
										<!-- Experience Details -->
										<div class="widget experience-widget">
											<h4 class="widget-title">Business Particulars</h4>
											<div class="experience-box">
												<ul class="experience-list">
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">Business Sector</a>
																<div>{{ $entrepreneur->industry }}</div>
															</div>
														</div>
													</li>
													@if($entrepreneur->founded_year)
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">Founding Year</a>
																<span class="time">EST since {{ $entrepreneur->founded_year }}</span>
															</div>
														</div>
													</li>
													@endif
													@if($entrepreneur->business_size)
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">Business Size</a>
																<span class="time">{{ $entrepreneur->business_size }}</span>
															</div>
														</div>
													</li>
													@endif
													@if($entrepreneur->business_email || $entrepreneur->business_phone)
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">Business Contact Info</a>
																<div>
																	@if($entrepreneur->business_email)
																		Email: {{ $entrepreneur->business_email }}<br>
																	@endif
																	@if($entrepreneur->business_phone)
																		Phone: {{ $entrepreneur->business_phone }}
																	@endif
																</div>
															</div>
														</div>
													</li>
													@endif
												</ul>
											</div>
										</div>
										<!-- /Experience Details -->
<br>
										<!-- Awards Details -->
										<div class="widget awards-widget">
											<h4 class="widget-title">Business Milestones</h4>
											<div class="experience-box">
												<ul class="experience-list">
													@if($entrepreneur->milestones)
														@foreach($entrepreneur->milestones as $milestone)
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<p class="exp-year">{{ \Carbon\Carbon::parse($milestone['date'])->format('F Y') }}</p>
																	<h4 class="exp-title">{{ $milestone['description'] }}</h4>
																</div>
															</div>
														</li>
														@endforeach
													@else
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<p class="exp-year">{{ $entrepreneur->joined_date ? $entrepreneur->joined_date->format('F Y') : 'N/A' }}</p>
																	<h4 class="exp-title">Joined Emerge Livelihoods</h4>
																</div>
															</div>
														</li>
													@endif
												</ul>
											</div>
										</div>
										<!-- /Awards Details -->
<br>
										<!-- Business Partners -->
										<div class="widget experience-widget">
											<h4 class="widget-title">Business Partners</h4>
											<div class="experience-box">
												<ul class="experience-list">
													@if($entrepreneur->partners)
														@foreach($entrepreneur->partners as $partner)
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#/" class="name">{{ $partner }}</a>
																</div>
															</div>
														</li>
														@endforeach
													@else
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#/" class="name">No partners listed</a>
																</div>
															</div>
														</li>
													@endif
												</ul>
											</div>
										</div>
										<!-- /Experience Details -->

										<!-- Action Buttons -->
										<div class="widget action-buttons-widget">
											<div class="row justify-content-center mt-4">
												<div class="col-md-10">
													<div class="action-buttons justify-content-center">
														<button class="action-btn btn-performance"
															onclick="handleAction('performance')">
															<i class="fas fa-chart-line me-2"></i>View Business
															Performance
														</button>
														<button class="action-btn btn-invest"
															onclick="handleAction('invest')">
															<i class="fas fa-hand-holding-usd me-2"></i>Invest
														</button>
														<button class="action-btn btn-scorecard"
															onclick="handleAction('scorecard')">
															<i class="fas fa-clipboard-list me-2"></i>Scorecard
														</button>
													</div>
												</div>
											</div>
										</div>
										<!-- /Action Buttons -->
									</div>
								</div>
							</div>
							<!-- /Overview Content -->

							<!-- Value Proposition Content -->
							<div role="tabpanel" id="doc_locations" class="tab-pane fade">
								<div class="row">
									<div class="col-12">
										<div class="widget about-widget">
											<h4 class="widget-title">Value Proposition</h4>
											<div class="card-body">
												@if($entrepreneur->value_proposition)
													<p class="lead">{{ $entrepreneur->value_proposition }}</p>
												@else
													<p class="lead">{{ $entrepreneur->business_description }}</p>
												@endif
												
												@if($entrepreneur->skills)
													<h5 class="mt-4">Key Skills & Expertise</h5>
													<div class="row">
														@foreach($entrepreneur->skills as $skill)
															<div class="col-md-6 mb-2">
																<span class="badge bg-primary me-2">{{ $skill }}</span>
															</div>
														@endforeach
													</div>
												@endif

												@if($entrepreneur->achievements)
													<h5 class="mt-4">Key Achievements</h5>
													<ul class="list-unstyled">
														@foreach($entrepreneur->achievements as $achievement)
															<li class="mb-2">
																<i class="fas fa-check-circle text-success me-2"></i>
																{{ $achievement }}
															</li>
														@endforeach
													</ul>
												@endif
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Locations Content -->

							<!-- Location Content -->
							<div role="tabpanel" id="doc_reviews" class="tab-pane fade">
								<div class="row">
									<div class="col-12">
										<!-- Location Information Widget -->
										<div class="location-info-widget">
											<div class="location-header">
												<div class="location-icon">
													<i class="fas fa-map-marker-alt"></i>
												</div>
												<div class="location-details">
													<h3 id="business-location-title">{{ $entrepreneur->business_name }} Location</h3>
													<p>Find us at our business location and get directions</p>
												</div>
											</div>

											<!-- Address Information -->
											<div class="address-info">
												@if($entrepreneur->business_address)
												<div class="address-item">
													<i class="fas fa-building"></i>
													<div class="address-content">
														<h5>Business Address</h5>
														<p id="business-address">{{ $entrepreneur->business_address }}</p>
													</div>
												</div>
												@endif
												@if($entrepreneur->business_phone)
												<div class="address-item">
													<i class="fas fa-phone"></i>
													<div class="address-content">
														<h5>Contact Number</h5>
														<p id="business-phone">{{ $entrepreneur->business_phone }}</p>
													</div>
												</div>
												@endif
												@if($entrepreneur->business_email)
												<div class="address-item">
													<i class="fas fa-envelope"></i>
													<div class="address-content">
														<h5>Email Address</h5>
														<p id="business-email">{{ $entrepreneur->business_email }}</p>
													</div>
												</div>
												@endif
												@if($entrepreneur->business_hours)
												<div class="address-item">
													<i class="fas fa-clock"></i>
													<div class="address-content">
														<h5>Business Hours</h5>
														<p id="business-hours">{!! nl2br(e($entrepreneur->business_hours)) !!}</p>
													</div>
												</div>
												@endif
											</div>

											<!-- Google Maps Embed -->
											@if($entrepreneur->latitude && $entrepreneur->longitude)
											<div class="map-container">
												<iframe 
													id="business-map"
													src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.5234567890123!2d{{ $entrepreneur->longitude }}!3d{{ $entrepreneur->latitude }}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z{{ $entrepreneur->latitude }}{{ $entrepreneur->longitude }}!5e0!3m2!1sen!2smw!4v1234567890123!5m2!1sen!2smw"
													allowfullscreen="" 
													loading="lazy" 
													referrerpolicy="no-referrer-when-downgrade">
												</iframe>
											</div>

											<!-- Get Directions Button -->
											<div class="text-center">
												<a href="https://www.google.com/maps/dir//{{ $entrepreneur->latitude }},{{ $entrepreneur->longitude }}" id="directions-link" class="directions-btn" target="_blank">
													<i class="fas fa-route"></i>
													Get Directions
												</a>
											</div>
											@endif
										</div>
									</div>
								</div>
							</div>
							<!-- /Location Content -->

							<!-- 5 Year Plan Content -->
							<div role="tabpanel" id="doc_business_hours" class="tab-pane fade">
								<div class="row">
									<div class="col-12">
										<div class="widget about-widget">
											<h4 class="widget-title">5 Year Strategic Plan</h4>
											<div class="card-body">
												@if($entrepreneur->five_year_plan)
													<div class="alert alert-info">
														<h5><i class="fas fa-bullseye me-2"></i>Vision for 2029</h5>
														<p class="mb-0">{{ $entrepreneur->five_year_plan }}</p>
													</div>
												@endif

												<div class="row mt-4">
													<div class="col-md-6">
														<div class="card border-primary">
															<div class="card-header bg-primary text-white">
																<h6 class="mb-0"><i class="fas fa-chart-line me-2"></i>Growth Targets</h6>
															</div>
															<div class="card-body">
																<ul class="list-unstyled">
																	<li class="mb-2"><i class="fas fa-users text-primary me-2"></i>Expand team to {{ $entrepreneur->business_size === '10-25 employees' ? '50+' : '100+' }} employees</li>
																	<li class="mb-2"><i class="fas fa-globe text-primary me-2"></i>Enter new markets and regions</li>
																	<li class="mb-2"><i class="fas fa-chart-bar text-primary me-2"></i>Increase revenue by 300-500%</li>
																	<li class="mb-2"><i class="fas fa-handshake text-primary me-2"></i>Establish strategic partnerships</li>
																</ul>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="card border-success">
															<div class="card-header bg-success text-white">
																<h6 class="mb-0"><i class="fas fa-lightbulb me-2"></i>Innovation Goals</h6>
															</div>
															<div class="card-body">
																<ul class="list-unstyled">
																	<li class="mb-2"><i class="fas fa-cogs text-success me-2"></i>Develop new product lines</li>
																	<li class="mb-2"><i class="fas fa-mobile-alt text-success me-2"></i>Launch digital platforms</li>
																	<li class="mb-2"><i class="fas fa-leaf text-success me-2"></i>Implement sustainable practices</li>
																	<li class="mb-2"><i class="fas fa-award text-success me-2"></i>Achieve industry certifications</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="mt-4">
													<h5>Key Milestones Timeline</h5>
													<div class="timeline">
														<div class="timeline-item">
															<div class="timeline-marker bg-primary"></div>
															<div class="timeline-content">
																<h6>Year 1-2: Foundation</h6>
																<p>Strengthen core operations and establish market presence</p>
															</div>
														</div>
														<div class="timeline-item">
															<div class="timeline-marker bg-warning"></div>
															<div class="timeline-content">
																<h6>Year 3: Expansion</h6>
																<p>Scale operations and enter new markets</p>
															</div>
														</div>
														<div class="timeline-item">
															<div class="timeline-marker bg-success"></div>
															<div class="timeline-content">
																<h6>Year 4-5: Leadership</h6>
																<p>Become industry leader and mentor other entrepreneurs</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /5 Year Plan Content -->

						</div>
					</div>
				</div>
				<!-- /Business Hours Content -->
			</div>
		</div>
	</div>
	<!-- /Doctor Details Tab -->
	</div>
	</div>
	<!-- /Page Content -->
	</div>
	<!-- /Page Content -->
	</div>
	<!-- /Main Wrapper -->

	<!-- Footer Start -->

	<script>
		// Get entrepreneur ID from URL parameters
		const urlParams = new URLSearchParams(window.location.search);
		const entrepreneurId = urlParams.get('entrepreneur');

		// Entrepreneur data
		const entrepreneurData = {
			'sarah': {
				name: '\u00A0\u00A0\u00A0\u00A0\u00A0Sarah Johnson',
				business: '\u00A0\u00A0\u00A0\u00A0\u00A0EcoTech Solutions',
				image: 'assets/img/user/profile1.JPG',
				logo: 'assets/img/logos/lg1.png',
				role: 'Founder & CEO of EcoTech Solutions',
				location: 'Lilongwe, Malawi',
				bio: 'Sarah is a passionate environmental technologist dedicated to creating sustainable solutions that amplify community resilience in urban environments. With over 8 years of experience in green technology, she leads innovative projects that bridge the gap between technology and environmental conservation.',
				sector: 'Environmental Technology',
				foundingYear: '2019',
				businessSize: 'Small Enterprise (5-15 employees)',
				contact: 'sarah@ecotech.mw | LinkedIn: /in/sarahjohnson',
				address: 'Area 47, Sector 3, Lilongwe, Malawi',
				phone: '+265 999 234 567',
				email: 'sarah@ecotech.mw',
				hours: 'Mon - Fri: 8:00 AM - 5:00 PM<br>Sat: 9:00 AM - 1:00 PM',
				mapEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.5234567890123!2d33.7833333!3d-13.9666667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDU4JzAwLjAiUyAzM8KwNDcnMDAuMCJF!5e0!3m2!1sen!2smw!4v1234567890123!5m2!1sen!2smw',
				directionsLink: 'https://www.google.com/maps/dir//Area+47,+Sector+3,+Lilongwe,+Malawi'
			},
			'marcus': {
				name: '\u00A0\u00A0\u00A0\u00A0\u00A0Marcus Chen',
				business: '\u00A0\u00A0\u00A0\u00A0\u00A0AgriConnect',
				image: 'assets/img/user/profile2.jpg',
				logo: 'assets/img/logos/lg1.png',
				role: 'Founder of AgriConnect',
				location: 'Blantyre, Malawi',
				bio: 'Marcus revolutionizes agricultural supply chains through digital platforms, connecting smallholder farmers directly with markets and improving food security across rural communities.',
				sector: 'Agricultural Technology',
				foundingYear: '2020',
				businessSize: 'Medium Enterprise (16-50 employees)',
				contact: 'marcus@agriconnect.mw | Twitter: @marcuschen',
				address: 'Chichiri Trade Fair Grounds, Blantyre, Malawi',
				phone: '+265 999 345 678',
				email: 'marcus@agriconnect.mw',
				hours: 'Mon - Fri: 7:30 AM - 5:30 PM<br>Sat: 8:00 AM - 2:00 PM',
				mapEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.5234567890123!2d35.0166667!3d-15.7833333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDQ3JzAwLjAiUyAzNcKwMDEnMDAuMCJF!5e0!3m2!1sen!2smw!4v1234567890123!5m2!1sen!2smw',
				directionsLink: 'https://www.google.com/maps/dir//Chichiri+Trade+Fair+Grounds,+Blantyre,+Malawi'
			},
			'elena': {
				name: '\u00A0\u00A0\u00A0\u00A0\u00A0Elena Rodriguez',
				business: '\u00A0\u00A0\u00A0\u00A0\u00A0HealthBridge',
				image: 'assets/img/user/profile3.jpg',
				logo: 'assets/img/logos/lg1.png',
				role: 'Founder & Medical Director of HealthBridge',
				location: 'Mzuzu, Malawi',
				bio: 'Elena bridges healthcare gaps in rural communities through innovative telemedicine solutions and mobile health clinics, ensuring quality healthcare reaches underserved populations.',
				sector: 'Healthcare Technology',
				foundingYear: '2018',
				businessSize: 'Small Enterprise (8-20 employees)',
				contact: 'elena@healthbridge.mw | Facebook: /healthbridgemw',
				address: 'Mzuzu University Campus, Luwinga, Mzuzu, Malawi',
				phone: '+265 999 456 789',
				email: 'elena@healthbridge.mw',
				hours: 'Mon - Fri: 8:00 AM - 4:30 PM<br>Sat: 9:00 AM - 12:00 PM',
				mapEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.5234567890123!2d33.9333333!3d-11.4666667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDI4JzAwLjAiUyAzM8KwNTYnMDAuMCJF!5e0!3m2!1sen!2smw!4v1234567890123!5m2!1sen!2smw',
				directionsLink: 'https://www.google.com/maps/dir//Mzuzu+University+Campus,+Luwinga,+Mzuzu,+Malawi'
			},
			'david': {
				name: '\u00A0\u00A0\u00A0\u00A0\u00A0David Kim',
				business: '\u00A0\u00A0\u00A0\u00A0\u00A0EduTech Malawi',
				image: 'assets/img/user/profile4.jpg',
				logo: 'assets/img/logos/lg1.png',
				role: 'Founder of EduTech Malawi',
				location: 'Zomba, Malawi',
				bio: 'David transforms education through digital learning platforms, making quality education accessible to students across Malawi through innovative e-learning solutions.',
				sector: 'Educational Technology',
				foundingYear: '2021',
				businessSize: 'Startup (2-10 employees)',
				contact: 'david@edutech.mw | WhatsApp: +265 999 123 456',
				address: 'Chancellor College, University of Malawi, Zomba, Malawi',
				phone: '+265 999 567 890',
				email: 'david@edutech.mw',
				hours: 'Mon - Fri: 8:30 AM - 5:00 PM<br>Sat: 9:00 AM - 1:00 PM',
				mapEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.5234567890123!2d35.3166667!3d-15.3833333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDIzJzAwLjAiUyAzNcKwMTknMDAuMCJF!5e0!3m2!1sen!2smw!4v1234567890123!5m2!1sen!2smw',
				directionsLink: 'https://www.google.com/maps/dir//Chancellor+College,+University+of+Malawi,+Zomba,+Malawi'
			},
			'amara': {
				name: '\u00A0\u00A0\u00A0\u00A0\u00A0Amara Patel',
				business: '\u00A0\u00A0\u00A0\u00A0Solar Solutions MW',
				image: 'assets/img/profile-images/Emerge Store-1.jpg',
				logo: 'assets/img/logos/lg1.png',
				role: 'Founder of Solar Solutions MW',
				location: 'Lilongwe, Malawi',
				bio: 'Amara pioneers renewable energy solutions, bringing affordable solar power to rural communities and contributing to Malawi\'s sustainable energy future.',
				sector: 'Renewable Energy',
				foundingYear: '2017',
				businessSize: 'Medium Enterprise (25-40 employees)',
				contact: 'amara@solarsolutions.mw | LinkedIn: /in/amarapatel',
				address: 'Kanengo Industrial Area, Lilongwe, Malawi',
				phone: '+265 999 678 901',
				email: 'amara@solarsolutions.mw',
				hours: 'Mon - Fri: 7:00 AM - 6:00 PM<br>Sat: 8:00 AM - 3:00 PM',
				mapEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.5234567890123!2d33.8000000!3d-13.9500000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDU3JzAwLjAiUyAzM8KwNDgnMDAuMCJF!5e0!3m2!1sen!2smw!4v1234567890123!5m2!1sen!2smw',
				directionsLink: 'https://www.google.com/maps/dir//Kanengo+Industrial+Area,+Lilongwe,+Malawi'
			},
			'james': {
				name: '\u00A0\u00A0\u00A0\u00A0\u00A0James Wilson',
				business: '\u00A0\u00A0\u00A0\u00A0\u00A0FinTech Innovations',
				image: 'assets/img/profile-images/Emerge Store-2.jpg',
				logo: 'assets/img/logos/lg1.png',
				role: 'Founder & CTO of FinTech Innovations',
				location: 'Blantyre, Malawi',
				bio: 'James develops financial technology solutions that increase financial inclusion, providing digital banking and payment solutions to underbanked communities.',
				sector: 'Financial Technology',
				foundingYear: '2020',
				businessSize: 'Small Enterprise (12-25 employees)',
				contact: 'james@fintech.mw | Twitter: @jameswilsonmw',
				address: 'Victoria Avenue, Blantyre Business District, Malawi',
				phone: '+265 999 789 012',
				email: 'james@fintech.mw',
				hours: 'Mon - Fri: 8:00 AM - 5:30 PM<br>Sat: 9:00 AM - 2:00 PM',
				mapEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.5234567890123!2d35.0000000!3d-15.7666667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDQ2JzAwLjAiUyAzNcKwMDAnMDAuMCJF!5e0!3m2!1sen!2smw!4v1234567890123!5m2!1sen!2smw',
				directionsLink: 'https://www.google.com/maps/dir//Victoria+Avenue,+Blantyre+Business+District,+Malawi'
			}
		};

		// Default entrepreneur (Cosmus Richard from the original content)
		const defaultEntrepreneur = {
			name: '\u00A0\u00A0\u00A0\u00A0\u00A0Cosmus Richard',
			business: '\u00A0\u00A0\u00A0\u00A0\u00A0Umoza Coffee',
			image: 'assets/img/entrepreneurs/shadreck.jpg',
			logo: 'assets/img/logos/lg1.png',
			role: 'Founder for Umoza Coffee Company',
			location: 'Zolozolo, Mzuzu City, Malawi',
			bio: 'Emerge Livelihoods envisions a thriving ecosystem that amplifies the self-reliance of individuals and communities across Malawi and beyond. Our brand visualizes stability, renewal, and support in our commitment to serving people and communities.',
			sector: 'Coffee Production & Processing',
			foundingYear: '2007',
			businessSize: 'Small Enterprise (5-15 employees)',
			contact: 'cosmus@umozacoffee.mw | Facebook: /umozacoffee',
			address: 'Zolozolo, Mzuzu City, Malawi',
			phone: '+265 999 123 456',
			email: 'cosmus@umozacoffee.mw',
			hours: 'Mon - Fri: 8:00 AM - 5:00 PM<br>Sat: 9:00 AM - 2:00 PM',
			mapEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.5234567890123!2d33.9333333!3d-11.4666667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDI4JzAwLjAiUyAzM8KwNTYnMDAuMCJF!5e0!3m2!1sen!2smw!4v1234567890123!5m2!1sen!2smw',
			directionsLink: 'https://www.google.com/maps/dir//Zolozolo,+Mzuzu+City,+Malawi'
		};

		// Load entrepreneur data when page loads (only when query param is present)
		document.addEventListener('DOMContentLoaded', function () {
			if (!entrepreneurId) {
				return; // Do not override server-rendered data
			}
			const entrepreneur = entrepreneurData[entrepreneurId] || defaultEntrepreneur;

			// Update page content with entrepreneur data
			document.querySelector('.doc-name').textContent = entrepreneur.name;
			document.querySelector('.average-rating').textContent = entrepreneur.business;
			document.querySelector('.doctor-img img').src = entrepreneur.image;
			document.querySelector('.doctor-img img').alt = entrepreneur.name;
			document.querySelector('.doc-department img').src = entrepreneur.logo;
			document.querySelector('.about-widget p').textContent = entrepreneur.bio;

			// Update entrepreneur details
			const detailsList = document.querySelectorAll('.education-widget .experience-list li');
			if (detailsList.length >= 4) {
				detailsList[0].querySelector('.timeline-content div').textContent = entrepreneur.role;
				detailsList[1].querySelector('.timeline-content div').textContent = entrepreneur.location;
				detailsList[2].querySelector('.timeline-content div').textContent = entrepreneur.bio.substring(0, 100) + '...';
				detailsList[3].querySelector('.timeline-content div').textContent = entrepreneur.contact;
			}

			// Update business particulars
			const businessList = document.querySelectorAll('.experience-widget .experience-list li');
			if (businessList.length >= 4) {
				businessList[0].querySelector('.timeline-content').innerHTML = `<a href="#/" class="name">Business Sector</a><div>${entrepreneur.sector}</div>`;
				businessList[1].querySelector('.timeline-content').innerHTML = `<a href="#/" class="name">Founding Year</a><span class="time">EST since ${entrepreneur.foundingYear}</span>`;
				businessList[2].querySelector('.timeline-content').innerHTML = `<a href="#/" class="name">Business Size</a><div>${entrepreneur.businessSize}</div>`;
				businessList[3].querySelector('.timeline-content').innerHTML = `<a href="#/" class="name">Business Contact Info</a><div>${entrepreneur.contact}</div>`;
			}

			// Update location information
			const businessLocationTitle = document.getElementById('business-location-title');
			const businessAddress = document.getElementById('business-address');
			const businessPhone = document.getElementById('business-phone');
			const businessEmail = document.getElementById('business-email');
			const businessHours = document.getElementById('business-hours');
			const businessMap = document.getElementById('business-map');
			const directionsLink = document.getElementById('directions-link');

			if (businessLocationTitle) businessLocationTitle.textContent = `${entrepreneur.business} Location`;
			if (businessAddress) businessAddress.textContent = entrepreneur.address;
			if (businessPhone) businessPhone.textContent = entrepreneur.phone;
			if (businessEmail) businessEmail.textContent = entrepreneur.email;
			if (businessHours) businessHours.innerHTML = entrepreneur.hours;
			if (businessMap) businessMap.src = entrepreneur.mapEmbed;
			if (directionsLink) directionsLink.href = entrepreneur.directionsLink;

			// Update page title
			document.title = `${entrepreneur.name} - ${entrepreneur.business} | Emerge Ventures`;
		});

		// Handle action button clicks
		function handleAction(action) {
			const entrepreneur = entrepreneurData[entrepreneurId] || defaultEntrepreneur;
			let message = '';

			switch (action) {
				case 'performance':
					message = `Loading business performance analytics for ${entrepreneur.name}...`;
					break;
				case 'invest':
					message = `Opening investment opportunities for ${entrepreneur.business}...`;
					break;
				case 'scorecard':
					message = `Loading business scorecard for ${entrepreneur.name}...`;
					break;
				default:
					message = 'Action not recognized.';
			}

			// For now, show an alert. In a real application, this would navigate to the appropriate page
			alert(message);

			// You can replace this with actual navigation:
			// window.location.href = `${action}.html?entrepreneur=${entrepreneurId}`;
		}
	</script>
</body>
@endsection