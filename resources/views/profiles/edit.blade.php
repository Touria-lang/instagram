@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">create a new post</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profiles.update', ['profile' => $profile])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group ">
                            <label for="username ">username</label>                            
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') ?? $profile->user->username}}" >
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                           
                        </div>
                        <div class="form-group ">
                            <label for="caption ">title</label>                            
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $profile->title}}" >
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                           
                        </div>
                        <div class="form-group ">
                            <label for="description ">description</label>                           
                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $profile->description}}" >
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                            
                        </div>
                        <div class="form-group ">
                            <label for="url ">url</label>                            
                            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $profile->url}}" >
                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">                               
                            <div class="custom-file" >
                                <input type="file" name="avatar" class="custom-file-input" id="avatar" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="avatar">Choose image</label>
                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                            
                        </div>                       
                        <button type="submit" class="btn btn-primary">
                            Update a post
                        </button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
