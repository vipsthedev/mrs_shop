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
          <h4>Laptop Reparing <em>List</em></h4>
          <!-- <a href="{{url('mobile-repairing-add')}}">Add Laptop Reparing</a> -->
          <!-- <img src="{{ asset('assets-fornt/images/heading-line-dec.png') }}" alt=""> -->
          <!-- <p>Below is the list of users who have registered on your platform.</p> -->
        </div>
          <form method="GET" action="{{ url('mobile-repairing') }}" style="margin-bottom: 20px;margin-left: 700px">
          <input type="text" name="search" placeholder="Search by Name or Company" value="{{ request()->get('search') }}" class="form-control" style="width: 300px; display: inline-block;">
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <table id="usersTable" class="table table-striped table-bordered">
         <font color="red"> You have not permission to accesss this module please connect to support team for more details</font>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- <script>
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
</script> -->

@endsection
