@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-4 text-center">
            <img src="{{asset($profile->getAvatar())}}" class="rounded-circle" width="200" class="w-100">
        </div>    
        <div class="col-8" >
            <div class="d-flex">
               
                <div class="h4 mr-3 pt-2">{{$profile->user->username}}</div>
                <button type="button" class="btn btn-sm btn-primary ">S'abonner</button>    
            </div>
            <div class="d-flex mt-3 ">
                <div class="mr-2"><strong>{{$profile->user->posts->count()}}</strong> publications</div>
                <div class="mr-2"><strong>3 124</strong> abonnés</div>
                <div class="mr-2"><strong>1</strong> abonnements</div>
            </div>
            @can('update', $profile)
                <div class="mt-2">
                    <a href="{{route('profiles.edit', ['profile' => $profile->id])}}">
                        <button class="btn btn-outline-secondary">Modify my profile</button>
                    </a>
                </div>    
            @endcan
            
            <div class="mt-3">
                <div class="font-weight-bold">{{$profile->title}}</div>
                <div>{{$profile->description}}</div>
                <a href="{{$profile->url}}">{{$profile->url}}</a>
            </div>
            
        </div>     
    </div>
    <div class="row mt-4">
        @foreach ($profile->user->posts as $post)
            <div class="col-4 mb-2">
                <a href="{{route('posts.show',['post' => $post])}}">
                    <img src="{{asset('storage').'/'. $post->image}}" class="w-100">    
                </a>               
            </div>    
        @endforeach
        
        
    </div>
</div>
@endsection