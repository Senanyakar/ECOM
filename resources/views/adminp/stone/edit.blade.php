@extends('layouts.adminbase')
@section('title', 'Haber ekleme')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <strong>Haber Formu</strong> Elements
        </div>
        <div class="card-body card-block">
            <form role="post" action="{{route('admin_news_store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Kullanici Adi</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{Auth::user()->name }}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Kullanıcı Numarası</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input class="form-control" value="{{Auth::user()->id}}" type="text" placeholder="{{Auth::user()->id}}" aria-label="Disabled input example" disabled>
                        <small class="form-text text-muted">Unable to change value</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="title" name="title" placeholder="Başlık giriniz" class="form-control">
                        <small class="form-text text-muted">Isim bolumu</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label">Kılavuz kelime</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="keyword" name="keyword" placeholder="Kılavuz kelime" class="form-control">
                        <small class="help-block form-text">Please enter a keywords make easier to search process</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label"> Urun Açıklaması girniz</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="description" name="description" placeholder="Description" class="form-control">
                        <small class="help-block form-text">Please enter the interesting information>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label">Mataril</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="content1" name="content1" placeholder="1. içerik" class="form-control">
                        <small class="help-block form-text">Urunun matarialini giriniz>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label">Urunun boyutlari </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="content2" name="content2" placeholder="İçerik giriniz" class="form-control">
                        <small class="help-block form-text">Urunun Boyutlarini giriniz</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Görsel Yükleyiniz</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="image"  class="form-control-file">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary ">
                        <i class="fa fa-dot-circle-o"></i> Kaydet
                    </button>
                    <button type="reset" class="btn btn-danger">
                        <i class="fa fa-ban"></i> Sıfırla
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
  </script>

@endsection







1