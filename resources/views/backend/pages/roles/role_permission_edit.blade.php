@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="page-content">

        <div class="row profile-body d-flex justify-content-center">
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{ route('role.permission.update', $role->id) }}">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <h4 class="page-title">Edit Role In Permission</h4>
                                    </div>

                                </div>

                                <div class="form-check mb-2 form-check-primary">
                                    <input class="form-check-input" type="checkbox" value="" id="customckeck15">
                                    <label class="form-check-label" for="customckeck15">Permission All</label>
                                </div>

                                <hr>

                                @foreach ($permission_groups as $group)
                                    <div class="row">
                                        <div class="col-3">

                                            @php
                                                $permissions = App\Models\User::getpermissionByGroupName($group->group_name);
                                            @endphp

                                            <div class="form-check mb-2 form-check-primary">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="customckeck1"
                                                    {{ App\Models\User::roleHasPermissions($role, $permissions) ? 'checked' : '' }}>
                                                <label class="form-check-label"
                                                    for="customckeck1">{{ $group->group_name }}</label>
                                            </div>

                                        </div><!--  // End col 3  -->

                                        <div class="col-9">

                                            @foreach ($permissions as $permission)
                                                <div class="form-check mb-2 form-check-primary">
                                                    <input class="form-check-input" name="permission[]"
                                                        {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}
                                                        type="checkbox" value="{{ $permission->id }}"
                                                        id="customckeck{{ $permission->id }}">
                                                    <label class="form-check-label"
                                                        for="customckeck1">{{ $permission->name }}</label>
                                                </div>
                                            @endforeach
                                            <br>

                                        </div><!--  // End col 9  -->

                                    </div> <!-- // End Row  -->
                                @endforeach

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                                    Changes</button>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    permission_name: {
                        required: true,
                    },
                    group_name: {
                        required: true,
                    },


                },
                messages: {
                    permission_name: {
                        required: 'Please Enter Permission Name',
                    },
                    group_name: {
                        required: 'Please Enter Group Name',
                    },


                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
