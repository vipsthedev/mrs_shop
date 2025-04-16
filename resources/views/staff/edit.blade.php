@extends('layouts.app')

@section('content')
<div class="animated fadeIn">
        <div class="row">
                    
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">
                                <strong>Staff </strong> Register
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ route('staff.update',$staff->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

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
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Frist Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="first_name" placeholder="Enter Frist Name" class="form-control" value="{{$staff->first_name}}">
                                         </div>
                                    </div>
                                     <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Last Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="last_name" placeholder="Enter Last Name" class="form-control" value="{{$staff->last_name}}">
                                         </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="text-input" name="email" placeholder="Enter Email" class="form-control" value="{{$staff->email}}">
                                         </div>
                                    </div>
                                     <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="phone" placeholder="Enter Phone Name" class="form-control" value="{{$staff->phone}}">
                                         </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">DateOfBrith</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="text-input" name="date_of_birth" placeholder="Enter Phone Name" class="form-control" value="{{$staff->date_of_birth}}">
                                         </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="radio1" class="form-check-label ">
                                                        @if($staff->gender=="male")
                                                        <input type="radio" id="gender" name="gender" value="male" class="form-check-input" checked="">Male
                                                        @else
                                                        <input type="radio" id="gender" name="gender" value="male" class="form-check-input" checked="">Male
                                                        @endif
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio1" class="form-check-label ">
                                                        @if($staff->gender=="Female")
                                                        <input type="radio" id="gender" name="gender" value="Female" class="form-check-input" checked="">Female
                                                        @else
                                                        <input type="radio" id="gender" name="gender" value="Female" class="form-check-input">Female
                                                        @endif
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Address</label></div>
                                        <div class="col-12 col-md-9"><textarea name="address" id="textarea-input" rows="9" placeholder=" Enter Description" class="form-control">{{$staff->address}}</textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">department</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="department" placeholder="Enter Department Name" class="form-control" value="{{$staff->department}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Position</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="position" placeholder="Enter Position Name" class="form-control" value="{{$staff->position}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="status" id="status" class="form-control">
                                                @if($staff->status=="active")
                                                <option value="active" selected="">Active</option>
                                                @else
                                                <option value="inactive" selected="">InActive</option>
                                                @endif
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hire Date </label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="text-input" name="hire_date" placeholder="Enter Purchase Date" class="form-control" value="{{$staff->hire_date}}">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Shift Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="shift_name" placeholder="Enter Shift" class="form-control" value="{{$staff->shift_name}}">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                    <a href="{{ url('staff') }}"> Back</a>
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
