@extends('layouts.backend')

@section('page-title', 'Menu Highlights')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Menu Highlights
                </h3>


                <a href="{{ route('admin.menu-highlights.create') }}" class="btn btn-primary">Add</a>



            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                            </tr>


                        </thead>

                        <tfuel>
                            @foreach ($menuHighlights as $ind => $menuHighlight)
                                <tr>

                                    <td>{{ $ind + 1 }}</td>
                                    <td>{{ $menuHighlight->title }}</td>
                                    <td>
                                        <img src="{{ $menuHighlight->image_url }}" alt="" width="100px">
                                    </td>
                                    <td>{{ $menuHighlight->description }}</td>

                                    <td>{{ $menuHighlight->created_at }}</td>
                                    <td>{{ $menuHighlight->updated_at }}</td>

                                    <td>
                                        <a href="{{ route('admin.menu-highlights.edit', $menuHighlight->id) }}" class="btn btn-sm btn-primary"
                                            data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form id="form-{{ $menuHighlight->id }}"
                                            action="{{ route('admin.menu-highlights.destroy', $menuHighlight->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button" onclick="confirmDelete({{ $menuHighlight->id }})" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                                title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                        </form>
                                    </td>


                                </tr>
                            @endforeach
                        </tfuel>

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