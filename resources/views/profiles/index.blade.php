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
                    </div>
                    @can('update', $user->profile)
                        <button type="submit" onclick="location.href='/files/create'" class="btn btn-primary">Add File
                        </button>
                    @endcan
                </div>

                @can('update',$user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit profile</a>
                @endcan

                <div class="d-flex">
                    <div class="pr-5"><strong class="pr-1">{{$user->files->count()}}</strong>files</div>
                </div>

                <div class="pt-4 font-weight-bold">
                    {{$user->profile->title}}
                </div>
                <section>{{$user->profile->description}}</section>
                <div>
                    <a href="janisdavidsons.com">{{$user->profile->url}}</a>
                </div>
            </div>
        </div>
        <div>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            @elseif(session()->has('error'))
                <div class="alert alert-danger">
                    {{session()->get('error')}}
                </div>
            @endif
        </div>

        <div class="row pt-5 ">
            @foreach($files as $file)
                @can('delete',App\File::find($file->id))
                    <div class="col-3 pb-4 d-flex justify-content-center">
                        <div class="row p-3">
                            <div style="border: 2px solid #000000" class="mb-2">
                                <div class="d-flex justify-content-end p-1">
                                    <form action="/files/delete/{{$file->id}}" method="POST">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        @method('delete')
                                        @csrf
                                    </form>
                                </div>
                                <a href="/files/{{$file->id}}">
                                    <img class="w-100" src="/storage/{{$file->thumbnail_path}}" alt="PDF thumbnail;">
                                </a>
                            </div>
                        </div>
                    </div>
                @endcan
            @endforeach
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$files->links()}}
            </div>
        </div>
    </div>
@endsection





