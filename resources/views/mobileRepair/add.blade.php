@extends('layouts.app')

@section('content')
<div class="animated fadeIn">
        <div class="row">
                    
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">
                                <strong>Mobile Repairing</strong> Register
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ route('mobile-repairing.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <!-- Display all validation errors -->
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Customer Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="customer_name" placeholder="Enter Customer Name" class="form-control">
                                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="email-input" name="customer_email" placeholder="Enter Email" class="form-control">
                                            <!-- <small class="help-block form-text">Please enter your email</small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Address</label></div>
                                        <div class="col-12 col-md-9"><textarea name="customer_address" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Select Compnay</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="company_id" id="selectLg" class="form-control-lg form-control">
                                                <option value="">Please select Compnay</option>
                                                @foreach($companies as $cate)
                                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                   <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mobile Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="customer_mobile_name" placeholder="Enter Mobile Name" class="form-control">
                                            <!-- <small class="form-text text-muted"></small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mobile Model</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="customer_mobile_model" placeholder="Enter Mobile Model" class="form-control">
                                            <!-- <small class="form-text text-muted"></small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mobile Problem</label></div>
                                        <div class="col-12 col-md-9"><textarea name="customer_mobile_problem" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                    </div>
                                     <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="status" id="status" class="form-control">
                                                <option value="0">Pending</option>
                                                <option value="1">completed</option>
                                                <option value="2">Not Possible</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>
                                    </div>
 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Reapring Cost</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="reapring_cost" placeholder="Enter Reapring Cost" class="form-control">
                                            <!-- <small class="form-text text-muted"></small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Reapring Charge</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="reapring_charge" placeholder="Enter Reapring Charge" class="form-control">
                                            <!-- <small class="form-text text-muted"></small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Total Amount</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="total_amount" placeholder="Enter Amount" class="form-control">
                                            <!-- <small class="form-text text-muted"></small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Delivery Date</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="text-input" name="delivery_date" placeholder="" class="form-control">
                                         </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Receiver Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="receiver_person_name" placeholder="Enter Receiver Name" class="form-control">
                                            <!-- <small class="form-text text-muted"></small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Reference Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="reference_name" placeholder="Enter Reference Name" class="form-control">
                                            <!-- <small class="form-text text-muted"></small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Other contact Details</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="other_contact_details" placeholder="Enter Mobile Number" class="form-control">
                                            <!-- <small class="form-text text-muted"></small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Comments</label></div>
                                        <div class="col-12 col-md-9"><textarea name="comments" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Mobile Images</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="mobile_images[]" multiple class="form-control-file"></div>
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
                        </div>
                        </form>
                        <div class="card">
                            
                        </div>
                    </div>
        </div>
@endsection
