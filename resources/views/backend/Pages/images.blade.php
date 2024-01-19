<div class="loader-wrapper">
    <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="card card-authentication1 mx-auto my-5">
    <div class="card-body">
        <div class="card-content p-2">
            <div class="text-center">
                {{-- <link rel="icon" href=" type="image/x-icon"> --}}
                {{-- <img src="{{ asset('assets/images') }}/favicon12.png" alt="logo icon" width="70px"> --}}
                <i class="zmdi zmdi-image zmdi-hc-5x"></i>
            </div>
            <div class="card-title text-uppercase text-center py-3">Image upload:</div>
            <form method="POST" action="{{ route('admin.singleImgUp') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="Image Upload" class="sr-only">Image Upload:</label>
                    <div class="position-relative has-icon-right">
                        <input type="file" id="Image Upload" class="form-control input-shadow" name="image">
                        <div class="form-control-position">
                            {{-- <i class="icon-file"></i> --}}
                        </div>
                    </div>
                </div>

                @error('image')
                    <p class="text">{{ $massage }}</p>
                @enderror
                <button class="btn btn-light btn-block">upload</button>

            </form>
        </div>
    </div>
    <div class="card-footer text-center py-3">
        <p> <a href="{{ route('admin.dashboard') }} " class="text-warning mb-0">Back home </a></p>
    </div>
</div>
