@extends('layouts.adminbase')
@section('title', 'Page Title')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <strong>Property Form</strong> Elements
        </div>
        <div class="card-body card-block">
            <form role="post" action="{{route('admin_property_store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Static </label>
                    </div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">name</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Title</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="title" placeholder="Title" class="form-control">
                        <small class="form-text text-muted">This is a title text</small>
                    </div>
                </div>



                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Price</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" name="price" placeholder="Price" class="form-control">
                        <small class="form-text text-muted">This is a Price input</small>
                    </div>
                </div>




                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password-input" class=" form-control-label">Keywords</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="password-input" name="keywords" placeholder="keywords" class="form-control">
                        <small class="help-block form-text">Please enter a keywords make easier to search process</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password-input" class=" form-control-label">Location</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="password-input" name="location" placeholder="Location" class="form-control">
                        <small class="help-block form-text">Please enter a location make easier to find</small>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password-input" class=" form-control-label">Area</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="password-input" name="area" placeholder="Area m3" class="form-control">
                        <small class="help-block form-text">Please enter a area size form of metre square</small>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password-input" class=" form-control-label">Baths</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="password-input" name="baths" placeholder="baths" class="form-control">
                        <small class="help-block form-text">Please enter a baths </small>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password-input" class=" form-control-label">beds</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="password-input" name="beds" placeholder="beds" class="form-control">
                        <small class="help-block form-text">Please enter a beds make easier to search process</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="password-input" class=" form-control-label">garage</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="password-input" name="garage" placeholder="garage" class="form-control">
                        <small class="help-block form-text">Please enter a garage make easier to search process</small>
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Description</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="description" id="description" rows="9" placeholder="Description..." class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Amenities</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="amenities" id="amenities" rows="9" placeholder="Amenities..." class="form-control"></textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Select</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="status" id="status" class="form-control">
                            <option value="0">Please select</option>
                            <option value="1">Satilik</option>
                            <option value="2">Kiralik</option>
                            <option value="3">Satildi</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label name="video" for="file-input" class=" form-control-label">video input</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="file-input" multiple="" class="form-control-file">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label name="image" for="file-multiple-input" class=" form-control-label">Images input</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-multiple-input" name="image" multiple="" class="form-control-file">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary ">
                        <i class="fa fa-dot-circle-o"></i> Submit
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
