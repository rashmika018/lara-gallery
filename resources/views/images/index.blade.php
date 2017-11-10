    @extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="panel panel-default">
	            <div class="panel-heading">Images            
	             <div class="pull-right">
	                    <a class="btn btn-success" href="{{ route('images.create') }}"> Create New Image</a>
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
                <th>Cover Image</th>
                <th>Album Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr> 
        @foreach ($images as $image)
        <tr>
            <td>{{ ++$i }}</td>
             <td> <img alt="{{ $image->album_id}}" src="{{ URL::to('/') }}/public/albums/image/{{ $image->image}}" width="100" height="100"></td>
            <td>{{ $image->albumname->name}}</td>
            <td>{{ $image->description}}</td>
            <td>
                <a class="btn btn-info" href="{{ route('images.show',$image->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('images.edit',$image->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['images.destroy', $image->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </table>
        {!! $images->render() !!}  
       </div>
      </div>
   </div>
  @endsection