    @extends('layouts.app')
     
    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit image</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('images.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::model($image, ['method' => 'PATCH','route' => ['images.update', $image->id]]) !!}
            @include('images.form')
        {!! Form::close() !!}
    @endsection