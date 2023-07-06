@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('add.admin') }}" class="btn btn-inverse-info"> Add Admin </a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Admin All </h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Image </th>
                                        <th>Name </th>
                                        <th>Email </th>
                                        <th>Phone </th>
                                        <th>Role </th>
                                        <th>Status </th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alladminuser as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><img src="{{ !empty($item->profile_img) ? url('upload/user_img/' . $item->profile_img) : url('upload/no_image.jpg') }} "
                                                    style="width: :50px; height:50px;"></td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>
                                                @foreach ($item->roles as $role)
                                                    <span class="badge badge-pill bg-danger">{{ $role->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                @if ($item->status == 'active')
                                                    <span class="badge badge-pill bg-success">Active</span>
                                                @else
                                                    <span class="badge badge-pill bg-danger">InActive</span>
                                                @endif

                                            </td>
                                            <td>
                                                <a href="{{ route('edit.admin', $item->id) }}"
                                                    class="btn btn-primary rounded-pill waves-effect waves-light">
                                                    <i class="bi bi-pen-fill"></i>
                                                </a>

                                                <a href="{{ route('delete.admin', $item->id) }}"
                                                    class="btn btn-danger rounded-pill waves-effect waves-light"
                                                    id="delete">
                                                    <i class="bi bi-trash3-fill"></i>
                                                </a>

                                                @if ($item->status == 'active')
                                                    <a href="{{ route('inactive.admin.user', $item->id) }}"
                                                        class="btn btn-primary rounded-pill waves-effect waves-light"
                                                        title="Inactive">
                                                        <i class="bi bi-emoji-smile-upside-down-fill"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ route('active.admin.user', $item->id) }}"
                                                        class="btn btn-primary rounded-pill waves-effect waves-light"
                                                        title="Active">
                                                        <i class="bi bi-emoji-smile-fill"></i>
                                                    </a>
                                                @endif
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
