
    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Güncel Urunler</h2>
                </div>
                <div class="title-link">
                  <a href="{{route('home_property')}}">Tüm Urunler
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div id="property-carousel" class="swiper">
            <div class="swiper-wrapper">
                @foreach ($propertydata as  $item)
                <div class="carousel-item-b swiper-slide">
                    <div class="card-box-a card-shadow">
                      <div class="img-box-a">
                        <img src="{{Storage::url($item->image)}}" alt="" class="img-a img-fluid">
                      </div>
                      <div class="card-overlay">
                        <div class="card-overlay-a-content">
                          <div class="card-header-a">
                            <h2 class="card-title-a">
                              <a href="{{route('home_property_single',['id'=>$item->id])}}">{{$item->title}}
                                <br /> {{$item->location}}</a>
                            </h2>
                          </div>
                          <div class="card-body-a">
                            <div class="price-box d-flex">
                              <span class="price-a">{{$item->moneytype}}  |  {{$item->price}}</span>
                            </div>
                            <a href="{{route('home_property_single',['id'=>$item->id])}}" class="link-a">Görüntüle
                              <span class="bi bi-chevron-right">{{$item->type}}</span>
                            </a>
                          </div>
                          <div class="card-footer-a">
                            <ul class="card-info d-flex justify-content-around">
                              <li>
                                <h4 class="card-info-title">Urun Boyutu</h4>
                                <span>{{$item->area}}
                                  <sup>2</sup>
                                </span>
                              </li>
                              <li>
                                <h4 class="card-info-title">Adet</h4>
                                <span>{{$item->beds}}</span>
                              </li>
                              <li>
                                <h4 class="card-info-title">Fiyat</h4>
                                <span>{{$item->garage}}</span>
                              </li>
                            </ul>§
                          </div>
                        </div>
                      </div>
                    </div>
                </div><!-- End carousel item -->
                @endforeach

            </div>
          </div>
          <div class="propery-carousel-pagination carousel-pagination"></div>

        </div>
    </section><!-- End Latest Properties Section -->
