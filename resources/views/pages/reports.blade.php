@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">

                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Reports</h4>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="userDatatable orderDatatable global-shadow py-30 px-sm-30 px-20 radius-xl w-100 mb-30">
                    <div class="project-top-wrapper d-flex justify-content-between flex-wrap mb-25 mt-n10">
                        <div class="content-center mt-10">

                        </div><!-- End: .content-center -->
                    </div><!-- End: .project-top-wrapper -->
                    <div class="tab-content" id="ap-tabContent">
                        <div class="tab-pane fade show active" id="ap-overview" role="tabpanel"
                            aria-labelledby="ap-overview-tab">
                            <!-- Start Table Responsive -->
                            <div class="table-responsive">
                                <table class="table mb-0 table-hover table-borderless border-0">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th>
                                                <div class="d-flex align-items-center">

                                                    <div class="bd-example-indeterminate">
                                                        <div class="checkbox-theme-default custom-checkbox  check-all">
                                                            <input class="checkbox" type="checkbox" id="check-23e">
                                                            <label for="check-23e">
                                                                <span class="checkbox-text ms-3">
                                                                    Blog Title

                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Report</span>
                                            </th>
                                            <th>
                                                <span class="userDatatable-title">Date</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reports as $report)
                                            <tr>
                                                <td>
                                                    <a href="/blogs/reports/{{ $report->id }}">
                                                        <div class="orderDatatable-title">
                                                            {{ $report->blog->title }}
                                                        </div>
                                                    </a>

                                                </td>
                                                <td>
                                                    <div class="orderDatatable-status d-inline-block">
                                                        <span class="text-danger">
                                                            <a href="/blogs/reports/{{ $report->id }}">
                                                                {{ Str::limit($report->comment, 40) }}
                                                            </a>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="orderDatatable-title float-end">
                                                        {{-- January 20, 2020 --}}
                                                        {{ $report->created_at->diffForHumans() }}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                        <!-- End: tr -->
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table Responsive End -->
                        </div>
                    </div>
                </div><!-- End: .userDatatable -->
            </div><!-- End: .col -->
        </div>
    </div>
@endsection
