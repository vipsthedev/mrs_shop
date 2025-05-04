@extends('layouts.forntend')


@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

<!-- Include jQuery and DataTables JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<div id="registered-users" class="registered-users section">
  <div class="container">
    <div class="row">
     
      <div class="col-lg-12" style="margin-top: 115px;">
         @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
        @endif
        <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s" >
          <h4>Mobile Reparing <em>List</em></h4>
          <a href="{{url('mobile-repairing-add')}}">Add Mobile Reparing</a>
          <!-- <img src="{{ asset('assets-fornt/images/heading-line-dec.png') }}" alt=""> -->
          <!-- <p>Below is the list of users who have registered on your platform.</p> -->
        </div>
          <form method="GET" action="{{ url('mobile-repairing') }}" style="margin-bottom: 20px;margin-left: 700px">
          <input type="text" name="search" placeholder="Search by Name or Company" value="{{ request()->get('search') }}" class="form-control" style="width: 300px; display: inline-block;">
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <table id="usersTable" class="table table-striped table-bordered">
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
            <!-- User data will be dynamically inserted here -->
            @foreach($mobileRepairing as $mobile)
             <tr>
               <td>{{ $mobile->customer_name }}</td>
               <td>{{ $mobile->customer_date }}</td>
               <td>{{ $mobile->Company->name }}</td>
               <td>{{ $mobile->delivery_date }}</td>
               <td style="width:120px"><img src="\mobile-repairing-img\{{ $mobile->mobile_images }}" height="100" width="50" /></td>
               <td>
                  <a href="{{ route('user-mobile-repairing.edit', $mobile->id) }}"><i class="fa fa-edit"></i></a>
                  <form action="{{ route('mobile-repairing.destroy', $mobile->id) }}" method="POST" style="display:inline;">
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
<script>
   $(document).ready(function() {
    var table = $('#usersTable').DataTable({
      "paging": true,
      "searching": true,
      "ordering": true,
      "info": true
    });

    // Custom column search (for example, searching by Company)
    $('#companyFilter').on('keyup', function () {
      table.column(2).search(this.value).draw();  // column 2 is for 'Company'
    });

    // You can add more custom filters as needed
  });
</script>

@endsection
