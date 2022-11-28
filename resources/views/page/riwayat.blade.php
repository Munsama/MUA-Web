@extends('layout.frontend.master2')
@section('riwayat')
active
@stop
@section('content2')
    <head>

	<!-- Favicon -->   
	    <link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	    <link rel="stylesheet" href="cart/css/bootstrap.min.css"/>
	    <link rel="stylesheet" href="cart/css/font-awesome.min.css"/>
	    <link rel="stylesheet" href="cart/css/owl.carousel.css"/>
	    <link rel="stylesheet" href="cart/css/style.css"/>
	    <link rel="stylesheet" href="cart/css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    </head>
    <body>


	<!-- Page -->
	<div class="page-area cart-page spad">
		<div class="container">
			<div class="cart-table">
				<table>
					<thead>
						<tr>
                            <th class="product-th">Tipe Riasan</th>
                            <th>Perias</th>
                            <th>Alamat Rias</th>
							<th>Harga</th>
							<th>Jumlah Orang</th>
							<th class="total-th">Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="product-col">
								<img src="img/product/cart.jpg" alt="">
								<div class="pc-title">
									<h4>Korean Looks</h4>
									<a href="#">Edit Product</a>
								</div>
                            </td>
                            <td class="price-col">
								Devienna
                            </td>
                            <td class="price-col">St. Marine No. 01</td>
							<td class="price-col">$59.90</td>
							<td class="price-col" >01</td>
							<td class="total-col">$59.90</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row cart-buttons">
				
				<div class="col-lg-7 col-md-7 text-lg-right text-left">
					<div class="site-btn btn-clear">Hapus Riwayat</div>
					<div class="site-btn btn-line btn-update">Update Riwayat</div>
				</div>
			</div>
		</div>
		
			</div>
		</div>
	</div>
	<!-- Page end -->




	<!--====== Javascripts & Jquery ======-->
	<script src="cart/js/jquery-3.2.1.min.js"></script>
	<script src="cart/js/bootstrap.min.js"></script>
	<script src="cart/js/owl.carousel.min.js"></script>
	<script src="cart/js/mixitup.min.js"></script>
	<script src="cart/js/sly.min.js"></script>
	<script src="cart/js/jquery.nicescroll.min.js"></script>
	<script src="cart/js/main.js"></script>
    </body>
@stop
