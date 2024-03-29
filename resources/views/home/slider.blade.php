
  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">
        @foreach ($propertydata as $sliderdata)
        <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{$propertydata->image}})">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
              <div class="table-cell">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="intro-body">
                        <p class="intro-title-top">{{$propertydata->location}}
                          <br> {{$propertydata->keywords}}
                        </p>
                        <h1 class="intro-title mb-4 ">
                          <span class="color-b">204 </span> Mount
                          <br> {{$propertydata->location}}
                        </h1>
                        <p class="intro-subtitle intro-price">
                          <a href="#"><span class="price-a">{{$propertydata->type}} | {{$propertydata->moneytype}} {{$propertydata->price}}</span></a>
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
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

