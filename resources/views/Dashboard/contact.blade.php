@extends('Layout.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('public/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <div>
    @if(session('success'))
    <div class="alert alert-success">
      <center>
  <strong>{{session('success')}}</strong> We receive your responce!!</center>
</div>
@endif
</div>
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-8">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon">
		          		<span class="icon-map-o"></span>
		          	</div>
		            <p><span>Address:</span> Jaipur, Rajasthan,India 302031</p>
		          </div>
		          <div class="col-md-4 text-center border-height py-4">
		          	<div class="icon">
		          		<span class="icon-mobile-phone"></span>
		          	</div>
		            <p><span>Phone:</span> <a href="tel://8949764990">+91 8949764990</a></p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon">
		          		<span class="icon-envelope-o"></span>
		          	</div>
		            <p><span>Email:</span> <a href="mailto:info@studybaba.in">info@studybaba.in</a></p>
		          </div>
		        </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
          	<h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>
            <form action="{{'contact/create'}}" class="bg-light p-5 contact-form" method="post">
             @csrf
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email"required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject"required>
              </div>
              <div class="form-group">
                <textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>


@endsection
