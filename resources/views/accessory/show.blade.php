@extends('layouts.app')

@section('content')
<div class="animated fadeIn">
        <div class="row">
                    
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">
                                <strong>Accessory </strong> Details  
                            </div>
                            <div class="card-body card-block">
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Accessory Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Enter Accessory Name" class="form-control" value="{{$accessory->name}}" disabled>
                                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Select Compnay</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="company_id" id="selectLg" class="form-control-lg form-control" disabled>
                                                <option value="">Please select category</option>
                                                @foreach($companies as $cate)
                                                @if($accessory->company_id==$cate->id)
                                                <option value="{{$cate->id}}" selected="">{{$cate->name}}</option>
                                                @else
                                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Select Category</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="category_id" id="selectLg" class="form-control-lg form-control" disabled>
                                                <option value="">Please select category</option>
                                                @foreach($categories as $cam)
                                                    @if($accessory->category_id==$cam->id)
                                                    <option value="{{$cam->id}}" selected="">{{$cam->name}}</option>
                                                    @else
                                                    <option value="{{$cam->id}}">{{$cam->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Brand Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="brand" placeholder="Enter Brand Name" class="form-control" value="{{$accessory->brand}}" disabled>
                                         </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                        <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9" placeholder=" Enter Description" class="form-control" disabled>{{$accessory->description}}</textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">supplier Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="supplier" placeholder="Enter Supplier Name" class="form-control" value="{{$accessory->supplier}}" disabled>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="status" id="select" class="form-control" disabled>
                                                <option value="0">Please status</option>
                                                @if($accessory->status==1)
                                                <option value="1" selected="">Available</option>
                                                @else
                                                <option value="1">Available</option>
                                                @endif
                                                @if($accessory->status==2)
                                                <option value="2" selected="">OutofStock</option>
                                                @else
                                                <option value="2">OutofStock</option>
                                                @endif
                                                @if($accessory->status==3)
                                                <option value="3" selected="">Discontinued</option>
                                                @else
                                                <option value="3">Discontinued</option>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Warranty Period </label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="warranty_period" placeholder="Enter Warranty Period" class="form-control" value="{{$accessory->warranty_period}}" disabled>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Purchase Date </label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="text-input" name="purchase_date" placeholder="Enter Purchase Date" class="form-control"  value="{{$accessory->purchase_date}}" disabled>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Quantity</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="quantity" placeholder="Enter Quantity" class="form-control" value="{{$accessory->quantity}}" disabled>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Restock Quantity</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="restock_quantity" placeholder="Enter Re Stock Quantity " class="form-control" value="{{$accessory->restock_quantity}}" disabled>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Purchase Cost</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="purchase_cost" placeholder="Enter Purchase Cost" class="form-control" value="{{$accessory->purchase_cost}}" disabled>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Selling Price</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="selling_price" placeholder="Enter Selling Price" class="form-control" value="{{$accessory->selling_price}}" disabled>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Discount</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="discount" placeholder="Enter Discount Price" class="form-control" value="{{$accessory->discount}}" disabled>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Supplier Contact</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="supplier_contact" placeholder="Enter Supplier Contact" class="form-control" value="{{$accessory->supplier_contact}}" disabled>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Location</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="location" placeholder="Enter Location" class="form-control" value="{{$accessory->location}}" disabled>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> PDF
                                    </button>
                                    <a href="{{ url('accessories') }}"> <i class="fa fa-dot-circle-o"></i>Back</a>
                                </div>
                                
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
