@extends('layouts.forntend') @section('content')

<div id="registration" class="registration section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2" style="margin-top: 115px;">
                <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>Sale <em>Accessories Details</em></h4>
                    <img src="{{ asset('assets-fornt/images/heading-line-dec.png') }}" alt="" />
                    <p>Fill in the form below for Reapring Details.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
               <form action="{{ route('accessories.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="sales_accessory" value="1">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Select Accessories</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="accessory_id" id="selectLg" class="form-control-lg form-control">
                                                <option value="">Please select accessories</option>
                                                @foreach($accessories as $access)
                                                   <option value="{{$access->id}}">{{$access->name}}</option>
                                                @endforeach
                                            </select> </br>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Sales Quantity</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="sales_quantity" placeholder="Enter Sales Quantity" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                                </form>
            </div>
            <div class="col-lg-3">

                <img src="{{ asset('assets-fornt/images/logo.png') }}" alt="Chain App Dev" />
                <img src="{{ asset('assets-fornt/images/logo.png') }}" alt="Chain App Dev" />
                <img src="{{ asset('assets-fornt/images/logo.png') }}" alt="Chain App Dev" />
                <img src="{{ asset('assets-fornt/images/logo.png') }}" alt="Chain App Dev" />
                <img src="{{ asset('assets-fornt/images/logo.png') }}" alt="Chain App Dev" />
                <img src="{{ asset('assets-fornt/images/logo.png') }}" alt="Chain App Dev" />
                <img src="{{ asset('assets-fornt/images/logo.png') }}" alt="Chain App Dev" />

            </div>
        </div>
    </div>
</div>

@endsection
