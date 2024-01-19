@extends('backend.Layouts.app')
@section('content')
    <div class="loader-wrapper">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="create m-2  p-3 text-right">
        <a href="{{ route('admin.gallary') }}" class="btn btn-light">All Album</a>
        <a href="{{ route('admin.photo') }}" class="btn btn-light">Add Photo</a>
    </div>

    <div class="container-fluid">

        <div class="row">
            {{-- @foreach ($albums as $album) --}}
            <div class="col-sm-4">
                <div class="card">
                    <img src="" alt="" width="100%" height="300px">
                    <div class="card-body">

                        {{-- <h5 class="card-title">{{ $album->name }}</h5>
                        <p class="card-text">{{ $album->description }}</p>
                        <button href="{{ route('admin.show', $album->id) }}" class="btn btn-primary  my-2">view</button> --}}
                        <form action="{{ route('admin.destroy', $album->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            {{-- <button type="submit" class="btn btn-outline-danger mx-3">Delete </button> --}}
                            <button type="submit" class="btn btn-light ">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>







    </div>
@endsection
