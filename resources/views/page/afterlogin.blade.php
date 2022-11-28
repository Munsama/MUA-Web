@extends('layout.frontend.master2')
@section('afterlogin')
active
@stop
		
@section('content2')
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="cart/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="cart/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="cart/css/owl.carousel.css"/>
	<link rel="stylesheet" href="cart/css/style.css"/>
	<link rel="stylesheet" href="cart/css/animate.css"/>
	<section class="ftco-booking">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-lg text-lg-right">
    				<h3 class="mb-4 mb-lg-0">Booking Perias</h3>
    			</div>
    			<div class="col-lg-10">
	    			<form action="/search" method="POST" role="search" class="booking-form">
	    				<div class="d-lg-flex align-items-md-end">
		    				<div class="form-group mb-3 mb-lg-0 mr-4">
									{{csrf_field()}}
		    					<label for="#">Tanggal Rias</label>
		    					<input type="text" class="form-control checkin_date" placeholder="Tanggal Rias">
		    				</div>
		    				<!--<div class="form-group mb-3 mb-lg-0 mr-4">
		    					<label for="#">Check-out Date</label>
		    					<input type="text" class="form-control checkout_date" placeholder="Check-out date">
								</div>-->
								<?php
								$data_rias=\App\jenisriasan::all();
								?>
		    				<div class="form-group mb-3 mb-lg-0 mr-4">
	      					<label for="#">Tipe Rias</label>
	      					<div class="form-field">
	        					<div class="select-wrap">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="jenis_rias" id="" class="form-control" name="q">
													@foreach($data_rias as $rias)
													<option value="{{$rias->id}}">{{$rias->jenis_rias}}</option>
													@endforeach
	                    </select>
	                  </div>
		              </div>
								</div>
								<div class="form-group mb-3 mb-lg-0 mr-4">
    						<label for="inputAddress">Alamat</label>
    							<input type="text" class="form-control" id="inputAddress" placeholder="Alamat">
  							</div>
		    				{{-- <div class="form-group mb-3 mb-lg-0 mr-4">
	      					<label for="#">Jumlah Orang</label>
	      					<div class="form-field">
	        					<div class="select-wrap">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="" id="" class="form-control">
	                    	<option value="">1</option>
	                      <option value="">2</option>
	                      <option value="">3</option>
	                      <option value="">4</option>
	                      <option value="">5</option>
	                    </select>
	                  </div>
		              </div>
	              </div> --}}
								
		    				<!--<div class="form-group mb-3 mb-lg-0 mr-4">
	      					<label for="#">Children</label>
	      					<div class="form-field">
	        					<div class="select-wrap">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="" id="" class="form-control">
	                    	<option value="">1</option>
	                      <option value="">2</option>
	                      <option value="">3</option>
	                      <option value="">4</option>
	                      <option value="">5</option>
	                    </select>
	                  </div>
		              </div>
	              </div> -->
		            <div class="form-group">
		              <input type="submit" value="Search" class="btn btn-primary py-3 px-4">
								</div>
								
								<hr> <br>
								<?php
								$ordermenu=\App\order::all();
								?>
					
							</div> 
						</div>
						</form>
						<div class="col-md-12"></div>
						
			</div>
			
			
			</div>
			<div class="container">
				@if(isset($details))
					<p>Hasil Pencarian</p>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Perias</th>
								<th>Jenis Rias</th>
								<th>Harga</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($details as $ordermenu)
							<tr>
								<td>
										<td class="price-col">{{$order->id}}</td>
										<td class="price-col">{{$order->nama_perias}}</td>
										<td class="price-col">{{$order->jenis_rias}}</td>
										<td class="price-col">{{$order->harga}}</td>
										<td class="price-col"><a href="#" class="btn btn-primary">Book</a></td>
										</tr>
									 @endforeach
								</tbody>
							</table>
					@endif
				</div>

			<div class="container">
					<div class="row align-items-center">
						<div class="col-lg text-lg-right">
							
						</div>
						<div class="col-lg-10">
							<form action="#" class="booking-form">
								<div class="d-lg-flex align-items-md-end">
									
										<div class="col-lg-10">
												<center><div class="cart-table">
															<table align="center">
																	<thead>
																			<tr>
																					<th class="product-th">No</th>
																					<th class="product-th">Nama Perias</th>
																					<th>Jenis Rias</th>
																					<th>Harga</th>
																					<th class="total-th">Action</th>
																				</tr>
																	</thead>
																	<tbody>
																			@foreach ($ordermenu as $order)
																			<tr>
																			<td class="price-col">{{$order->id}}</td>
																			<td class="price-col">{{$order->nama_perias}}</td>
																			<td class="price-col">{{$order->jenis_rias}}</td>
																			<td class="price-col">{{$order->harga}}</td>
																			<td class="price-col"><a href="{{route('bookingperias.index')}}" class="btn btn-primary">Book</a></td>
																			</tr>
																		 @endforeach
																	</tbody>
																</table>
																</div>
						
								</div> 
							</div>
							</form>
							<div class="col-md-12"></div>
							
				</div>
				
				
				</div>
				
		</section>
		<script src="cart/js/jquery-3.2.1.min.js"></script>
	<script src="cart/js/bootstrap.min.js"></script>
	<script src="cart/js/owl.carousel.min.js"></script>
	<script src="cart/js/mixitup.min.js"></script>
	<script src="cart/js/sly.min.js"></script>
	<script src="cart/js/jquery.nicescroll.min.js"></script>
	<script src="cart/js/main.js"></script>
    </body>
@Stop
