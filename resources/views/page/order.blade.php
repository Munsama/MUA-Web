@extends('page.admin')
@section('contentadmin')
 <style>
* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #F66666;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}
.field-width{
  background-color: #f1f1f1;
  color: black;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          <form action="{{ route('order.store') }}" method="post">
          {{csrf_field()}}
          <div class="container">
          <h1>Tambah Data Order List</h1>
          <hr>
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
          <label for="text"><b>Jenis Rias</b></label> <br>
          <select name="jenis_rias" class="field-width">
           
              @foreach($data_rias as $rias)
              <option value="{{$rias->jenis_rias}}">{{$rias->jenis_rias}}</option>
              @endforeach
          
          </select>
            <hr><label for="text"><b>Nama Perias</b></label> <br>
            <select name="nama_perias"  class="field-width">
           
                @foreach($nama_perias as $perias)
                <option value="{{$perias->nama_perias}}">{{$perias->nama_perias}}</option>
                @endforeach
             
            </select>
        <hr>
       
        <label for="text"><b>Harga</b></label> <br>
          <input type="text" placeholder="Enter Harga" name="harga" required>
        <hr>
        <label for="text"><b>Alamat</b></label> <br>
          <input type="text" placeholder="Enter Alamat" name="alamat" required>
          <hr>
    <button type="submit" class="registerbtn">Tambah</button>
  </div>
</form>
<div class="sparkline8-hd">
    <div class="main-sparkline8-hd" >
        <h1>Daftar Order Menu</h1>
        <div class="sparkline8-outline-icon">
            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
            <span><i class="fa fa-wrench"></i></span>
            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<div class="sparkline8-graph">
    <div class="static-table-list">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perias</th>
                    <th>Jenis Rias</th>
                    <th>Harga</th>
                    <th>Alamat</th>
                  </tr>
            </thead>
            <tbody>
                @foreach ($ordermenu as $order)
                <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->nama_perias}}</td>
                <td>{{$order->jenis_rias}}</td>
                <td>{{$order->harga}}</td>
                <td>{{$order->alamat}}</td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>

</section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
