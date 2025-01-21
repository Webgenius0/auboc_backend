
@extends('backend.app')

@section('title', 'Humans-Home')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Section One</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"> Form Layout</li>
                        <li class="breadcrumb-item active"> Section One</li>
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
                                <h4>Section One</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{route('cms.humans-home-page.section-one.update')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    @method('PATCH')


                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="title">Title :</label>
                                        <input type="text"
                                               class="form-control @error('title') is-invalid @enderror"
                                               placeholder="Title" name="title" value="{{ $data->title ?? "" }}">
                                        @error('title')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="sub_title">Sub Title :</label>
                                        <input type="text"
                                               class="form-control @error('sub_title') is-invalid @enderror"
                                               placeholder="Sub Title" name="sub_title" value="{{ $data->sub_title ?? "" }}">
                                        @error('sub_title')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0">Button Text :</label>
                                        <input type="text"
                                               class="form-control @error('button_text') is-invalid @enderror"
                                               placeholder="Button Text" name="button_text" value="{{ $data->button_text ?? "" }}">
                                        @error('button_text')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="card-footer text-end">
                                        <button class="btn btn-primary">Submit</button>
                                        <a href="{{ route('cms.humans-home-page.section-one') }}" class="btn btn-warning">Cancel</a>
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



