@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body text-center">
                    <h4 class="text-center">
                        Upload Images
                    </h4>
                    <div class="row">
                        <div id="formWrapper" >
                            <form class="form-vertical" role="form" enctype="multipart/form-data" method="post" action="{{ route('uploadImage')  }}">
                                {{csrf_field()}}
                                @if(session()->has('status'))
                                    <div class="alert alert-info" role="alert">
                                        {{session()->get('status')}}
                                    </div>
                                @endif
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input type="file" name="image_name" class="form-control" id="name" value="">
                                    @if($errors->has('image_name'))
                                        <span class="help-block">{{ $errors->first('image_name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Upload Image </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
