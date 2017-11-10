    @extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="panel panel-default">
	            <div class="panel-heading">Roles            
	             <div class="pull-right">
	                    <a class="btn btn-success" href="{{ route('role.create') }}"> Create New Role</a>
	                </div>
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
                <th width="280px">Action</th>
            </tr>
          
     @foreach ($role as $roles)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$roles->name}}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('role.edit',$roles->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['role.destroy', $roles->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </table>
        {!! $role->render() !!}
       </div>
      </div>
   </div>
  @endsection