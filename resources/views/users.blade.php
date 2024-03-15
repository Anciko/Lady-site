@extends('layouts.app')

@section('content')

<div class="container">

<table id="Datatable" class="display" style="width:100%">
    <thead>
        <tr>
            {{-- <th class="text-center">ID</th> --}}
            <th class="text-center">Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Created At</th>

        </tr>
    </thead>
    <tbody></tbody>
</table>

</div>

@endsection


@section('js')
    <script>
        $(document).ready(function() {
            var table = $('#Datatable').DataTable({
                responsive: true,   
                processing: true,
                serverSide: true,
                // mark: true,
                ajax: '/users/datatable/ssd',
                columns: [
                    {
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
