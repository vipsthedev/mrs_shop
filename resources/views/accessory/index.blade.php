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
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <!-- <th>Purchase Date</th> -->
                                            <th>Quantity</th>
                                            <!-- <th>Restock Quantity</th> -->
                                            <th>Status</th>
                                            <!-- <th>Description</th> -->
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($accessories as $acces)
                                            <tr>
                                                <td>{{ $acces->id }}</td>
                                                <td>{{ $acces->name }}</td>
                                                <!-- <td>{{ $acces->purchase_date }}</td> -->
                                                <td>{{ $acces->quantity }}</td>
                                                <!-- <td>{{ $acces->restock_quantity }}</td> -->
                                                <!-- <td>{{ $acces->restock_quantity }}</td> -->
                                                <td>{{ $acces->status }}</td>
                                                <!-- <td>{{ $acces->description }}</td> -->
                                                <td>
                                                    
                                                    <a href="{{ route('accessories.show', $acces->id) }}"><i class="fa fa-eye"></i></a></a>
                                                    <a href="{{ route('accessories.edit', $acces->id) }}"><i class="fa fa-edit"></i></a>
                                                    
                                                    <form action="{{ route('accessories.destroy', $acces->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('Are you sure?')"><i class="fa fa-times"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
@endsection
