@extends('layout.frontend.master2')
@section('content2')
    <section class="ftco-booking">
    	<div class="container">
    		<div class="row align-items-center">
					
    				<h3 class="mb-4 mb-lg-0">Booking Perias</h3>
				</div>
				@if(Session::has('success'))
					<div class="alert alert-success">
					  <strong>Success!</strong> {{ Session::get('success') }}.
					</div>
					@endif
					@if($errors->any())
					<div class="alert alert-danger">
					  <strong>Failed!</strong> {{ Session::get('error') }}.
					</div>
					@endif
    			<div class="col-lg-10">
                <form action="bookingperias" method="post" class="booking-form">
	    				<div class="d-lg-flex align-items-md-end">
		    				<div class="form-group mb-3 mb-lg-0 mr-4">
									{{csrf_field()}}
		    					<label for="#">Tanggal Rias</label>
		    					<input name="tanggal" type="date" class="form-control" placeholder="Tanggal Rias">
		    				</div>
		    			
								<?php
								$data_rias=\App\jenisriasan::all();
								?>
		    				<div class="form-group mb-3 mb-lg-0 mr-4">
	      					    <label for="#">Tipe Rias</label>
	      					    <div class="form-field">
	        					    <div class="select-wrap">
	                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                                        <select name="jenis_rias" id="" class="form-control" name="jenis_rias">
													@foreach($data_rias as $rias)
													<option value="{{$rias->id}}">{{$rias->jenis_rias}}</option>
													@endforeach
	                                        </select>
	                                    </div>
		                            </div>
                                </div>
                                <?php
								$nama_perias=\App\perias::all();
								?>
		    				</select>
							<br>
							<div class="form-group mb-3 mb-lg-0 mr-4">
							<label for="text">Nama Perias</label>
							<div class="form-field">
	        				<div class="select-wrap">
	                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="nama_perias"  class="form-control">
                                @foreach($nama_perias as $perias)
                                <option value="{{$perias->nama_perias}}">{{$perias->nama_perias}}</option>
                                @endforeach
							</select>
							</div>
						</div>
						</div>
						<div class="form-group mb-3 mb-lg-0 mr-4">
								<label for="inputAddress">Alamat</label>
									<input type="text" name="alamat" class="form-control" id="inputAddress" placeholder="Alamat">
							  </div>
						<div class="form-group mb-3 mb-lg-0 mr-4">
								<label for="text">Harga</label>
										<input type="text"name="harga" class="form-control" id="harga" placeholder="Harga">
								</div>
								<div class="form-group mb-3 mb-lg-0 mr-4">
										<label for="text">Username</label>
												<input type="text" name="uname" class="form-control" id="uname" value="{{Session::get('uname')}}">
												
										</div>
	                  </div>
		              </div>
								
								
                        
		    		
			<div class="form-group">
		        <button type="submit" value="Book" class="btn btn-primary py-3 px-4">BOOk</button>
            </div>
@endsection
								