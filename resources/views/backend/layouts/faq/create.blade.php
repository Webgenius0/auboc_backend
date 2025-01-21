@extends('backend.app')

@section('title', 'Create FAQ')

@push('styles')
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 150px;
        }
    </style>
@endpush

@section('content')

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>FAQ Create Form</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('faq.index')}}"><i data-feather="skip-back"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active"> FAQ Create</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-12 col-lg-7">
                    <form class="card" method="POST" action="{{ route('faq.store') }}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <h4 class="card-title mb-0">FAQ Create</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label f-w-500">Question:</label>
                                        <textarea class="form-control @error('question') is-invalid @enderror" name="question" id="">{{ old('question') }}</textarea>
                                        @error('question')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label f-w-500">Answer:</label>
                                        <textarea class="form-control @error('answer') is-invalid @enderror" name="answer" id="answer">{{ old('answer') }}</textarea>
                                        @error('answer')
                                        <div style="color: red;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit">Create</button>
                            <a href="{{route('category.create')}}" class="btn btn-warning">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

@endsection

@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#answer'), {
                height: '500px'
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#content1'), {
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


