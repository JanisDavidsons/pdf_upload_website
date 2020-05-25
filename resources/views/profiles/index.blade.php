@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img class="rounded-circle w-100"
                     src="{{$user->profile->getProfileImage()}}"
                     alt="Janis website image">
            </div>
            <div class="col-9">
                <div class="pt-4 d-flex justify-content-between align-items-baseline">

                    <div class="d-flex align-items-center pb-3">
                        <div class="h4 pr-3 m-0 font-weight-bold">
                            {{ $user->userName }}
                        </div>
                        @yield('content')

                        <follow-button user-id = {{$user->id}}></follow-button>

                    </div>

                    @can('update', $user->profile)
                        <button type="submit" onclick="location.href='/posts/create'">Add post</button>
                    @endcan
                </div>

                @can('update',$user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit profile</a>
                @endcan
                <div class="d-flex">
                    <div class="pr-5"><strong class="pr-1">{{$user->posts->count()}}</strong>posts</div>
                    <div class="pr-5"><strong class="pr-1">47.4k</strong>followers</div>
                    <div class="pr-5"><strong class="pr-1">250</strong>following</div>
                </div>
                <div class="pt-4 font-weight-bold"> {{$user->profile->title}}</div>
                <section>{{$user->profile->description}}</section>
                <div>
                    <a href="www.freecodecamp.org">{{$user->profile->url}}</a>
                </div>
            </div>

            <div class="row pt-5 ">
                @foreach($user->posts as $post)
                    <div class="col-4 pb-4">
                        <a href="/posts/{{$post->id}}">
                            <img class="w-100" src="/storage/{{$post->image}}" alt="Post image">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
