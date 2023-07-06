@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="page-content">

        <div class="row profile-body d-flex justify-content-center">
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">

                            <h6 class="card-title">Add Category </h6>

                            <form id="myForm" method="POST" action="{{ route('store.permission') }}" class="forms-sample">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Permission Name </label>
                                    <input type="text" name="permission_name" class="form-control">
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">Group Name </label>
                                        <select name="group_name" class="form-select" id="example-select">
                                            <option> Select One Category </option>

                                            <option value="category">Category </option>
                                            <option value="subCategory">SubCategory </option>
                                            <option value="news">News </option>
                                            <option value="banner">Banner </option>
                                            <option value="photo">Photo </option>
                                            <option value="video">Video </option>
                                            <option value="live">Live </option>
                                            <option value="review">Review </option>
                                            <option value="seo">Seo </option>
                                            <option value="admin">Admin Setting </option>
                                            <option value="role">Role and Permission </option>

                                        </select>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary me-2">Save Changes </button>

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
