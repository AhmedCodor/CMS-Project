@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
                <div class="post-card mb-4">
                    <div class="profile-tile d-flex align-items-center mb-2">
                        <img src="https://caricom.org/wp-content/uploads/Floyd-Morris-Remake-1024x879-1.jpg" width="25" height="25" class="rounded-circle" alt="profile picture">
                        <p class="h6 m-0 ms-1">{{$post->user->name}}&nbsp;&#x2022;&nbsp;{{ date('M j', strtotime($post->created_at))}}</p>
                    </div>
                    <div class="main-content d-flex">
                        <div>
                            <h2 class="fw-bold">{{ $post->title }}</h2>
                            <p>{{ $post->subContent() }}</p>
                        </div>
                        <img src="https://images.pexels.com/photos/14577591/pexels-photo-14577591.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" width="120" height="120" class="ms-1" alt="post image">
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>
        <div class="col-md-4">
            ddd
        </div>
    </div>
</div>
@endsection
