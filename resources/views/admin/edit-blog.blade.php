@extends('Layout.app2')
@section('content')
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Blog</h4>
                    </div>
                </div>
                <div class="row">
                
                    <div class="col-lg-8 offset-lg-2">
                        <form action="{{'/blog_edit/{id}'}}" method="post">
                        <input type="hidden" name="id" value="{{$blog->id}}">
                        @csrf
                        
                            <div class="form-group">
                                <label>Blog Name</label>
                                <input class="form-control" type="text"  name="title" value="{{$blog->title}}">
                            </div>
                            <div class="form-group">
                                <label>Blog Images</label>
                                <div>
                                    <input class="form-control" type="file" name="image"> 
                                    <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png. Maximum 10 images only.</small>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                        <div class="product-thumbnail">
											<img src="assets/img/blog/blog-thumb-01.jpg" class="img-thumbnail img-fluid" alt="">
                                            <span class="product-remove" title="remove"><i class="fa fa-close"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                        <div class="product-thumbnail">
											<img src="assets/img/blog/blog-thumb-02.jpg" class="img-thumbnail img-fluid" alt="">
                                            <span class="product-remove" title="remove"><i class="fa fa-close"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                        <div class="product-thumbnail">
                                            <img src="assets/img/blog/blog-thumb-03.jpg" class="img-thumbnail img-fluid" alt="">
                                            <span class="product-remove" title="remove"><i class="fa fa-close"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                        <div class="product-thumbnail">
											<img src="assets/img/blog/blog-thumb-04.jpg" class="img-thumbnail img-fluid" alt="">
                                            <span class="product-remove" title="remove"><i class="fa fa-close"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                        <div class="product-thumbnail">
											<img src="assets/img/placeholder-thumb.jpg" class="img-thumbnail img-fluid" alt="">
                                            <span class="product-remove" title="remove"><i class="fa fa-close"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                        <div class="product-thumbnail">
                                            <img src="assets/img/placeholder-thumb.jpg" class="img-thumbnail img-fluid" alt="">
                                            <span class="product-remove" title="remove"><i class="fa fa-close"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Blog Category</label>
                                        
                                        <select class="select" name="category">
                                        <option>Select category</option>
                                        @foreach($blogcat as $cat)
                                        
                                            <option>{{$cat->category_name}}</option>
                                          
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Blog Sub Category</label>
                                        <select class="select">
                                        <option>Select category</option>
                                        @foreach($blogcat as $cat)
                                        
                                            <option>{{$cat->category_name}}</option>
                                          
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
 <div class="form-group">
                                <label>Blog Description</label>
                                <textarea cols="30" rows="6" class="form-control" name = "description" value ="">{{$blog->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Tags <small>(separated with a comma)</small></label>
                                <input type="text" placeholder="Enter your tags" data-role="tagsinput" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="display-block">Blog Status</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="blog_active" value="option1" checked>
									<label class="form-check-label" for="blog_active">
									Active
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="blog_inactive" value="option2">
									<label class="form-check-label" for="blog_inactive">
									Inactive
									</label>
								</div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           @endsection