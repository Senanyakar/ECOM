@extends('layouts.adminbase')
@section('title', 'Page Title')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <strong>Property Form</strong> Elements
        </div>
        <div class="card-body card-block">
            <form role="post" action="{{route('admin_property_update',['id'=>$property->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">USER NAME </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">{{Auth::user()->name }}</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">User id</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input class="form-control" value="{{Auth::user()->id}}" type="text" placeholder="{{Auth::user()->id}}" aria-label="Disabled input example" disabled>
                        <small class="form-text text-muted">Unable to change value</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" value= "{{$property->title}}" name="title" placeholder="Title" class="form-control">
                        <small class="form-text text-muted">This is a title text</small>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Property Type</label>
                    </div>
                    <div class="col-12 col-md-2">
                        <select name="status" id="status" class="form-control">
                            <option value="{{$property->category}}">{{$property->category}}</option>
                            <option value="ev">Ev</option>
                            <option value="arsa">Arsa</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Price Type</label>
                    </div>
                    <div class="col-12 col-md-2">
                        <select name="status" id="status" class="form-control">
                            <option value="{{$property->moneytype}}">{{$property->moneytype}}</option>
                            <option value="₺">Türk Lirası</option>
                            <option value="€">Euro</option>
                            <option value="$">Dolar</option>
                        </select>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Price</label>
                    </div>
                    <div class="col-12 col-md-3">
                        <input type="number" id="text-input" value="{{$property->price}}" name="price" placeholder="Price" class="form-control">
                        <small class="form-text text-muted">This is a Price input</small>
                    </div>
                </div>




                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label">Keywords</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="input" name="keywords" placeholder="keywords" value="{{$property->keywords}}" class="form-control">
                        <small class="help-block form-text">Please enter a keywords make easier to search process</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label">Location</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="input" name="location" placeholder="Location" value="{{$property->location}}" class="form-control">
                        <small class="help-block form-text">Please enter a location make easier to find</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label">Location link for google </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="input" name="locationlink" placeholder="Location link" value="{{$property->locationlink}}" class="form-control">
                        <small class="help-block form-text">Please enter a location make easier to find</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label">Sahibinden link</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="input" name="sahibindenlink" placeholder="Location link" value="{{$property->locationlink}}" class="form-control">
                        <small class="help-block form-text">Please enter a Sahibinden link make easier to find</small>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label">Area</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="input" name="area" placeholder="Area m3" value="{{$property->area}}" class="form-control">
                        <small class="help-block form-text">Please enter a area size form of metre square</small>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label">Baths</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="input" name="baths" placeholder="baths" value="{{$property->baths}}" class="form-control">
                        <small class="help-block form-text">Please enter a baths </small>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label">beds</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="input" name="beds" placeholder="beds" value="{{$property->beds}}" class="form-control">
                        <small class="help-block form-text">Please enter a beds make easier to search process</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="input" class=" form-control-label">garage</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="input" name="garage" placeholder="garage" value="{{$property->garage}}" class="form-control">
                        <small class="help-block form-text">Please enter a garage make easier to search process</small>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="description" id="description" rows="9" placeholder="Description..." value="{{$property->description}}" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Amenities</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="amenities" id="amenities" rows="9" placeholder="Amenities..." value="{{$property->amenities}}" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="status" id="status" class="form-control">
                            <option value="0">Please select</option>
                            <option value="Satılık">Satilik</option>
                            <option value="Kiralık">Kiralik</option>
                            <option value="Satıldı">Satildi</option>
                            <option value="Kiralandı">Kiralandı</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">video link input</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="link" id="link" name="videolink" class="form-control-file">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Images single input</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="image"  class="form-control-file">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Image for slider multiple input</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" multiple class="form-control-file">
                    </div>
                    <div>
                        <img style="max-height: 200px; max-width: 200px" src="{{Storage::url($property->image)}}" alt="">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary ">
                        <i class="fa fa-dot-circle-o"></i> Update
                    </button>
                    <button type="reset" class="btn btn-danger">
                        <i class="fa fa-ban"></i> Reset
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