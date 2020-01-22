@extends('Layout.app2')
@section('content')
            <div class="content">
                <div class="row">
                    <div class="col-sm-8 col-4">
                        <h4 class="page-title">Blog</h4>
                    </div>
                    <div class="col-sm-4 col-8 text-right m-b-30">
                        <a class="btn btn-primary btn-rounded float-right" href="{{'/blog_add'}}"><i class="fa fa-plus"></i> Add Blog</a>
                    </div>
                </div>
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="blog grid-blog">
                            <div class="m-b-30">
                        <a class="btn btn-primary btn-rounded float-right" href="/blog_edit/{{"$blog->id"}}" ><i class="fa fa-plus"></i> Edit Blog</a> 
                        </div><br>
                            <div class="blog-image">
                                <a href="blog-details.html"><img class="img-fluid" src="admin_assets/img/blog/blog-01.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title"><a href="blog-details.html">{{$blog -> title}}</a></h3>
                                <p>{{$blog -> description}}</p>
                                <a href="/blog_show/{{"$blog->id"}}" class="read-more"><i class="fa fa-long-arrow-right"></i> Read More</a>
                               
                                <div class="blog-info clearfix">
                                    <div class="post-left">
                                        <ul>
                                            <li><a href="#."><i class="fa fa-calendar"></i> <span>{{$blog->created_at->format('M,d,Y')}}</span></a></li>
                                            
                                        </ul>
                                        
                                    </div>
                              
                                    <div class="post-right"><a href="#."><i class="fa fa-heart-o"></i>21</a> <a href="#."><i class="fa fa-eye"></i>8</a> <a href="#."><i class="fa fa-comment-o"></i>17</a></div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
           @endsection