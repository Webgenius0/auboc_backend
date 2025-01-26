@extends('backend.app')

@section('title', 'Home Page')

@push('styles')
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 150px;
        }

        select[name="section"] {
            background-color: #f0f4f8;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 8px;
            font-size: 14px;
            color: #333;
            width: 100%;
        }

        select[name="section"] option {
            padding: 10px;
            font-size: 14px;
        }

        select[name="section"] option:selected {
            background-color: #007bff;
            color: white;
        }

        select[name="section"]:focus {
            outline: none;
            border-color: #007bff;
        }
    </style>
@endpush

@section('content')


    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Home Page Images</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item"> Form Layout</li>
                        <li class="breadcrumb-item active"> Hero Section</li>
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
                                <h4>Hero Image One</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{ route('cms.home-page.section.item-one.update') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    @method('PATCH')


                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="title">Title :</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Title" name="title" value="{{ $data[0]->title ?? '' }}">
                                        @error('title')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0">Image:</label>
                                        <input class="form-control dropify @error('image') is-invalid @enderror"
                                            type="file"
                                            data-default-file="{{ !empty($data[0]->image) ? asset($data[0]->image) : '' }}"
                                            name="image">

                                        @error('image')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="card-footer text-end">
                                        <button class="btn btn-primary">Submit</button>
                                        <a href="{{ route('cms.home-page.section') }}" class="btn btn-warning">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Hero Image Two</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{ route('cms.home-page.section.item-two.update') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    @method('PATCH')


                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="title">Title :</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Title" name="title" value="{{ $data[1]->title ?? '' }}">
                                        @error('title')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0">Image:</label>
                                        <input class="form-control dropify @error('image') is-invalid @enderror"
                                            type="file"
                                            data-default-file="{{ !empty($data[1]->image) ? asset($data[1]->image) : '' }}"
                                            name="image">

                                        @error('image')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="card-footer text-end">
                                        <button class="btn btn-primary">Submit</button>
                                        <a href="{{ route('cms.home-page.section') }}" class="btn btn-warning">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Hero Image Three</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{ route('cms.home-page.section.item-three.update') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    @method('PATCH')


                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="title">Title :</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Title" name="title" value="{{ $data[2]->title ?? '' }}">
                                        @error('title')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0">Image:</label>
                                        <input class="form-control dropify @error('image') is-invalid @enderror"
                                            type="file"
                                            data-default-file="{{ !empty($data[2]->image) ? asset($data[2]->image) : '' }}"
                                            name="image">

                                        @error('image')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="card-footer text-end">
                                        <button class="btn btn-primary">Submit</button>
                                        <a href="{{ route('cms.home-page.section') }}" class="btn btn-warning">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Hero Image Four</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{ route('cms.home-page.section.item-four.update') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    @method('PATCH')


                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="title">Title :</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Title" name="title" value="{{ $data[3]->title ?? '' }}">
                                        @error('title')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0">Image:</label>
                                        <input class="form-control dropify @error('image') is-invalid @enderror"
                                            type="file"
                                            data-default-file="{{ !empty($data[3]->image) ? asset($data[3]->image) : '' }}"
                                            name="image">

                                        @error('image')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="card-footer text-end">
                                        <button class="btn btn-primary">Submit</button>
                                        <a href="{{ route('cms.home-page.section') }}" class="btn btn-warning">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4>Hero Image Five</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{ route('cms.home-page.section.item-five.update') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf

                                    @method('PATCH')


                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="title">Title :</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Title" name="title" value="{{ $data[4]->title ?? '' }}">
                                        @error('title')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0">Image:</label>
                                        <input class="form-control dropify @error('image') is-invalid @enderror"
                                            type="file"
                                            data-default-file="{{ !empty($data[4]->image) ? asset($data[4]->image) : '' }}"
                                            name="image">

                                        @error('image')
                                            <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="card-footer text-end">
                                        <button class="btn btn-primary">Submit</button>
                                        <a href="{{ route('cms.home-page.section') }}" class="btn btn-warning">Cancel</a>
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


@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
                height: '500px'
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#description1'), {
                height: '500px'
            })
            .catch(error => {
                console.error(error);
            });


        $('.dropify').dropify();



        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endpush
