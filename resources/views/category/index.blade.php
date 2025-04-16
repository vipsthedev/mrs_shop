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
                                            <th>Parent Category</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($category as $cate)
                                            <tr>
                                                <td>{{ $cate->id }}</td>
                                                <td>{{ $cate->name }}
                                                </td>
                                                <td> 
                                                    @if($cate->parent)
                                                    {{ $cate->parent->name }}  <!-- Access parent category's name -->
                                                    @else
                                                        No Parent
                                                    @endif
                                                </td>
                                                <td>{{ $cate->description }}</td>
                                                <td>
                                                    <a href="{{ route('category.edit', $cate->id) }}"><i class="fa fa-edit"></i></a>
                                                    <form action="{{ route('category.destroy', $cate->id) }}" method="POST" style="display:inline;">
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
