    @extends('layouts.app')
     
    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit gallery</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('membershiptype.index') }}"> Back</a>
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
        {!! Form::model($membershiptype, ['method' => 'PATCH','route' => ['membershiptype.update', $membershiptype->id]]) !!}
            @include('membership_type.form')
        {!! Form::close() !!}
    @endsection