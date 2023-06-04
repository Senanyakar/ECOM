@extends('layouts.frontbase')
 
@section('title', 'Projects')
 
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
              <h1 class="title-single">Emlak Haberleri</h1>
              <span class="color-text-a">Haber listeleri</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('home_index')}}">Ana Sayfa</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Haber listeleri
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- =======  Blog Grid ======= -->
    <section class="news-grid grid">
      <div class="container">
        <div class="row">
          @foreach ($newsdata as $item)
          <a class="col-md-6" href="{{route('home_news_single',['id'=>$item->id])}}">
            <div >
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="{{Storage::url($item->image)}}" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <i class="category-b">{{$item->keyword}}</i>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <i style=""> {{$item->title}}
                          <br> new</i>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">{{$item->created_at}}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>


          @endforeach


        </div>
        <!--
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
        -->
      </div>
    </section><!-- End Blog Grid-->

  </main><!-- End #main -->
@endsection