@extends('layout.frontend.master')
@section('namahome')
active
@stop
@section('judul')
Home
@stop
@section('content')
<div class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Team</span>
            <h2 class="mb-4">Make Up Artist</h2>
            <p>Kami bekerja sama dengan MUA yang telah berpengalaman di bidangnya.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-5 ftco-animate">
            <div class="block-10">
              <div class="person-info mb-2">
                <span class="name">Adi Adrian</span>
                <span class="position">Traditional Wedding Make Up</span>
              </div>
              <img src="images/person1.PNG" alt="" class="img-fluid mb-3">
              <p>Telah menekuni bidang MUA sejak tahun 2010 dan telah dipercaya oleh masyarakat Indonesia.</p>
            </div>
          </div>
          <div class="col-md-4 mb-5 ftco-animate">
            <div class="block-10">
              <div class="person-info mb-2">
                <span class="name">Marlene Hariman</span>
                <span class="position">Photoshoot Make Up</span>
              </div>
              <img src="images/person2.PNG" alt="" class="img-fluid mb-3">
              <p>Telah merias model terkenal di Indonesia. Diundang dalam banyak tim photoshoot.</p>
            </div>
          </div>
          <div class="col-md-4 mb-5 ftco-animate">
            <div class="block-10">
              <div class="person-info mb-2">
                <span class="name">Khadijah Azzahra</span>
                <span class="position">Modern Wedding Make Up</span>
              </div>
              <img src="images/person3.PNG" alt="" class="img-fluid mb-3">
              <p>Telah dipercaya untuk merias banyak pengantin di Indonesia.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Customer Says</span>
            <h2 class="mb-4">Apa kata mereka ?</h2>
            
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/raisa.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Thanks to Mekapp for the best looks u gave!</p>
                    <p class="name">Raisa Adriana</p>
                    <span class="position">Popular Singer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/paula.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Mekapp membuatku lebih percaya diri saat aku melakukan pekerjaanku! I Love U Mekapp:*</p>
                    <p class="name">Paula Verhouven</p>
                    <span class="position">Model</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/chelsea.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Mekapp memudahkanku menemukan MUA yang aku butuhkan. Terima kasih Mekapp:)</p>
                    <p class="name">Chelsea Islan</p>
                    <span class="position">Actress</span>
                  </div>
                </div>
              </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   @stop 