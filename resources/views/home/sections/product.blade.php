    <!-- ======= Agents Section ======= -->
    <section class="section-agents section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Favori Ürünlerimiz</h2>
                </div>
                <div class="title-link">
                  <a href="agents-grid.html">Tüm Ürünler
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              @foreach ($stonedata as $data)
              <div class="card-box-d">
                <div class="card-img-d">
                  <img src="{{$data->image}}" alt="" class="img-d img-fluid">
                </div>
                <div class="card-overlay card-overlay-hover">
                  <div class="card-header-d">
                    <div class="card-title-d align-self-center">
                      <h3 class="title-d">
                        <a href="agent-single.html" class="link-two">{{$data->name}}
                          <br> {{$data->type}}</a>
                      </h3>
                    </div>
                  </div>
                  <div class="card-body-d">
                    <p class="content-d color-text-a">
                      {{$data->content}}
                    </p>
                    <div class="info-agents color-a">
                      <p>
                        <strong>Phone: </strong> +90 534 928 72 95
                      </p>
                      <p>
                        <strong>Email: </strong> info@gmail.net
                      </p>
                    </div>
                  </div>
                  <div class="card-footer-d">
                    <div class="socials-footer d-flex justify-content-center">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-facebook" aria-hidden="true">$companydata->facebook</i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-twitter" aria-hidden="true">$companyinfo->twitter</i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-instagram" aria-hidden="true">$companydata->instagram</i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

            </div>

          </div>
        </div>
      </section><!-- End Agents Section -->
