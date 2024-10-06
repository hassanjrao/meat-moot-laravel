@extends('layouts.backend')

@section('page-title', 'Contact Us Requests')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Contact Us Requests
                </h3>




            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Company</th>
                                <th>Country/City</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Created At</th>
                                <th>Action</th>

                            </tr>


                        </thead>

                        <tbody>
                            @foreach ($requests as $ind => $request)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $request->first_name }}</td>
                                    <td>{{ $request->last_name }}</td>
                                    <td>{{ $request->email }}</td>
                                    <td>{{ $request->mobile }}</td>
                                    <td>{{ $request->company }}</td>
                                    <td>{{ $request->country_city }}</td>
                                    <td>{{ $request->subject }}</td>
                                    <td>{{ $request->message }}</td>

                                    <td>{{ $request->created_at }}</td>

                                    <td>

                                        <form id="form-{{ $request->id }}"
                                            action="{{ route('admin.contact-us-requests.destroy', $request->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" onclick="confirmDelete({{ $request->id }})" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                                title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                        </form>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>








    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')


@endsection
