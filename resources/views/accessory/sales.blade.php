@extends('layouts.app')

@section('content')
<div class="animated fadeIn">
        <div class="row">
                    
                    <div class="col-lg-10">
                        <div class="card">
                             @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            <div class="card-header">
                                <strong>Accessory </strong> Selling
                            </div>
                            <div class="card-body card-block">
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
                                            </select>
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
                                <!-- <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div> -->
                        
                        </div>
                    </div>
        </div>
@endsection
