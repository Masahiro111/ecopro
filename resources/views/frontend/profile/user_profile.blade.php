@extends('frontend.main_master')
<!-- -->

@section('content')
<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <br>
                <img class="card-img-top" style="border-radius: 50%; height: 100%; width: 100%;" src="
                {{ (!empty( $user->profile_photo_path )) ? 
                    url('upload/user_images/' . $user->profile_photo_path ) :
                    url('upload/no_image.jpg')                         
                 }}" alt="">
                <br>
                <br>
                <ul class="list-group list-group-flush">
                    <a href="{{ route('dashboard')}}" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="{{ route('user.change.password') }}" class="btn btn-primary btn-sm btn-block">Change
                        Password</a>
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                </ul>

            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="test-center">
                        <span class="text-danger">Hi, {{ Auth::user()->name }}</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.profile.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Name </label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $user->name}}" />
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Email </label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $user->email}}" />
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">Phone </label>
                                <input type="number" class="form-control" id="phone" name="phone"
                                    value="{{ $user->phone}}" />
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="exampleInputEmail1">User Image </label>
                                <input type="file" class="form-control" id="profile_photo_path"
                                    name="profile_photo_path" />
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Update</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection