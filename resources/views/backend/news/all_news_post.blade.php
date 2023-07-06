@extends('admin.admin_dashboard')
@section('admin')
    @php
        $activenews = App\Models\NewsPost::where('status', 1)->get();
        $inactivenews = App\Models\NewsPost::where('status', 0)->get();
        $breakingnews = App\Models\NewsPost::where('breaking_news', 1)->get();
    @endphp

    <style>
        /* tbody tr td {
                                                                                    display: inline-block;
                                                                                } */
        .num {
            /* display: inline-block; */
            /* align-items: center; */
            /* justify-content: center; */
        }
    </style>
    <div class="page-content">
        <!-- Start Content-->

        <!-- start page title -->

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('add.news.post') }}" class="btn btn-inverse-info"> Add News
                    Post </a>
            </ol>
        </nav>
        <!-- end page title -->

        <br>

        <div class="row mb-5">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-primary border-primary border shadow">
                                    <i class="fe-heart font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-white mt-1"> <span data-plugin="counterup">{{ count($allnews) }}</span>
                                    </h3>
                                    <p class="text-muted mb-1 text-truncate">All News Post</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-success border-success border shadow">
                                    <i class="fe-thumbs-up font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-white mt-1"><span
                                            data-plugin="counterup">{{ count($activenews) }}</span>
                                    </h3>
                                    <p class="text-muted mb-1 text-truncate">Active News</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-info border-info border shadow">
                                    <i class="fe-thumbs-down font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-white mt-1"><span
                                            data-plugin="counterup">{{ count($inactivenews) }}</span> </h3>
                                    <p class="text-muted mb-1 text-truncate">InActive News</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-warning border-warning border shadow">
                                    <i class="fe-eye font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-white mt-1"><span
                                            data-plugin="counterup">{{ count($breakingnews) }}</span> </h3>
                                    <p class="text-muted mb-1 text-truncate">Breaking News</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Image </th>
                                    <th>Title </th>
                                    <th>Category </th>
                                    <th>User </th>
                                    <th>Date </th>
                                    <th>Status </th>
                                    <th>Action </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($allnews as $key => $item)
                                    <tr>
                                        <td class="num">{{ $key + 1 }}</td>
                                        <td>
                                            <img src="{{ asset($item->image) }} " style="width: 50px; height:50px;">
                                        </td>
                                        <td>{{ Str::limit($item->news_title, 20) }}</td>
                                        <td>{{ $item->category->category_name }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ Carbon\Carbon::parse($item->post_date)->diffForHumans() }}</td>
                                        <td>
                                            @if ($item->status == 1)
                                                <span class="badge badge-pill bg-success">Active</span>
                                            @else
                                                <span class="badge badge-pill bg-danger">InActive</span>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{ route('edit.news.post', $item->id) }}"
                                                class="btn btn-primary rounded-pill waves-effect waves-light">
                                                <i class="bi bi-pen-fill"></i>
                                            </a>

                                            <a href="{{ route('delete.news.post', $item->id) }}"
                                                class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">
                                                <i class="bi bi-trash3-fill"></i>
                                            </a>

                                            @if ($item->status == 1)
                                                <a href="{{ route('inactive.news.post', $item->id) }}"
                                                    class="btn btn-primary rounded-pill waves-effect waves-light"
                                                    title="Inactive"> <i class="bi bi-emoji-smile-upside-down-fill"></i></a>
                                            @else
                                                <a href="{{ route('active.news.post', $item->id) }}"
                                                    class="btn btn-primary rounded-pill waves-effect waves-light"
                                                    title="Active"><i class="bi bi-emoji-smile-fill"></i></a>
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
@endsection
