@include('layouts.app')
<div class="nav-img">
  <h2 class="text-center mt-5 " style="font-weight: 700; font-size: 38px;"> 404 Page </h1>
</div>
<div class="error-card">
  <!-- animated icon -->
  <div class="icon"><i class="fas fa-exclamation-triangle"></i></div>

  <!-- error code & text -->
  <div class="error-code">404</div>
  <div class="error-text">This Page Does Not Exist</div>
  <p class="error-desc">Sorry, the page you’re looking for could not be found.</p>

  <!-- buttons -->
  <a href="/" class="btn btn-red me-2">Go Home</a>
  <a href="javascript:history.back()" class="btn btn-green">Go Back</a>
</div>
<style>
  .todaytrade {
    display: none;
  }

  .error-card {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    padding: 40px 30px;
    max-width: 480px;
    text-align: center;
    animation: fadeInUp 1s ease;
    margin: 30px auto;
  }

  /* animation for card */
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* animated icon */
  .icon {
    font-size: 80px;
    color: #f80f10;
    animation: bounce 2s infinite;
  }

  @keyframes bounce {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-12px);
    }
  }

  .error-code {
    font-size: 64px;
    font-weight: 800;
    color: #f80f10;
    margin: 10px 0;
  }

  .error-text {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 10px;
    color: #222;
  }

  .error-desc {
    font-size: 15px;
    color: #666;
    margin-bottom: 25px;
  }

  .btn-red {
    background-color: #f80f10;
    color: #fff;
  }

  .btn-green {
    background-color: #f80f10;
    color: #fff;
  }
</style>
@include('layouts.footer')