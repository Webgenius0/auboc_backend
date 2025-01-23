{{-- @extends('backend.app')

@section('title', 'Service Page')

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
                    <h3>{{ ucfirst($section) }}</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="service"></i></a></li>
                        <li class="breadcrumb-item"> Form Layout</li>
                        <li class="breadcrumb-item active">{{ ucfirst($section) }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>{{ ucfirst($section) }} Feature</h4>
                    </div>
                    <div class="card-body">
                        <form class="theme-form" action="{{ route('cms.service-page.section.update', $section) }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="mb-3">
                                <label class="col-form-label pt-0" for="section">Select Section:</label>
                                <select name="section">
                                    <option value="section-one" {{ $section == 'section-one' ? 'selected' : '' }}>Section One</option>
                                    <option value="section-two" {{ $section == 'section-two' ? 'selected' : '' }}>Section Two</option>
                                    <option value="section-three" {{ $section == 'section-three' ? 'selected' : '' }}>Section Three</option>
                                    <option value="section-four" {{ $section == 'section-four' ? 'selected' : '' }}>Section Four</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="col-form-label pt-0" for="title">Title :</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    placeholder="Title" name="title" value="{{ $data->title ?? '' }}">
                                @error('title')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="col-form-label pt-0" for="description">Description :</label>
                                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Description" cols="30" rows="10">{{ $data->description ?? '' }}</textarea>
                                @error('description')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="col-form-label pt-0">Image:</label>
                                <input class="form-control dropify @error('image') is-invalid @enderror" type="file"
                                    data-default-file="{{ !empty($data->image) ? asset($data->image) : '' }}"
                                    name="image">
                                @error('image')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="card-footer text-end">
                                <button class="btn btn-primary">Submit</button>
                                <a href="{{ route('cms.service-page.section', $section) }}"
                                    class="btn btn-warning">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@endpush --}}




@extends('backend.app')

@section('title', 'Service Page')

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
                    <h3>Service Feature</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="service"></i></a></li>
                        <li class="breadcrumb-item"> Form Layout</li>
                        <li class="breadcrumb-item active">Service Feature</li>
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
                                <h4>Service Feature</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{ route('cms.service-page.section.update') }}" method="post"
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
                                        <label class="col-form-label pt-0" for="description">Description :</label>
                                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                            placeholder="description" cols="30" rows="10">
                                            {{ old('description', $data[0]->description ?? '') }}
                                        </textarea>
                                        @error('description')
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
                                        <a href="{{ route('cms.service-page.section') }}" class="btn btn-warning">Cancel</a>
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
                                <h4>Service Two</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{ route('cms.service-page.section.item-one.update') }}"
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
                                        <label class="col-form-label pt-0" for="description">Description :</label>
                                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                            placeholder="description" cols="30" rows="10">
                                            {{ old('description', $data[1]->description ?? '') }}
                                        </textarea>
                                        @error('description')
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
                                        <a href="{{ route('cms.service-page.section') }}" class="btn btn-warning">Cancel</a>
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
                                <h4>Service Three</h4>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{{ route('cms.service-page.section.item-two.update') }}"
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
                                        <label class="col-form-label pt-0" for="description">Description :</label>
                                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                            placeholder="description" cols="30" rows="10">
                                            {{ old('description', $data[2]->description ?? '') }}
                                        </textarea>
                                        @error('description')
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
                                        <a href="{{ route('cms.service-page.section') }}" class="btn btn-warning">Cancel</a>
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












