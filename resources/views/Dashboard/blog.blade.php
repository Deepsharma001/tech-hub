@extends('Layout.app')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
        @foreach($blogs as $blog)
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="/blog_single/{{"$blog->id"}}" class="block-20 d-flex align-items-end" style="background-image: url('{{ URL::asset('public/images/'.$blog->image) }}');">
								<div class="meta-date text-center p-2">
                  <span class="day">{{$blog->created_at->format('d')}}</span>
                  <span class="mos">{{$blog->created_at->format('M')}}</span>
                  <span class="yr">{{$blog->created_at->format('Y')}}</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">{{$blog->title}}</a></h3>
                <p>{{$blog->description}}</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
     
        <div class="row mt-5 justify-content-center ">
        @if($blog->count() < 10) 
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
              <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <!-- <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li> -->
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
        
        @else
        {{ $blogs->links() }}
        @endif
        </div>
        
			</div>
		</section>
@endsection