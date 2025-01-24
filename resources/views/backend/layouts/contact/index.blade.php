@extends('backend.app')

@section('title', 'Contacts')

@push('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-primary fw-bold text-dark">All Contacts</h4>
                        <p class="card-description text-muted">The contact details below</p>
                        <table id="order-table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr class="text-white">
                                    <th>ID</th>
                                    <th> Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Country</th>
                                    <th>Date</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->country }}</td>
                                        <td>{{ $contact->date }}</td>
                                        <td>{{ $contact->eircode }}</td>

                                        <td>{{ $contact->message }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#order-table').DataTable({
                "order": [
                    [0, "desc"]
                ],
                "pagingType": "full_numbers",
                "language": {
                    "search": "_INPUT_",
                    "searchPlaceholder": "Search orders..."
                }
            });
        });

        function updateStatus(orderId, status) {
            $.ajax({
                url: '/order/update-status/' + orderId,
                method: 'PUT',
                data: {
                    _token: '{{ csrf_token() }}',
                    status: status
                },
                success: function(response) {
                    Swal.fire({
                        title: 'Success!',
                        text: response.message,
                        icon: 'success',
                        timer: 1000, // 1 second
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.reload(); // Reload the page to reflect the updated status
                    });
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'There was an error updating the order status.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        }
    </script>
@endpush
