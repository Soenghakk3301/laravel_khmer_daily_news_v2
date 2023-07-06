@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <style type="text/css">
        .form-check-label {
            text-transform: capitalize;
        }
    </style>

    <div class="page-content">

        <div class="row profile-body d-flex justify-content-center">
            <div class="col-md-8 col-xl-8 middle-wrapper">

                <div class="row">
                    <div class="card">
                        <div class="card-body">

                            <div class="row mb-5">

                                <h4 class="page-title">Add Admin</h4>

                            </div>

                            <form id="myForm" method="post" action="{{ route('admin.store') }}">
                                @csrf

                                <div class="row">

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label"> Name </label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4">
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Email </label>
                                        <input type="email" name="email" class="form-control" id="inputEmail4">
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Phone </label>
                                        <input type="text" name="phone" class="form-control" id="inputEmail4">
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Password </label>
                                        <input type="password" name="password" class="form-control" id="inputEmail4">
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputEmail4" class="form-label">Asign Roles </label>
                                        <select name="roles" class="form-select" id="example-select">
                                            <option> Select One Roles </option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

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

    <script type="text/javascript">
        $('#customckeck15').click(function() {
            if ($(this).is(':checked')) {
                $('input[type = checkbox]').prop('checked', true);
            } else {
                $('input[type = checkbox]').prop('checked', false);
            }
        });
    </script>
@endsection
