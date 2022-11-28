@extends('layout.frontend.master')
@section('namaport')
active
@stop
@section('judul')
Portfolio
@stop
@section('content')
    <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Works</span>
            <h2 class="mb-4">Intip hasil pekerjaan MUA Mekapp terfavorit di bawah ini untuk mengetahui kemampuan dan keprofesionalan mereka</h2>
            <p>Kemampuan MUA Mekapp dapat dilihat dari hasil-hasil make up yang telah dikerjakan pada beberapa klien Mekapp.</p>
          </div>
        </div>
        <div class="row">
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image" style="background-image: url('images/work1.jpeg'); " data-scrollax=" properties: { translateY: '-20%'}">
            </a>
            <div class="text">
              <h4 class="subheading">Traditional Wedding Make Up</h4>
              <h2 class="heading"><a href="portfolio.html"></a>Melody Prima memilih Mekapp untuk menyewa jasa MUA dalam pernikahannya</h2>
              <p>Looks yang dipakai oleh Melody Prima di samping adalah hasil karya Marlene</p>
              <p><a href="portfolio.html" class="btn btn-primary px-4">@MarleneHariman</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image image-2 order-2" style="background-image: url('images/work2.jpg');" data-scrollax=" properties: { translateY: '-20%'}"></a>
            <div class="text order-1">
              <h4 class="subheading">Korean Make Up</h4>
              <h2 class="heading"><a href="portfolio.html">Terlihat 5 tahun lebih muda dengan Korean Looks Make Up</a></h2>
              <p>Korean looks dapat menjadi pilihan ketika kamu ingin hangout bersama teman lama ataupun dengan kekasih tercinta. Looks ini akan menjadikanmu lebih percaya diri saat bertemu dengan teman lamamu loh. Tertarik untuk mencoba?</p>
              <p><a href="portfolio.html" class="btn btn-primary px-4">@DeviennaMakeUp</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image" style="background-image: url('images/work3.png'); " data-scrollax=" properties: { translateY: '-20%'}"></a>
            <div class="text">
              <h4 class="subheading">Party Make Up</h4>
              <h2 class="heading"><a href="portfolio.html">Diundang ke pesta? Looks ini bisa jadi pilihan make up looksmu loh</a></h2>
              <p>Make up elegant ini akan membuat semua mata memandangmu saat di pesta. Make Up disamping adalah hasil karya dari Adi Adriana yang memiliki julukan "the most wanted" di kalangan MUA Indonesia</p>
              <p><a href="portfolio.html" class="btn btn-primary px-4">@AriAdriana</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image image-2 order-2" style="background-image: url('images/work4.jpg');" data-scrollax=" properties: { translateY: '-20%'}"></a>
            <div class="text order-1">
              <h4 class="subheading">Graduation Make Up</h4>
              <h2 class="heading"><a href="portfolio.html">Ingin tampil cantik di hari wisuda kamu? Mekapp solusinya!</a></h2>
              <p>Hari kelulusan merupakan hari yang tak dapat diulang kembali dalam hidupmu. Kamu tentu ingin tampil cantik dan percaya diri di hari wisuda bukan?</p>
              <p><a href="portfolio.html" class="btn btn-primary px-4">@HumairaMakeUp</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image" style="background-image: url('images/work5.png'); " data-scrollax=" properties: { translateY: '-20%'}"></a>
            <div class="text">
              <h4 class="subheading">Barbie Looks</h4>
              <h2 class="heading"><a href="portfolio.html">Tampil cantik dan menggemaskan layaknya boneka barbie dengan Barbie Looks</a></h2>
              <p>Barbie looks kini telah popular di Indonesia.Tertarik untuk mencobanya?</p>
              <p><a href="portfolio.html" class="btn btn-primary px-4">@KhadijahAzzahra</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image image-2 order-2" style="background-image: url('images/work6.jpg');" data-scrollax=" properties: { translateY: '-20%'}"></a>
            <div class="text order-1">
              <h4 class="subheading">Natural Make Up</h4>
              <h2 class="heading"><a href="portfolio.html">Looks ini memberikanmu kesan Simply Beautiful</a></h2>
              <p>Make Up Natural yang ringan ini dapat dijadikan pilihan ketika kamu ingin menghadiri acara non-formal. Mekapp memiliki banyak pilihan MUA yang dapat kamu sewa jasanya untuk looks ini.</p>
              <p><a href="portfolio.html" class="btn btn-primary px-4">@IrzaninoSetiawan</a></p>
            </div>
          </div>
        </div>
        <!-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->
    </section>
    @stop