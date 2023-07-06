@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        .avatar-lg {
            height: 9rem;
            width: 9rem;
        }
    </style>

    <div class="page-content">
        <nav class="page-breadcrumb">
            <h4 class="page-title">Add News Post</h4>
        </nav>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <form id="myForm" method="post" action="{{ route('store.news.post') }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputEmail4" class="form-label">Category Name </label>
                                    <select name="category_id" class="form-select" id="example-select">
                                        <option>Select Category </option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">
                                                {{ $category->category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputEmail4" class="form-label">Writer </label>
                                    <select name="user_id" class="form-select" id="example-select">
                                        <option>Select Writer </option>
                                        @foreach ($adminuser as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputEmail4" class="form-label">News Title </label>
                                    <input type="text" name="news_title" class="form-control" id="inputEmail4">
                                </div>

                                <div class="form-group mb-3">

                                    <div class="form-group col-6 mb-3">
                                        <label for="example-fileinput" class="form-label">News Post Photo</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="example-fileinput" class="form-label"> </label>
                                        <img id="showImage" src="{{ url('upload/no_image.jpg') }} "
                                            class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                    </div>
                                </div>

                                <div class="form-group mb-3">

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Multiple Image </label>
                                            <input type="file" name="multi_img[]" class="form-control" id="multiImg"
                                                multiple="">
                                        </div>
                                        <div class="row" id="preview_img"> </div>
                                    </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="inputEmail4" class="form-label">News Details 1 </label>
                                    <textarea id="tiny" name="news_description"></textarea>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="inputEmail4" class="form-label">News Details 2</label>
                                    <textarea id="tiny" name="news_description_2"></textarea>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="inputEmail4" class="form-label">News Details 3</label>
                                    <textarea id="tiny" name="news_description_3"></textarea>
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <label for="inputEmail4" class="form-label">Tags </label>
                                    <input type="text" name="tags" class="selectize-close-btn" value="awesome">
                                </div>

                                <div class="row mb-3">
                                    <div class="d-flex col-lg-6 gap-5">
                                        <div class="form-check mb-2 form-check-primary">
                                            <input class="form-check-input" type="checkbox" name="breaking_news"
                                                value="1" id="customckeck1">
                                            <label class="form-check-label" for="customckeck1">Breaking News</label>
                                        </div>

                                        <div class="form-check mb-2 form-check-primary">
                                            <input class="form-check-input" type="checkbox" name="top_slider" value="1"
                                                id="customckeck2">
                                            <label class="form-check-label" for="customckeck2">Top Slider</label>
                                        </div>

                                    </div>

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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#multiImg').on('change', function() { //on file input change
                if (window.File && window.FileReader && window.FileList && window
                    .Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data

                    $.each(data, function(index, file) { //loop though each file
                        if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file
                                .type)) { //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file) { //trigger function on successful read
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src',
                                            e.target.result).width(100)
                                        .height(80); //create image element 
                                    $('#preview_img').append(
                                        img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });

                } else {
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });
    </script>
@endsection
