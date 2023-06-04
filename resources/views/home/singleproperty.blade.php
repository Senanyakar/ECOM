@extends('layouts.frontbase')
@section('content')
<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">{{$propertydata->title}}</h1>
              <span class="color-text-a">{{$propertydata->location}} {{$propertydata->id}}</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('home_index')}}">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="{{route('home_property')}}">Properties</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{$propertydata->keywords}}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">

                <div class="carousel-item-b swiper-slide">
                    <img src="{{Storage::url($propertydata->image)}}" alt="" class="img-a img-fluid">
                </div>

              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">

                  @if ($propertydata->price != null)
              
                  <div class="card-header-c d-flex ">
                    <div class="card-box-ico d-flex align-items-center justify-content-between">
                      <div class="title-c  no-margin">{{$propertydata->moneytype}} | </div>
                        <div class="title-c no-margin ml-3">  {{$propertydata->price}}</div>
                    </div>
                    <div class="card-title-c align-self-center pr-3 ">
                     
                    </div>
                  </div>
                  @elseif ($propertydata->sahibindenlink == null)
                  <div class="card-header-c d-flex">
                    <a href= "www.sahibinden.com" class="card-box-ico-link" style="">
                      <span  class="bi"></span>
                      <img  src="{{asset('assets')}}/img/sahibinden.png" class="property-icon-link" alt="">
                    </a>
                    <div class="card-title-c align-self-center">
                      <h5 class="title-c"></h5>
                    </div>
                  </div>
                  @else 



                    <div class="card-header-c d-flex">
                    <a href= "{{$propertydata->sahibindenlink}}" class="card-box-ico-link" style="">
                      <span  class="bi"></span>
                      <img  src="{{asset('assets')}}/img/sahibinden.png" class="property-icon-link" alt="">
                    </a>
                    <div class="card-title-c align-self-center">
                      <h5 class="title-c"></h5>
                    </div>
                  </div>
                  @endif


                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Quick Summary</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Emlak ID:</strong>
                        <span>{{$propertydata->id}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Konumu:</strong>
                        <span>{{$propertydata->location}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Emlağın türü:</strong>
                        <span>House</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Durumu:</strong>
                        <span>{{$propertydata->status}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Alan:</strong>
                        <span>{{$propertydata->area}}
                          <sup>2</sup>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Oda sayısı:</strong>
                        <span>{{$propertydata->beds}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Banyo sayısı:</strong>
                        <span>{{$propertydata->baths}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Park Yeri:</strong>
                        <span>{{$propertydata->garage}}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Açıklama</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    {{$propertydata->description}}
                  </p>
                  <p class="description color-text-a no-margin">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
                    malesuada. Quisque velit nisi,
                    pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                  </p>
                </div>
                <div class="row section-t3">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Kolaylıklar</h3>
                    </div>
                  </div>
                </div>
                <div class="amenities-list color-text-a">
                  <ul class="list-a no-margin">
                    {{$propertydata->amenities}}
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-video-tab" data-bs-toggle="pill" href="{{asset('assets')}}/#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">Video</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-plans-tab" data-bs-toggle="pill" href="{{asset('assets')}}/#pills-plans" role="tab" aria-controls="pills-plans" aria-selected="false">Kat Plani</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-map-tab" data-bs-toggle="pill" href="{{asset('assets')}}/#pills-map" role="tab" aria-controls="pills-map" aria-selected="false">Konum</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                @if ($propertydata->videolink == null)
                <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                @else
                    {!!$propertydata->videolink!!}
                @endif

              </div>
              <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                @if ($propertydata->floorplans == null)
                    <img src="{{asset('assets')}}/img/plan2.jpg" alt="" class="img-fluid">
                @else
                    {!!$propertydata->floorplans!!}
                @endif

              </div>
              <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                   {!!$propertydata->locationlink!!}
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->

@endsection
