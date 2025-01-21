@extends('backend.app')

@section('title', 'Subscription Information')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Subscription Information</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Data Table</li>
                        <li class="breadcrumb-item active">Subscription Information</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Subscription Information</h4>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive theme-scrollbar">
                            <table class="display" id="data-table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Email </th>
                                    <th>Subscribed At</th>
                                </tr>
                                </thead>
                                <tbody>
{{--                                @foreach($subscriptions as $subscription)--}}
{{--                                    <tr>--}}
{{--                                        <td>{{ $subscription->id }}</td>--}}
{{--                                        <td>{{ $subscription->email }}</td>--}}
{{--                                        <td>{{ $subscription->created_at }}</td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration  Ends-->
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                }
            });

            if (!$.fn.DataTable.isDataTable('#data-table')) {
                let dTable = $('#data-table').DataTable({
                    // DataTable options
                    order: [],
                    lengthMenu: [
                        [25, 50, 100, 200, 500, -1],
                        [25, 50, 100, 200, 500, "All"]
                    ],
                    processing: true,
                    responsive: true,
                    serverSide: true,
                    language: {
                        processing: `Loading data...`
                    },
                    pagingType: "full_numbers",
                    dom: "<'row justify-content-between table-topbar'<'col-md-2 col-sm-4 px-0'l><'col-md-2 col-sm-4 px-0'f>>tipr",
                    ajax: {
                        url: "{{ route('subscription.index') }}",
                        type: "GET"
                    },
                    columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                        {
                            data: 'email',
                            name: 'email',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'created_at',
                            name: 'created_at',
                            orderable: true,
                            searchable: true
                        },
                    ]
                });
            }
        });
    </script>






{{--<script>--}}
{{--    // Function to display full image using SweetAlert2--}}
{{--    function showImage(imageUrl) {--}}
{{--        Swal.fire({--}}
{{--            imageUrl: imageUrl,--}}
{{--            imageWidth: '80%',--}}
{{--            imageAlt: 'Full Image',--}}
{{--            showCloseButton: true,--}}
{{--            showConfirmButton: false,--}}
{{--            background: '#f8f9fa'--}}
{{--        });--}}
{{--    }--}}

{{--    // Initialize DataTable--}}
{{--    $(document).ready(function() {--}}
{{--        $('#data-table').DataTable({--}}
{{--            "order": [--}}
{{--                [0, "desc"]--}}
{{--            ],--}}
{{--            "pagingType": "full_numbers",--}}
{{--            "language": {--}}
{{--                "search": "_INPUT_",--}}
{{--                "searchPlaceholder": "Search quotes..."--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
@endpush
