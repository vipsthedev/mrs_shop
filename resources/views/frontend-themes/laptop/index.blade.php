@extends('layouts.forntend')


@section('content')

<div id="registered-users" class="registered-users section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12" style="margin-top: 115px;">
        <div class="section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s" >
          <h4>Mobile Reparing <em>List</em></h4>
          <a href="{{url('mobile-repairing-add')}}">Add Mobile Reparing</a>
          <!-- <img src="{{ asset('assets-fornt/images/heading-line-dec.png') }}" alt=""> -->
          <!-- <p>Below is the list of users who have registered on your platform.</p> -->
        </div>
        <table id="usersTable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- User data will be dynamically inserted here -->
            <tr>
              <td>1</td>
              <td>vipul</td>
              <td>vipul@gmail.com</td>
              <td>Add/edit/Delete</td>
            </tr>
            <tr>
              <td>1</td>
              <td>vipul</td>
              <td>vipul@gmail.com</td>
              <td>Add/edit/Delete</td>
            </tr><tr>
              <td>1</td>
              <td>vipul</td>
              <td>vipul@gmail.com</td>
              <td>Add/edit/Delete</td>
            </tr><tr>
              <td>1</td>
              <td>vipul</td>
              <td>vipul@gmail.com</td>
              <td>Add/edit/Delete</td>
            </tr><tr>
              <td>1</td>
              <td>vipul</td>
              <td>vipul@gmail.com</td>
              <td>Add/edit/Delete</td>
            </tr><tr>
              <td>1</td>
              <td>vipul</td>
              <td>vipul@gmail.com</td>
              <td>Add/edit/Delete</td>
            </tr><tr>
              <td>1</td>
              <td>vipul</td>
              <td>vipul@gmail.com</td>
              <td>Add/edit/Delete</td>
            </tr><tr>
              <td>1</td>
              <td>vipul</td>
              <td>vipul@gmail.com</td>
              <td>Add/edit/Delete</td>
            </tr><tr>
              <td>1</td>
              <td>vipul</td>
              <td>vipul@gmail.com</td>
              <td>Add/edit/Delete</td>
            </tr><tr>
              <td>1</td>
              <td>vipul</td>
              <td>vipul@gmail.com</td>
              <td>Add/edit/Delete</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
