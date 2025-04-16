@extends('layouts.app')

@section('content')
 <div class="animated fadeIn">
        <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Basic Map</h4>
                            </div>
                            <div class="gmap_unix card-body">
                                <div class="map" id="basic-map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Fusion Tables layers</h4>
                            </div>
                            <div class="card-body">
                                <div id="map-2" class="map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->


                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Geometry overlays</h4>
                            </div>
                            <div class="card-body">
                                <div class="map" id="map-3"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Elevation locations</h4>
                            </div>
                            <div class="card-body">
                                <div id="map-4" class="map"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                </div>
</div>
@endsection
