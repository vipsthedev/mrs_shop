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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($staff as $staffDetails)
                                            <tr>
                                                <td>{{ $staffDetails->first_name }}- {{ $staffDetails->last_name }}</td>
                                                <td>{{ $staffDetails->email }}</td>
                                                <td>{{ $staffDetails->status }}</td>
                                                <td>
                                                    <a href="{{ route('staff.edit', $staffDetails->id) }}"><i class="fa fa-edit"></i></a>
                                                    <form action="{{ route('staff.destroy', $staffDetails->id) }}" method="POST" style="display:inline;">
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
