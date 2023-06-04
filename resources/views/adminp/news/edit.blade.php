@extends('layouts.adminbase')
@section('title', 'Page Title')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <strong>Haber Formu</strong> Elements
        </div>
        <div class="card-body card-block">
            <form role="post" action="{{route('admin_news_update',['id'=>$newsdata->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                        <label for="text-input" class=" form-control-label">Haber Başlıgı</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="title" value="{{$newsdata->title}}" name="title" placeholder="Başlık giriniz" class="form-control">
                        <small class="form-text text-muted">This is a title text</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label">Kılavuz kelime</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="keyword" value="{{$newsdata->title}}" name="keyword" placeholder="Kılavuz kelime" class="form-control">
                        <small class="help-block form-text">value="{{$newsdata->title}}"</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label"> Haber Açıklaması girniz</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="description" value="{{$newsdata->description}}" name="description" placeholder="Description" class="form-control">
                        <small class="help-block form-text">value="{{$newsdata->title}}"</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label">1. içerik</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="content1" value="{{$newsdata->description}}" name="content1" placeholder="1. içerik" class="form-control">
                        <small class="help-block form-text">Please enter the interesting information>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label">2. İçerik </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="content2" value="{{$newsdata->content2}}" name="content2" placeholder="İçerik giriniz" class="form-control">
                        <small class="help-block form-text">Please enter a news basic content</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Görsel Yükleyiniz</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input"  name="image"  class="form-control-file">
                        <div>
                            <img style="max-height: 200px; max-width: 200px" src="{{Storage::url($newsdata->image)}}" alt="">
                        </div>
                        
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
