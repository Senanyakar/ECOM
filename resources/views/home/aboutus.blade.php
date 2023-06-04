@extends('layouts.frontbase')
 
@section('title', 'About us')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Yaratıcı İnsanlar İçin Harika Tasarımlar Yapıyoruz</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{asset('assets')}}/#">Ana Sayfa</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Hakkında
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="{{asset('assets')}}//img/slide-about-1.jpg" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">Açıklar İnşaat
                <span></span>
                <br> Emlak
              </h3>
              <p>Emlak & Proje satışı</p>
            </div>
          </div>
          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="{{asset('assets')}}//img/about-2.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-lg-2  d-none d-lg-block position-relative">
                <div class="title-vertical d-flex justify-content-start">
                  <span>Açıklar İnşaat </span>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d">Açıklar
                    <span class="color-d">inşaat</span> 
                    <br>kuruluşundan bu yana hem sıfır proje satışlarında hem de 2. El mülk satışlarında alıcı ile satıcı arasında güvenli bir köprü oluşturmaktır..
                  </h3>
                </div>
                <p class="color-text-a">
                 Bu mülk çeşitleri içerisinde satılık tarla,
                 arsa, bağ bahçe olmakla birlikte, şehir merkezinde
                 apartman dairesi, dükkan ve iş yeri de bulunmaktadır.
                 Bu geniş portföy çeşidinin dışında, firma olarak gelişmekte
                 olan bölgelerdeki arsa sahiplerini, başarılı inşaat
                 firmaları ile bir araya getirip, arsalarına proje
                 geliştirerek kat karşılığı inşaat yaptırmaktayız.
                 Açıklar inşaat, sadece bir emlak pazarlama şirketi değil,
                 aynı zamanda problemli arsa ve arazilere çözüm hizmeti sunan
                 bir çözüm merkezidir.
                 
                </p>
                <p class="color-text-a">
                  Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                  Mauris blandit aliquet
                  elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed,
                  convallis at tellus.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  </main><!-- End #main -->
@endsection