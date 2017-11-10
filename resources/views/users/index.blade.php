    @extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="panel panel-default">
	            <div class="panel-heading">Users            
	             <!-- <div class="pull-right">
	                    <a class="btn btn-success" href="#"> Create New User</a>
	                </div> -->
	            </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                 <th>Email</th>
                <th>Role</th>
                <th width="280px">Action</th>
            </tr>
          
     @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->rolename->name}}</td>
            <td>
              <!--  <a class="btn btn-info" href="">Show</a>
                <a class="btn btn-primary" href="">Edit</a>-->
                {!! Form::open(['method' => 'DELETE','route' => ['alluser.destroy', $user->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </table>
        {!! $users->render() !!}
       </div>
      </div>
   </div>
  @endsection