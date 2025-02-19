<!DOCTYPE html>
<html lang="en">
<head>
<title>Business Buy</title>
	@include('include.css')
</head>
<body>                        
<!-------Start header section------->  
@include('include.header')
<!-------Emd header section------->



<div class="container py-md-3 tp-mt">
	 <div class="row">
	 	   <ul class="breadcrumb mb-0">
		          <li><a href="Index.php">Home</a></li>
		          <li>Contact Us</li>		          
		      </ul>
	 </div>
</div>

<section class="contact-bg py-md-5 py-2">
	   <div class="container inner">
	   	    <div class="row">
	   	    	  <div class="col-md-6 col-sm-6">
	   	    	  	    <div class="get-tuch">
	   	    	  	    	  <h2 class="w-100 d-block pb-md-4 mb-md-4 pb-2 mb-2">Get in touch</h2>
	   	    	  	    	  <p class="d-block text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
	   	    	  	    </div>
	   	    	  </div>
	   	    	  <div class="col-md-6 col-sm-6 cont-field">
					 <form action="{{ url('/contact') }}" method="POST" class="needs-validation" novalidate>
    @csrf  <!-- CSRF Token for Security -->

    <div class="form-group w-100 pb-3 mb-0">
        <input type="text" class="form-control" placeholder="Your Name" id="name" name="name" required>
        <div class="invalid-feedback">Please provide a valid name.</div>
    </div>

    <div class="form-group w-100 pb-3 mb-0">
        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
        <div class="invalid-feedback">Please provide a valid e-mail.</div>
    </div>

    <div class="form-group w-100 pb-3 mb-0">
        <input type="tel" class="form-control" id="phone_No" name="phone_No" placeholder="Phone No." required>
        <div class="invalid-feedback">Please provide a valid phone number.</div>
    </div>

    <div class="form-group w-100 pb-3 mb-0">
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
        <div class="invalid-feedback">Please provide a valid subject.</div>
    </div>

    <div class="form-group w-100 pb-3 mb-0">
        <textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
        <div class="invalid-feedback">Please enter your message.</div>
    </div>

    <div class="form-group w-100 text-center mb-0">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


	   	    	  </div>
	   	    </div>
	   </div>
</section>

<section class="cont-adrs-bg py-md-5 py-3">
	    <div class="container">
	    	  <div class="row">
	    	  	    <div class="col-md-6 col-sm-6">
	    	  	    	  <ul class="cont-adres w-100 d-block pl-0">
	    	  	    	  	    <strong class="w-100 d-block pb-2 mb-3">Registered Office:</strong>
	    	  	    	  	    <li><dd><i class="fa fa-map-marker" aria-hidden="true"></i></dd>57/2X, NSC Bose Road, Tollygunge,<br/> Kolkata - 700040,
                                West Bengal, India</li>
                                <strong class="w-100 d-block pt-4 pb-2 mb-3">Contact Details:</strong>
                                <li class="pb-3"><dd><i class="fa fa-phone" aria-hidden="true"></i></dd><a href="tel:+918100013323">+91 81000 13323</a></li>
                                <li class="pb-4"><dd><i class="fa fa-phone" aria-hidden="true"></i></dd><a href="tel:+913340010117">+91 33400 10117</a></li>
                                <li class="pb-3"><dd style="top:-4px;"><i class="fa fa-whatsapp" aria-hidden="true"></i></dd><a href="https://web.whatsapp.com/send?phone=+918100013323&amp;text=Hi,">+91 81000 13323</a></li>
                                <li class="pb-3"><dd style="top:-6px;"><i class="fa fa-envelope" aria-hidden="true"></i></dd><a href="mailto:info@businessbuy.in">info@businessbuy.in</a></li>
	    	  	    	  </ul>
	    	  	    </div>
	    	  	    <div class="col-md-6 col-sm-6">
	    	  	    	  <div class="map-bdr w-100 pt-2 px-2">
	    	  	    	  	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1843.2024165861374!2d88.34807350554408!3d22.4889893087656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0270e90d014f6b%3A0x42367044686b0b51!2s57%2F2%2C%20Netaji%20Subhash%20Chandra%20Bose%20Rd%2C%20Nehru%20Colony%2C%20Shanti%20Nagar%2C%20Ashok%20Nagar%2C%20Tollygunge%2C%20Kolkata%2C%20West%20Bengal%20700040!5e0!3m2!1sen!2sin!4v1648284160210!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	    	  	    	  </div>
	    	  	    </div>
	    	  </div>
	    </div>
</section>

<!--------Start footer section--------->
@include('include.footer')
<!--------End footer section--------->
                           
@include('include.js')

<script type="text/javascript">
 
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>