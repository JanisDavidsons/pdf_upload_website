@extends('layouts.app')

@section('content')
    @auth()
        <div class="container">
            <div class="d-flex justify-content-between pt-2 pb-1 pl-2">
                <div>
                    <h2>All available PDF documents from registered users.</h2>
                </div>
                <div class="pr-2">
                    @auth()
                        <div class="btn btn-primary" onclick="location.href = '/profile/{{Auth::user()->id}}'">My
                            profile
                        </div>
                    @endauth
                </div>
            </div>
            <div class="row pt-5 ">
                @foreach($files as $file)
                    <div class="col-3 pb-4 d-flex justify-content-center">
                        <div class="row p-3">
                            <div style="border: 2px solid #000000" class="mb-2">
                                <a href="/files/{{$file->id}}">
                                    <img class="w-100" src="/storage/{{$file->thumbnail_path}}" alt="PDF thumbnail;">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{$files->links()}}
                </div>
            </div>
    @endauth
@endsection


