@include('Layouts.app')

    <div class="nav-img" >
        <h2 class="text-center mt-5 " style="font-weight: 700; font-size: 38px;">Contact Us</h2>
    </div>

    <!-- get touch -->
    <div class="contact-section">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-6  ">
                <h4 class="mb-3">Get in touch</h4>
                <!--<p class="text-muted mb-4">We’d love to hear from you. Please fill out this form.</p>-->
                <div class="form-box ">
                    
                    <?php
                    /*
                    <form id="myForm" >
                        <div class="mb-4 " >
                            <label >Name</label>
                          <input type="text" class="form-control"  required  />
                        </div>
                        <div class="mb-4">
                            <label >Email</label>
                          <input type="email" class="form-control"  required />
                        </div>
                        <div class="mb-4">
                             <label >Phone Number</label><br>
                            <input id="phone" type="tel" class="form-control"  required />
                            <input type="hidden" name="full_number" id="full_number" />
                        </div>
                        <div class="mb-4">
                            <label >Message</label>
                          <textarea class="form-control" rows="4" ></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit w-100 mt-2">Submit</button>
                    </form>
                    */
                    ?>
                    
                    <form id="myForm" method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        
                        <input type="hidden" name="source_url" id="source_url" value="{{ url()->current() }}">

                        <div class="mb-4">
                          <label for="name" class="form-label required">Name</label>
                          <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required aria-required="true">
                          @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        
                        <div class="mb-4">
                          <label for="email" class="form-label required">Email</label>
                          <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required aria-required="true">
                          @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        
                        <div class="mb-4">
                          <label for="phone" class="form-label required">Phone Number</label>
                          <input type="tel" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required aria-required="true">
                          @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        
                        <div class="mb-4">
                          <label for="message" class="form-label">Message</label>
                          <textarea id="message" name="message" class="form-control @error('message') is-invalid @enderror" rows="4" >{{ old('message') }}</textarea>
                          @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                      
                        @error('g-recaptcha-response')
                            <span class="text-danger d-block">{{ $message }}</span>
                            <br/>
                        @enderror
                    
                        <button type="submit" class="btn btn-submit w-100 mt-2">Submit</button>
                    
                        @if(session('success'))
                            <div class="alert alert-success mt-2">{{ session('success') }}</div>
                        @endif
                    </form>

                </div>
            </div>

      <!-- Contact Info -->
      <div class="col-lg-6">
        <div class="info-box">
          <h4 class="mb-3">We’d like to hear from you</h4>
           <!--<p class="text-muted mb-4">Got a question? Check our FAQs.</p>-->
          <div class="info-item ">
              <div>
             <div class="d-flex justify-content-between align-items-center ">
            <div class="info-label ">Phone</div>
            <i class="bi bi-telephone fs-3"></i>
             </div>
                <div  class=" " id="size" >Office Phone Number</div>
                <a href="tel:+97142217708" id="size" class="text-danger text-decoration-none d-inline-block">+971 4 221 7708</a>
                <a href="tel:+971562517290" id="size" class="text-danger text-decoration-none d-inline-block">+971 56 251 7290</a>
             
            </div>
          </div>
          <div class="info-item ">
            <div class="d-flex align-items-center justify-content-between">
                 <div class="info-label">Email</div>
            <i class="bi bi-envelope fs-3"></i>

                 </div>
              <div>
               
                <div class=""  id="size"> mail for information</div>
                <a href="mailto:sales@right-trademark.com" class="text-danger text-decoration-none" id="size">sales@right-trademark.com</a>
              </div>
            
          </div>
          <div class="info-item ">
            
              
                <div class="d-flex justify-content-between">
                    <div class="info-label">Office</div>
                 <i class="bi bi-geo-alt fs-3"></i>
                </div>
                <div id="size">Adreess</div>
                <div  class="text-danger" id="size">No – 413, Hamsha A Building, Karama, Dubai, UAE</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462560.68282783724!2d54.89781681599858!3d25.076280446331303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1754044770540!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>


<!-- form -->
<style>
  .form-label.required::after{
    content:" *";
    color:#dc3545;
    margin-left:4px;
  }
</style>
<script>document.getElementById('source_url').value = location.href;</script>
<!-- form end -->


<script>
  const input = document.querySelector("#phone");
  const hiddenInput = document.querySelector("#full_number");

  // Initialize intl-tel-input
  const iti = window.intlTelInput(input, {
    initialCountry: "ae",
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
  });

  // Allow only numbers in the input
  input.addEventListener("keypress", function (e) {
    if (!/[0-9]/.test(e.key)) {
      e.preventDefault();
    }
  });

  // Prevent pasting non-numeric characters
  input.addEventListener("paste", function (e) {
    const paste = (e.clipboardData || window.clipboardData).getData("text");
    if (!/^\d+$/.test(paste)) {
      e.preventDefault();
    }
  });

  // On form submit
  document.querySelector("#myForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const fullNumber = iti.getNumber(); // Gives full number like +919876543210
    hiddenInput.value = fullNumber;

    alert("Submitted: " + fullNumber);
  });
</script>


  
  @include('Layouts.footer')




