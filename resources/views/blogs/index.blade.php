
@include('Layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blogs</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {  font-family: "Poppins", sans-serif; }

.blog-card {
  background: #fff;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 6px 20px rgba(0,0,0,0.06);
  transition: .3s;
  height: 100%;
}
.blog-card:hover { transform: translateY(-6px); }
.blog-card img { width: 100%; height: 210px; object-fit: cover; }

.blog-content { padding: 22px; }
.blog-date {
  display: inline-block;
  background: #f9e0d6;
  padding: 6px 14px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 600;
  color: #000;
  margin-bottom: 12px;
}
.blog-title { font-size: 18px; font-weight: 700; color: #000; }
.blog-desc { font-size: 14px; color: #555; margin-top: 10px; }
.read-more { color: #000; font-weight: 600; text-decoration: none; }
.read-more:hover { text-decoration: underline; }
</style>
</head>

<body>
<div class="nav-img">
    <h2 class="text-center mt-5 " style="font-weight: 700; font-size: 38px;">Blog</h1>
</div>

<div class="container py-5">
  <div class="row g-4">

    <!-- Blog Card 1 -->
    <div class="col-lg-4 col-md-6">
      <div class="blog-card">
        <img src="assets/images/TRinUAE.webp" alt="">
        <div class="blog-content">
          <span class="blog-date">November 06, 2025</span>
          <h3 class="blog-title">Intellectual Property UAE</h3>
          <p class="blog-desc">Intellectual property (IP) has become one of the most valuable assets for businesses, entrepreneurs...</p>
          <a href="https://right-trademark.com/blog/intellectual-property-registration-uae" class="read-more">Read more</a>
        </div>
      </div>
    </div>

    <!-- Blog Card 2 -->
    <div class="col-lg-4 col-md-6">
      <div class="blog-card">
        <img src="assets/images/regcom.webp" alt="">
        <div class="blog-content">
          <span class="blog-date">November 07, 2025</span>
          <h3 class="blog-title">Brand Registration in Dubai, UAE</h3>
          <p class="blog-desc">Dubai has become the global center of innovation, entrepreneurship, and brand creation...</p>
          <a href="https://right-trademark.com/blog/how-to-register-a-brand-in-dubai-uae" class="read-more">Read more</a>
        </div>
      </div>
    </div>

    <!-- Blog Card 3 -->
    <div class="col-lg-4 col-md-6">
      <div class="blog-card">
        <img src="assets/images/tser.webp" alt="">
        <div class="blog-content">
          <span class="blog-date">November 12, 2025</span>
          <h3 class="blog-title">UAE Trademark Search</h3>
          <p class="blog-desc">Before investing your time, money, and effort in building your brand in the UAE, it is very essential to be...</p>
          <a href="https://right-trademark.com/blog/trademark-search-dubai-uae" class="read-more">Read more</a>
        </div>
      </div>
    </div>
    
        <!-- Blog Card 4 -->
    <div class="col-lg-4 col-md-6">
      <div class="blog-card">
        <img src="assets/images/regtruae.webp" alt="">
        <div class="blog-content">
          <span class="blog-date">March 30, 2026</span>
          <h3 class="blog-title">Trademark Registration UAE</h3>
          <p class="blog-desc">The registration of the UAE Trademark is one of the most crucial processes for any kind of business to establish...</p>
          <a href="https://right-trademark.com/blog/uae-trademark-registration-process-cost" class="read-more">Read more</a>
        </div>
      </div>
    </div>
    
    
         <!-- Blog Card 5 -->
    <div class="col-lg-4 col-md-6">
      <div class="blog-card">
        <img src="assets/images/TRinUAE.webp" alt="">
        <div class="blog-content">
          <span class="blog-date">November 25, 2025</span>
          <h3 class="blog-title">Trademark Consultant UAE</h3>
          <p class="blog-desc">A Complete Guide to Protecting Your Brand in the United Arab Emirates...</p>
          <a href="https://right-trademark.com/blog/trademark-consultant-uae" class="read-more">Read more</a>
        </div>
      </div>
    </div>
    
    
     <!-- Blog Card 6 -->
    <div class="col-lg-4 col-md-6">
      <div class="blog-card">
        <img src="assets/images/TRinUAE.webp" alt="Trademark Myths vs Facts">
        <div class="blog-content">
          <span class="blog-date">January 22, 2026</span>
          <h3 class="blog-title">Trademark Myths vs Facts</h3>
          <p class="blog-desc">Entrepreneurs invest time, money, and creativity into building a brand, yet many underestimate the importance...</p>
          <a href="https://right-trademark.com/blog/trademark-uae-myths-and-facts" class="read-more">Read more</a>
        </div>
      </div>
    </div>
    
    
    <!-- Blog Card 6 -->
    <div class="col-lg-4 col-md-6">
      <div class="blog-card">
        <img src="assets/images/nametagline.webp" alt="Trademark Logo vs Name vs Tagline">
        <div class="blog-content">
          <span class="blog-date">January 29, 2026</span>
          <h3 class="blog-title">Trademark Logo vs Name vs Tagline</h3>
          <p class="blog-desc">In the process of creating a brand, it is as important to protect your intellectual property as it is to market it...</p>
          <a href="https://right-trademark.com/blog/trademark-logo-vs-name-vs-tagline" class="read-more">Read more</a>
        </div>
      </div>
    </div>
    
    
    <!-- Blog Card 6 -->
    <div class="col-lg-4 col-md-6">
      <div class="blog-card">
        <img src="assets/images/traobjuae.webp" alt="Trademark Objection Process UAE">
        <div class="blog-content">
          <span class="blog-date">February 06, 2026</span>
          <h3 class="blog-title">Trademark Objection Process in the UAE</h3>
          <p class="blog-desc">In the UAE, a trademark objection, also known as a trademark opposition, is a legal procedure whereby third parties...</p>
          <a href="https://right-trademark.com/blog/trademark-objection-uae" class="read-more">Read more</a>
        </div>
      </div>
    </div>
    
    <!-- Blog Card 6 -->
    <div class="col-lg-4 col-md-6">
      <div class="blog-card">
        <img src="assets/images/onlinebrandgrowth.webp" alt="Online Brand Growth">
        <div class="blog-content">
          <span class="blog-date">March 04, 2026</span>
          <h3 class="blog-title">Trademark for Online Growth</h3>
          <p class="blog-desc">In today’s online-centric business world, your online visibility is what will make or break your business...</p>
          <a href="https://right-trademark.com/blog/trademark-registration-for-online-brand-growth" class="read-more">Read more</a>
        </div>
      </div>
    </div>
    
    

  </div>
</div>

</body>
</html>



  @include('Layouts.footer')





