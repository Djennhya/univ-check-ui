@extends('backend.layouts.app')
@section('title', 'Admin Dashboard')

@push('styles')
<link rel="stylesheet" href="{{asset('/vendor/jqvmap/css/jqvmap.min.css')}}">
<link rel="stylesheet" href="{{asset('/vendor/chartist/css/chartist.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/skin-2.css')}}">
@endpush

@section('content')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="widget-stat card bg-primary overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title text-white">Total des étudiants</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 12</h5>
                    </div>
                    <div class="card-body text-center mt-3">
                        <div class="ico-sparkline">
                            <div id="sparkline12"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="widget-stat card bg-success overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title text-white">Total des instructeurs</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i>7</h5>
                    </div>
                    <div class="card-body text-center mt-4 p-0">
                        <div class="ico-sparkline">
                            <div id="spark-bar-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="widget-stat card bg-secondary overflow-hidden">
                    <div class="card-header pb-3">
                        <h3 class="card-title text-white">Total des cours</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i>10</h5>
                    </div>
                    <div class="card-body p-0 mt-2">
                        <div class="px-4"><span class="bar1"
                                data-peity='{ "fill": ["rgb(0, 0, 128)", "rgb(7, 135, 234)"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="widget-stat card bg-success overflow-hidden">
                    <div class="card-header pb-3">
                        <h3 class="card-title text-white">Total des leçons</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i>20</h5>
                    </div>
                    <div class="card-body p-0 mt-1">
                        <span class="peity-line-2" data-width="100%"></span>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>

@endsection

@push('scripts')
<!-- Chart ChartJS plugin files -->
<script src="{{asset('/vendor/chart.js/Chart.bundle.min.js')}}"></script>

<!-- Chart piety plugin files -->
<script src="{{asset('/vendor/peity/jquery.peity.min.js')}}"></script>

<!-- Chart sparkline plugin files -->
<script src="{{asset('/vendor/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Demo scripts -->
<script src="{{asset('/js/dashboard/dashboard-3.js')}}"></script>
@endpush