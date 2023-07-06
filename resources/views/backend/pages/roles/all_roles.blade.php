@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('add.roles') }}" class="btn btn-inverse-info"> Add Role </a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Roles </h6>

                        <div class="table-responsive">
                            <table id="basic-datatable" class="table">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Roles Name </th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <a href="{{ route('edit.roles', $item->id) }}"
                                                    class="btn btn-primary rounded-pill waves-effect waves-light">
                                                    <i class="bi bi-pen-fill"></i>
                                                </a>

                                                <a href="{{ route('delete.roles', $item->id) }}"
                                                    class="btn btn-danger rounded-pill waves-effect waves-light"
                                                    id="delete">
                                                    <i class="bi bi-trash3-fill"></i>
                                                </a>

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

    </div>
@endsection
