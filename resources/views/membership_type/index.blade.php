    @extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="panel panel-default">
	            <div class="panel-heading">Roles            
	             <div class="pull-right">
	                    <a class="btn btn-success" href="{{ route('membershiptype.create') }}"> Create New Membership Type</a>
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
                <th>Price</th>
                <th width="280px">Action</th>
            </tr>
          
     @foreach ($membershiptype as $type)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{$type->title}}</td>
             <td>${{$type->price}}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('membershiptype.edit',$type->id) }}">Edit</a> 
                {!! Form::open(['method' => 'DELETE','route' => ['membershiptype.destroy',$type->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!} 
            </td>
        </tr>
        @endforeach
        </table>
        {!! $membershiptype->render() !!}
       </div>
      </div>
   </div>
  @endsection