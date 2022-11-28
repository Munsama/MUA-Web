@extends('page.admin')
@section('contentadmin')
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
            <?php
            $permintaan=\App\booking::all();
            ?>

	<!-- Page -->
	<div class="page-area cart-page spad">
        <div style="background-color:snow;">
		<div class="container" >
			<div class="cart-table">
				<table class="table stripped-table">
					<thead>
						<tr>
                            <th >Tipe Riasan</th>
                            <th>Perias</th>
                            <th>Alamat Rias</th>
							<th>Harga</th>
                            <th>Jumlah Orang</th>
                            <th>Username</th>
                            <th>Total</th>
                            <th>Action</th>
						</tr>
					</thead>
					<tbody>
                        @foreach($permintaan as $book)
						<tr>
							<td class="price-col">
									{{$book->jenis_rias}}
                            </td>
                            <td class="price-col">
								{{$book->nama_perias}}
                            </td>
                            <td class="price-col">{{$book->alamat}}</td>
							<td class="price-col">{{$book->harga}}</td>
                            <td class="price-col" >01</td>
                            <td class="price-col">{{$book->uname}}</td>
                            <td class="total-col">{{$book->harga}}</td>
                            <td align="center"><button href="#">Konfirmasi</button><button href="#">Tolak</button></td>
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
