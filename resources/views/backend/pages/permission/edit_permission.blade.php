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

                            <form id="myForm" method="post" action="{{ route('permission.update') }}">
                                @csrf

                                <input type="hidden" name="id" value="{{ $permission->id }}">

                                <div class="row">
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">Permission Name </label>
                                        <input type="text" name="name" class="form-control" id="inputEmail4"
                                            value="{{ $permission->name }}">
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">Group Name </label>
                                        <select name="group_name" class="form-select" id="example-select">
                                            <option> Select One Category </option>

                                            <option value="category"
                                                {{ $permission->group_name == 'category' ? 'selected' : '' }}>Category
                                            </option>
                                            <option value="subcategory"
                                                {{ $permission->group_name == 'subcategory' ? 'selected' : '' }}>SubCategory
                                            </option>
                                            <option value="news"
                                                {{ $permission->group_name == 'news' ? 'selected' : '' }}>News </option>
                                            <option value="banner"
                                                {{ $permission->group_name == 'banner' ? 'selected' : '' }}>Banner </option>
                                            <option value="photo"
                                                {{ $permission->group_name == 'photo' ? 'selected' : '' }}>Photo </option>
                                            <option value="video"
                                                {{ $permission->group_name == 'video' ? 'selected' : '' }}>Video </option>
                                            <option value="live"
                                                {{ $permission->group_name == 'live' ? 'selected' : '' }}>Live </option>
                                            <option value="review"
                                                {{ $permission->group_name == 'review' ? 'selected' : '' }}>Review
                                            </option>
                                            <option value="seo"
                                                {{ $permission->group_name == 'category' ? 'seo' : '' }}>Seo </option>
                                            <option value="admin"
                                                {{ $permission->group_name == 'admin' ? 'selected' : '' }}>Admin Setting
                                            </option>
                                            <option value="role"
                                                {{ $permission->group_name == 'role' ? 'selected' : '' }}>Role and
                                                Permission </option>

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
@endsection
