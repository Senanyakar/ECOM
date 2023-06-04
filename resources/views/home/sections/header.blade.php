  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Urun Ara</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" action="{{ route('search') }}" method="GET" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Anahtar Kelime</label>
              <input type="text" name="search" class="form-control form-control-lg form-control-a"  placeholder="Anahtar Kelime" required/>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Türü</label>
              <select class="form-control form-select form-control-a" name="propertytype" id="Type">
                <option>Tümü</option>
                <option>Elektronik</option>
                <option>Giyim</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="price">fiyat</label>
              <select class="form-control form-select form-control-a" name="price" id="price">
                <option>Limitsiz</option>
                <option>$5,000</option>
                <option>$10,000</option>
                <option>$15,000</option>
                <option>$20,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Arama Listele</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">

      </button>
      <a class="navbar-brand text-brand" href="{{route('home_index')}}">E<span class="color-b">COM</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav ">

          <li class="nav-item">
            <a class="nav-link @if($link==1) active @endif"  href="{{route('home_index')}}">Ana Sayfa</a>
          </li>

          <li class="nav-item">
            <a class="nav-link @if($link==2) active @endif "  href="{{route('home_aboutus')}}">Hakkimizda</a>
          </li>

          <!--  eklenebilir

          <li class="nav-item">
            <a class="nav-link " href="{{route('home_news')}}">Projeler</a>
          </li>
            -->


          <li class="nav-item dropdown">
            <!--3 hizmetlerin eklettileri -->
            <a class="nav-link  dropdown-toggle @if($link==3 || $link==3.1) active @endif"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hizmetlerimiz</a>
            <div class="dropdown-menu">
                <a class="dropdown-item @if($link==3) active @endif" href="{{route('home_property')}}">Urunler</a>
                <a class="dropdown-item @if($link==3.1) active @endif" href="{{route('home_news')}}">Urun Haberleri</a>
                <a class="dropdown-item @if($link==3.2) active @endif" href="{{route('home_stone')}}">Beton Ürünleri</a>
            </div>
          </li>
          <li class="nav-item" >
            <a class="nav-link @if($link==4) active @endif " href="{{route('home_contact')}}">İletişim</a>
          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav><!-- End Header/Navbar -->
