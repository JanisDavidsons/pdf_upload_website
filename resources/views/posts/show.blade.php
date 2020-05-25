@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        <div class="row col-8">
            <img src="/storage/{{$post->image}}" class="w-100" alt="Current post image">
        </div>

        <div class="col-4">
            <div class="d-flex align-items-center pb-3">
                <div class="pr-3">
                    <img src="{{$post->user->profile->getProfileImage()}}"
                         class="w-100 rounded-circle"
                         style="max-width: 50px"
                         alt="My profile image">
                </div>
                <div class="d-flex">
                    <h4 class="m-0 font-weight-bold ">
                        <a class="text-dark" href="/profile/{{$post->user->id}}">{{$post->user->userName}}
                        </a>
                        |
                        <a href="#" class="">Follow</a>
                    </h4>
                </div>
            </div>

            <hr style="border-bottom: 1px solid black" class="mt-0">

            <div class="d-flex align-items-end">
                <span class="pr-2">
                    <p class="m-0 font-weight-bold">
                        <a class="text-dark" href="/profile/{{$post->user->id}}">{{$post->user->userName}}
                        </a>
                    </p>
                </span>
                <p class="m-0">{{$post->caption}}</p>
            </div>
        </div>
    </div>
@endsection
