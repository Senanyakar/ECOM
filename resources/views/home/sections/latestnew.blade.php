    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Güncel Haberler</h2>
              </div>
              <div class="title-link">
                <a href="{{route('home_index')}}">Tüm Haberler
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="news-carousel" class="swiper">
          <div class="swiper-wrapper">

            @foreach ($newsdata as $items)

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="{{Storage::url($items->image)}}" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="{{route('home_news_single',['id'=>$items->id])}}" class="category-b">{{$items->keyword}}</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="{{route('home_news_single',['id'=>$items->id])}}">{{$items->title}}
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">{{$items->created_at}}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            @endforeach




          </div>
        </div>

        <div class="news-carousel-pagination carousel-pagination"></div>
      </div>
    </section><!-- End Latest News Section -->
