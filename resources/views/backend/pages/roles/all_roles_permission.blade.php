@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <h4 class="page-title">All Roles Permission</h4>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <table class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Roles Name </th>
                                    <th>Permissions </th>
                                    <th width="18%">Action </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($roles as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->name }}</td>

                                        <td>
                                            @foreach ($item->permissions as $perm)
                                                <span class="badge rounded-pill bg-danger">{{ $perm->name }}</span>
                                            @endforeach
                                        </td>

                                        <td width="18%">
                                            <a href="{{ route('admin.edit.roles', $item->id) }}"
                                                class="btn btn-primary rounded-pill waves-effect waves-light">
                                                <i class="bi bi-pen-fill"></i>
                                            </a>

                                            <a href="{{ route('admin.delete.roles', $item->id) }}"
                                                class="btn btn-danger rounded-pill waves-effect waves-light"
                                                id="delete"><i class="bi  bi-trash3-fill"></i>
                                            </a></a>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div>
            </div>
        </div>

    </div>
@endsection
