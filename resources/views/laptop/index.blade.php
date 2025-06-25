@extends('layouts.app')

@section('content')
<div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                Comming soon
                                <!-- <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Company</th>
                                            <th>Delivery Date</th>
                                            <th>Images</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mobileRepairing as $mobile)
                                            <tr>
                                                <td>{{ $mobile->customer_name }}</td>
                                                <td>{{ $mobile->customer_date }}</td>
                                                <td>{{ $mobile->Company->name }}</td>
                                                <td>{{ $mobile->delivery_date }}</td>
                                                <td><img src="\mobile-repairing-img\{{ $mobile->mobile_images }}" height="100" width="100" /></td>
                                                <td>
                                                    <a href="{{ route('mobile-repairing.edit', $mobile->id) }}"><i class="fa fa-edit"></i></a>
                                                    <form action="{{ route('mobile-repairing.destroy', $mobile->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('Are you sure?')"><i class="fa fa-times"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table> -->
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
@endsection
