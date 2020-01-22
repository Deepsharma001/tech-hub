@extends('Layout.app2')
@section('content')
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Data Tables</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <h6 class="card-title text-bold">Default Datatable</h6>
                                <p class="content-group">
                                    This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.
                                </p>
								<div class="table-responsive">
									<table class="datatable table table-stripped ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>title</th>
                                            <th>image</th>
                                            <th>catagory</th>
                                            <th>date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($blogs as $blog)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$blog->title}}</td>
                                            <td>{{$blog->image}}</td>
                                            <td>{{$blog->catagory}}</td>
                                            <td>{{$blog->created_at->format('M,d,Y')}}</td>
                                            <td>$112,000</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            @endsection