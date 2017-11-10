    @extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="panel panel-default">
	            <div class="panel-heading">Gallery            
	             <div class="pull-right">
	                    <a class="btn btn-success" href="{{ route('gallery.create') }}"> Create New Gallery</a>
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
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
        @foreach ($gallerys as $gallery)
        <tr>
            <td>{{ ++$i }}</td>
             <td> <img alt="{{ $gallery->name}}" src="{{ URL::to('/') }}//public/albums/{{ $gallery->cover_image}}" width="100" height="100"></td>
            <td>{{ $gallery->name}}</td>
            <td>{{ $gallery->details}}</td>
            <td>
                <a class="btn btn-info" href="{{ route('gallery.show',$gallery->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('gallery.edit',$gallery->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['gallery.destroy', $gallery->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </table>
        {!! $gallerys->render() !!}
       </div>
      </div>
   </div>
  @endsection