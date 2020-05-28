@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">create a new post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="caption ">caption</label>

                            <div class="col-md-10">
                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" >

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">                               
                            <div class="custom-file col-md-10" >
                                <input type="file" name="image" class="custom-file-input" id="image" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="image">Choose file</label>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                            
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">
                            create a post
                        </button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
