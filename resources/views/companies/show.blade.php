@extends('layouts.app')

@section('content')
<div class="animated fadeIn">
        <div class="row">
                    
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">
                                <strong>Compnay </strong> View
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ route('companies.update',$companies->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

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
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Compnay Name</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Enter Compnay Name" value="{{$companies->name}}" class="form-control">
                                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                        <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9" placeholder=" Enter Description" class="form-control">{{$companies->description}}</textarea></div>
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
