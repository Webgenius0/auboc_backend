
@extends('backend.app')

@section('title', 'Social Links')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Social Links</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"> Form Layout</li>
                        <li class="breadcrumb-item active"> Social Links</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Social Links</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{route('social-links.update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="facebook_link">Facebook Link:</label>
                                        <input type="text" class="form-control @error('facebook_link') is-invalid @enderror"
                                               id="facebook_link" name="facebook_link" value="{{$social_link->facebook_link ?? ""}}">
                                        @error('facebook_link')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="instagram_link">Instagram Link:</label>
                                        <input type="text" class="form-control @error('instagram_link') is-invalid @enderror"
                                               id="instagram_link" name="instagram_link" value="{{$social_link->instagram_link ?? ""}}">
                                        @error('instagram_link')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="twitter_link">Twitter Link:</label>
                                        <input type="text" class="form-control @error('twitter_link') is-invalid @enderror"
                                               id="twitter_link" name="twitter_link" value="{{$social_link->twitter_link ?? ""}}">
                                        @error('twitter_link')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="card-footer text-end">
                                        <button class="btn btn-primary">Submit</button>
                                        <a href="{{ route('social-links') }}" class="btn btn-warning">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

