@extends('backend.app')

@section('title', 'Trending Product Information')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Trending Product Information</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Data Table</li>
                        <li class="breadcrumb-item active">Trending Product Information</li>
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
                        <h4>Trending Product Information</h4>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive theme-scrollbar">
                            <table class="display" id="data-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category </th>
                                        <th>Brand </th>
                                        <th>Designer</th>
                                        <th>Product </th>
                                        <th> product Image</th>
                                        <th>Trending Product</th>
                                    </tr>
                                </thead>
                                <tbody>

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
                        url: "{{ route('trendingproduct.trending') }}",
                        type: "GET"
                    },
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'category_name',
                            name: 'category_name',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'brand_name',
                            name: 'brand_name',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'designer_name',
                            name: 'designer_name',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'name',
                            name: 'name',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'image',
                            name: 'image',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'trending_product',
                            name: 'trending_product',
                            orderable: true,
                            searchable: true
                        }

                    ]
                });
            }
        });


        function toggleTrendingProduct(id) {
            $.ajax({
                url: '/product/toggle-trending/' + id,
                type: 'GET',
                success: function(response) {
                    $('#data-table').DataTable().ajax.reload();
                    Swal.fire({
                        position: 'center',
                        icon: response.success ? 'success' : 'error',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                },
                error: function(error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                    });
                }
            });
        }
    </script>
@endpush
