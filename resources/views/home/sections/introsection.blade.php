  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">
        @foreach ($propertydata as $sliderdata)
        <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{Storage::url($sliderdata->image)}})">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
              <div class="table-cell">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="intro-body">
                        <p class="intro-title-top">{{$sliderdata->location}}
                          <br> {{$sliderdata->beds}} oda
                        </p>
                        <h1 class="intro-title mb-4 ">
                          <span class="color-b">{{$sliderdata->title}} </span> {{$sliderdata->area}}
                          <br> {{$sliderdata->location}}
                        </h1>
                        <p class="intro-subtitle intro-price">
                          <a href="{{route('home_property_single',['id'=>$sliderdata->id])}}"><span class="price-a">@if ($sliderdata->price == NULL)
                            TIKLA
                          @else
                          {{$sliderdata->type}}  {{$sliderdata->moneytype}} | {{$sliderdata->price}}
                          @endif</span></a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach


    </div>
  </div>
