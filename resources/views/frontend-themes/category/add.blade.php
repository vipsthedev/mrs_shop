@extends('layouts.forntend') @section('content')

<div id="registration" class="registration section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2" style="margin-top: 115px;">
                <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>New <em>Category Details</em></h4>
                    <img src="{{ asset('assets-fornt/images/heading-line-dec.png') }}" alt="" />
                    <p>Fill in the form below for Reapring Details.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                        <div class="col col-md-3"><label for="text-input" class="form-control-label">Category Name</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Enter Category Name" class="form-control" /><br /></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="selectLg" class="form-control-label">Select Category</label></div>
                        <div class="col-12 col-md-9">
                            <select name="parent_id" id="selectLg" class="form-control">
                                <option value="">Please select Category</option>
                                @foreach($category as $cate)
                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                                @endforeach
                            </select>
                            <br />
                        </div>
                    </div>
                   <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class="form-control-label">Description</label></div>
                        <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea><br /></div>
                    </div>
                    <div class="row form-group">
                     <div class="col col-md-3"></div>
                     <div class="col col-md-3"> <button type="submit" class="btn btn-primary">Save Details</button></div>
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
