@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <style>
        .page-hero {
            background: /*linear-gradient(135deg, rgba(76, 128, 138, 0.9) 0%, rgba(59, 65, 103, 0.9) 100%),*/
                url('assets/img/bg/63.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 120px 0 80px;
            color: white;
            text-align: center;
        }

        .page-hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .application-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin: -50px auto 60px;
            position: relative;
            max-width: 900px;
        }

        .form-section {
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 1px solid #eee;
        }

        .section-title {
            color: #3B4167;
            font-weight: 600;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #4C808A;
            display: inline-block;
        }

        .btn-submit {
            background: #4C808A;
            color: white;
            padding: 12px 40px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border: none;
            font-size: 1.1rem;
        }

        .btn-submit:hover {
            background: #3B4167;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .file-upload {
            border: 2px dashed #ddd;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .file-upload:hover {
            border-color: #4C808A;
            background: #f8f9fa;
        }

        @media (max-width: 768px) {
            .page-hero h1 {
                font-size: 2.5rem;
            }
            .application-container {
                padding: 25px 20px;
                margin: -30px 15px 40px;
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
      <h1>Become an Emerge Entrepreneur</h1>
      <p class="lead">Join our network of innovative entrepreneurs and take your business to the next level with our
        comprehensive support system.</p>
    </div>
  </section>

  <!-- Application Form -->
  <div class="container">
    <div class="application-container">
      <form id="entrepreneurApplicationForm">
        <!-- Personal Information -->
        <div class="form-section">
          <h3 class="section-title">Personal Information</h3>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="firstName" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="lastName" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
              <input type="tel" class="form-control" id="phone" required>
            </div>
          </div>
        </div>

        <!-- Business Information -->
        <div class="form-section">
          <h3 class="section-title">Business Information</h3>
          <div class="mb-3">
            <label for="businessName" class="form-label">Business Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="businessName" required>
          </div>
          <div class="mb-3">
            <label for="businessType" class="form-label">Business Type <span class="text-danger">*</span></label>
            <select class="form-select" id="businessType" required>
              <option value="" selected disabled>Select business type</option>
              <option value="sole">Sole Proprietorship</option>
              <option value="partnership">Partnership</option>
              <option value="llc">Limited Liability Company</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="businessDescription" class="form-label">Business Description <span
                class="text-danger">*</span></label>
            <textarea class="form-control" id="businessDescription" rows="4" required></textarea>
          </div>
        </div>

        <!-- Business Plan -->
        <div class="form-section">
          <h3 class="section-title">Business Plan</h3>
          <div class="file-upload" id="businessPlanUpload">
            <i class="fas fa-file-upload"></i>
            <p>Upload your business plan (PDF, DOC, DOCX)</p>
            <small>Max file size: 10MB</small>
            <input type="file" id="businessPlan" style="display: none;" accept=".pdf,.doc,.docx" required>
          </div>
          <div id="fileList"></div>
        </div>

        <!-- Submit -->
        <div class="text-center mt-5">
          <button type="submit" class="btn btn-submit">Submit Application</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Custom Script -->
  <script>
    // Set current year in footer
    document.getElementById('currentYear').textContent = new Date().getFullYear();

    // File upload handling
    const fileUpload = document.getElementById('businessPlanUpload');
    const fileInput = document.getElementById('businessPlan');
    const fileList = document.getElementById('fileList');

    fileUpload.addEventListener('click', () => fileInput.click());

    fileInput.addEventListener('change', (e) => {
      const files = e.target.files;
      if (files.length > 0) {
        fileList.innerHTML = '';
        for (const file of files) {
          const fileItem = document.createElement('div');
          fileItem.className = 'file-item';
          fileItem.innerHTML = `
                        <span class="file-name">${file.name}</span>
                        <span class="file-remove" data-file="${file.name}">&times;</span>
                    `;
          fileList.appendChild(fileItem);
        }
      }
    });

    // Form submission
    document.getElementById('entrepreneurApplicationForm').addEventListener('submit', function (e) {
      e.preventDefault();
      alert('Thank you for your application! We will review your information and get back to you soon.');
      this.reset();
      fileList.innerHTML = '';
    });

    // Close mobile menu when clicking a link
    $('.navbar-nav>li>a').on('click', function () {
      $('.navbar-collapse').collapse('hide');
    });
  </script>
</body>
@endsection