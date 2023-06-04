@extends('layouts.adminbase')

@section('content')

<div class="container rounded bg-white mt-5 mb-5">
    <form role="post" action="{{route('admin_profile_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px"

                    @if (Auth::user()->image==null)
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"
                    @else
                        src="{{Auth::user()->image}}"
                    @endif



                    ><span class="font-weight-bold">{{Auth::user()->name }}</span><span class="text-black-50">{{Auth::user()->email}}</span></span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="text-right">Profile Settings</h3>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" name="name" class="form-control" placeholder="first name" value="{{Auth::user()->name }}"></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" name="surename" class="form-control" value="{{Auth::user()->surename}}" placeholder="surname"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="tel" name="telnumber" id="phone" class="form-control" placeholder="enter phone number" value="{{Auth::user()->telnumber}}"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" name="email" class="form-control" placeholder="enter email id" value="{{Auth::user()->email}}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Age</label><input type="text" id="phone" name="" class="form-control" placeholder="Age"  value="{{Auth::user()->age}}">{{Auth::user()->age }}</div>
                        <div class="col-md-6"><label class="labels">Image</label><input type="file" id="phone" name="image" class="form-control-file" placeholder="Image" value="{{Auth::user()->image }}">{{Auth::user()->image }}</div>

                    </div>
                    <div class="p-2  d-flex justify-content-between align-items-center mb-3"><h4>Social</h4></div>

                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Instagram</label><input type="text" name="instagram" class="form-control" placeholder="instagram" value="{{Auth::user()->instagram}}"></div>
                        <div class="col-md-6"><label class="labels">Linkedin</label><input type="text" name="linkedin" class="form-control" value="{{Auth::user()->linkedin}}" placeholder="Linkedin"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>


@endsection
