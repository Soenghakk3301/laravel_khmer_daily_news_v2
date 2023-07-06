@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="page-content">

        <div class="row profile-body d-flex justify-content-center">
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">

                            <h6 class="card-title">Edit Role </h6>

                            <form id="myForm" method="post" action="{{ route('roles.update') }}">
                                @csrf

                                <input type="hidden" name="id" value="{{ $role->id }}">

                                <div class="row">
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">Permission Name </label>
                                        <input type="text" name="role_name" class="form-control" id="inputEmail4"
                                            value="{{ $role->name }}">
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
                    role_name: {
                        required: true,
                    },
                },
                messages: {
                    role_name: {
                        required: 'Please Enter Permission Name',
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
