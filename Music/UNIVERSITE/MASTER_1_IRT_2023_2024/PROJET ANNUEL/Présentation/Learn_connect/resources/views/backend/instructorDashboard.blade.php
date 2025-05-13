@extends('backend.layouts.app')
@section('title', 'Instructor Dashboard') 

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
                        <h3 class="card-title text-white">Nombre des étudiants</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i>22</h5>
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
                        <h3 class="card-title text-white">Nombre des instructeurs</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i>17</h5>
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
                        <h3 class="card-title text-white">Nombre des cours</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i>15</h5>
                    </div>
                   
                </div>
            </div>
            <div class="col-xl-3 col-xxl-3 col-sm-6">
                <div class="widget-stat card bg-danger overflow-hidden">
                    <div class="card-header pb-3">
                        <h3 class="card-title text-white">Nombre de lecons</h3>
                        <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i>50</h5>
                    </div>
                    
                </div>
            </div>
           
            
        </div>
    </div>
</div>

@endsection

@push('scripts')
<!-- Chart ChartJS plugin files -->
<script src="{{asset('public/vendor/chart.js/Chart.bundle.min.js')}}"></script>

<!-- Chart piety plugin files -->
<script src="{{asset('public/vendor/peity/jquery.peity.min.js')}}"></script>

<!-- Chart sparkline plugin files -->
<script src="{{asset('public/vendor/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Demo scripts -->
<script src="{{asset('public/js/dashboard/dashboard-3.js')}}"></script>
@endpush