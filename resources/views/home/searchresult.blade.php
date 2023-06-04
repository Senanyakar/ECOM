@extends('layouts.frontbase')

@section('title', 'Properties')

@section('content')
<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Amazing Properties</h1>
              <span class="color-text-a">Grid Properties</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('home_index')}}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Properties Grid
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->
    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="grid-option">
              <form>
                <select class="custom-select">
                  <option selected>All</option>
                  <option value="1">New to Old</option>
                  <option value="2">For Rent</option>
                  <option value="3">For Sale</option>
                </select>
              </form>
            </div>
          </div>
          @foreach ($propertydata as $item)
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">

                @if ($item->image == null)
                    <img src="{{route('home_property_single',['id'=>$item->id])}}" alt="" class="img-a img-fluid">
                @else
                    <img src="{{Storage::url($item->image)}}" alt="" class="img-a img-fluid">
                @endif

              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="">{{$item->Location}}
                        <br /> {{$item->title}}</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">{{$item->status}} | {{$item->price}}</span>
                    </div>
                    <a href="{{route('home_property_single',['id'=>$item->id])}}" class="link-a">Click here to view
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span>
                          <sup>{{$item->area}}</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span>{{$item->beds}}</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span>{{$item->baths}}</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garages</h4>
                        <span>{{$item->garage}}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        <div class="row">
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="{{asset('assets')}}/#" tabindex="-1">
                    <span class="bi bi-chevron-left"></span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="{{asset('assets')}}/#">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="{{asset('assets')}}/#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="{{asset('assets')}}/#">3</a>
                </li>
                <li class="page-item next">
                  <a class="page-link" href="{{asset('assets')}}/#">
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->
@endsection

