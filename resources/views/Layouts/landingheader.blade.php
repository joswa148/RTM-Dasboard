<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Robots" content="INDEX,FOLLOW">
    <title>Document</title>
    @php
        $rtmVersion = time();
    @endphp

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{ $rtmVersion }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />
   
   
   <!-- Tracker script -->

<script
  defer
  src="https://ftehcojhebcsmxvmzpar.supabase.co/functions/v1/tracker-script"
  data-endpoint="https://ftehcojhebcsmxvmzpar.supabase.co/functions/v1/visitor-track"
></script>
   
    

</head>
<body class="la">
     <div class="container py-3">
    <div class="row align-items-center">
      <!-- Left Logo Column -->
      <div class="col-md-6 col-6">
        <img src="{{ asset('assets/images/Simplification.webp') }}" alt="Logo">

      </div>

      <!-- Right Buttons Column -->
      <div class="col-md-6 col-6 text-end">
        <a href="#" class="btn btn-login me-2">LOG IN</a>
        <a href="https://wa.me/91XXXXXXXXXX" class="btn btn-whatsapp  head-top-butto">
          <img src="{{ asset('assets/images/icon1.svg') }}" alt=""> WhatsApp Now
        </a>
      </div>
    </div>
  </div>





