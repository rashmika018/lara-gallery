    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Album:</strong>
                    {{ Form::select('album_id',['' => 'Select Gallery'] + \App\Gallery::all()->pluck('name', 'id')->toArray(), null,['class'=>'select2 form-control']) }}
                    <!-- {!! Form::text('album_id', null, array('placeholder' => 'Album','class' => 'form-control')) !!} -->
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Details:</strong>
                    {!! Form::textarea('description', null, array('placeholder' => 'Details','class' => 'form-control','style'=>'height:100px')) !!}
                </div>
            </div>
            
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    {!! Form::file('image', null, array('placeholder' => 'image','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>