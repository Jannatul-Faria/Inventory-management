@extends('backend.Layouts.app')
@section('content')
    {{-- @include('backend.Pages.gallary.album.index') --}}
    <div class="loader-wrapper">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    @if (session('success'))
        <div class="text-center py-3 alert alert-info alert-dismissible">
            <i class="zmdi zmdi-check-all"></i>
            {{ session('success') }}
            <button class="text-white btn-light  close" data-dismiss="alert" ">
                                                            <i class="zmdi zmdi-close"></i>
                                                        </button>
                                                     </div>
     @endif

                <div class=" p-3 text-right">
                    <a href="{{ route('admin.gallary') }}" class="btn btn-light">All Album</a>
                    {{-- <button class=" btn btn-light"><a href=" {{ route('admin.gallary') }} ">All Albums</a> </button> --}}
                </div>
                <div class="card p-3 mx-5 my-2">
                    <div class="card-body">
                        <div class="card-content p-2">
                            <div class="card-title text-uppercase text-center py-3">Create Album</div>
                            <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="">Name</label>
                                    <div class="position-relative has-icon-right">
                                        <input type="text" id="name" class="form-control input-shadow"
                                            name="name" value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description" class="">Description</label>
                                    <div class="position-relative has-icon-right">
                                        {{-- <input type="text-aria" id="description" class="form-control input-shadow"> --}}
                                        <textarea cols="20" rows="5" id="description" class="form-control input-shadow" name="description"
                                            value="{{ old('description') }}"></textarea>
                                    </div>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="cover_photo">Image Upload:</label>
                                    <div class="position-relative has-icon-right">
                                        <input type="file" id="cover_photo" class="form-control input-shadow"
                                            name="cover_photo" value="{{ old('cover_photo') }}">
                                        <div class="form-control-position">
                                            {{-- <i class="icon-file"></i> --}}
                                        </div>
                                    </div>
                                    @error('cover_photo')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button class="btn btn-light btn-block">Create </button>




                            </form>
                        </div>
                    </div>

                </div>
            @endsection
