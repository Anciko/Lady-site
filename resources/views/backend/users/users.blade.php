@extends('backend.layouts.master')

@section('custom-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">

    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.2/b-3.0.1/fh-4.0.1/r-3.0.0/datatables.min.css" rel="stylesheet">

@endsection

@section('main-content')
    <div class="container p-4">

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive datatable-minimal">
                        <table class="table" id="Datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    {{-- <th>Phone</th>
                                    <th>City</th> --}}
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection


@section('custom-js')
    <!-- Datatable cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

    <script src="https://cdn.datatables.net/v/dt/dt-2.0.2/b-3.0.1/fh-4.0.1/r-3.0.0/datatables.min.js"></script>

    <script>
        console.log("users")
        $(document).ready(function() {
            console.log("user");
            var table = $('#Datatable').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                // mark: true,
                ajax: '/admin/users/datatable/ssd',
                columns: [{
                        data: 'name',
                        // name: 'name',
                        // class: 'text-center'
                    },
                    {
                        data: 'email',
                        // name: 'email',
                        // class: 'text-center'
                    },
                    {
                        data: 'created_at',
                        // name: 'created_at',
                        // class: 'text-center'
                    }
                ],
            });
            console.log('hi');
        })
    </script>
@endsection
