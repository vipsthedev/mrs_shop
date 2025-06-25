@extends('layouts.forntend') @section('content')

<div id="registration" class="registration section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2" style="margin-top: 115px;">
                <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>View <em><a href="{{ route('user-mobile-repairing.index') }}">Mobile Details</a></em></h4>
                    <img src="{{ asset('assets-fornt/images/heading-line-dec.png') }}" alt="" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                
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
                        <div class="col col-md-3"><label for="text-input" class="form-control-label">Customer Name</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="customer_name" value="{{$mobileRepairing->customer_name}}" placeholder="Enter Customer Name" class="form-control"  disabled /><br /></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="email-input" class="form-control-label">Email</label></div>
                        <div class="col-12 col-md-9"><input type="email" id="email-input" name="customer_email" placeholder="Enter Email" class="form-control" value="{{$mobileRepairing->customer_email}}" disabled/><br /></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class="form-control-label">Address</label></div>
                        <div class="col-12 col-md-9"><textarea name="customer_address" id="textarea-input" rows="9" placeholder="Content..." class="form-control" disabled>{{$mobileRepairing->customer_address}}</textarea><br /></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="selectLg" class="form-control-label">Select Compnay</label></div>
                        <div class="col-12 col-md-9">
                            <select name="company_id" id="selectLg" class="form-control" disabled>
                                <option value="">Please select Compnay</option>
                                @foreach($companies as $cate)
                                @if($mobileRepairing->company_id==$cate->id)
                                   <option value="{{$cate->id}}" selected="">{{$cate->name}}</option>
                                @else
                                   <option value="{{$cate->id}}">{{$cate->name}}</option>
                                @endif
                                @endforeach
                            </select>
                            <br />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class="form-control-label">Mobile Name</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="customer_mobile_name" value="{{$mobileRepairing->customer_mobile_name}}" placeholder="Enter Mobile Name" class="form-control" disabled/><br />
                            <!-- <small class="form-text text-muted"></small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class="form-control-label">Mobile Model</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="customer_mobile_model" value="{{$mobileRepairing->customer_mobile_model}}" placeholder="Enter Mobile Model" class="form-control"  disabled/><br />
                            <!-- <small class="form-text text-muted"></small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class="form-control-label">Mobile IMI Number</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="customer_mobile_imi_number" placeholder="Enter Mobile Model" class="form-control" value="{{$mobileRepairing->customer_mobile_imi_number}}" disabled/><br />
                            <!-- <small class="form-text text-muted"></small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class="form-control-label">Mobile Problem</label></div>
                        <div class="col-12 col-md-9"><textarea name="customer_mobile_problem" id="textarea-input" rows="9" placeholder="Content..." class="form-control" disabled>{{$mobileRepairing->customer_mobile_problem}}</textarea><br></div> 
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class="form-control-label">Select</label></div>
                        <div class="col-12 col-md-9">
                            <select name="status" id="status" class="form-control" disabled>
                                                @if($mobileRepairing->status==0)
                                                <option value="0" selected="">Pending</option>
                                                @else
                                                <option value="0">Pending</option>
                                                @endif
                                                @if($mobileRepairing->status==1)
                                                <option value="1" selected="">Completed</option>
                                                @else
                                                <option value="1">Completed</option>
                                                @endif
                                                @if($mobileRepairing->status==2)
                                                <option value="2" selected="">Not Possible</option>
                                                @else
                                                <option value="2">Not Possible</option>
                                                @endif
                                                @if($mobileRepairing->status==3)
                                                <option value="3" selected="">Other</option>
                                                @else
                                                <option value="3">Other</option>
                                                @endif

                            </select>
                            <br />
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class="form-control-label">Reapring Cost</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="reapring_cost" placeholder="Enter Reapring Cost" class="form-control" value="{{$mobileRepairing->reapring_cost}}" disabled/><br />
                            <!-- <small class="form-text text-muted"></small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class="form-control-label">Reapring Charge</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="reapring_charge" placeholder="Enter Reapring Charge" class="form-control" value="{{$mobileRepairing->reapring_charge}}" disabled /><br />
                            <!-- <small class="form-text text-muted"></small> -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class="form-control-label">Total Amount</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="total_amount" placeholder="Enter Amount" class="form-control" value="{{$mobileRepairing->total_amount}}" disabled/><br  />
                            <!-- <small class="form-text text-muted"></small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class="form-control-label">Delivery Date</label></div>
                        <div class="col-12 col-md-9"><input type="date" id="text-input" name="delivery_date" placeholder="" class="form-control" value="{{$mobileRepairing->delivery_date}}" disabled/><br /></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class="form-control-label">Receiver Name</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="receiver_person_name" placeholder="Enter Receiver Name" class="form-control" value="{{$mobileRepairing->receiver_person_name}}" disabled /><br />
                            <!-- <small class="form-text text-muted"></small> -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class="form-control-label">Reference Name</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="reference_name" placeholder="Enter Reference Name" class="form-control" value="{{$mobileRepairing->reference_name}}" disabled/><br />
                            <!-- <small class="form-text text-muted"></small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class="form-control-label">Other contact Details</label></div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="other_contact_details" placeholder="Enter Mobile Number" class="form-control" value="{{$mobileRepairing->other_contact_details}}" disabled/><br />
                            <!-- <small class="form-text text-muted"></small> -->
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class="form-control-label">Comments</label></div>
                        <div class="col-12 col-md-9"><textarea name="comments" id="textarea-input" rows="9" placeholder="Content..." class="form-control" disabled>{{$mobileRepairing->other_contact_details}}</textarea><br /></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class="form-control-label">Mobile Images</label></div>
                        <div class="col-12 col-md-9"><br>
                           <table>
                            @foreach($mobileRepairing->MobileRepairingImage as $images)
                            <td><img style="width:150px" src="\mobile-repairing-img\{{$images->mobile_images}}"></img></td>
                            @endforeach
                           </table>
                    </div>
                    </div>
                    <div class="row form-group">
                     <div class="col col-md-3"></div>
                     <div class="col col-md-3"> 
                        <!-- <button type="submit" class="btn btn-primary">Save Details</button> -->
                    </div>
                    </div>
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
