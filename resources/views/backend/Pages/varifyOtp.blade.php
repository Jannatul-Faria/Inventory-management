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
                <img src="assets/images/logo-icon.png" alt="logo icon">
            </div>
            <div class="card-title text-uppercase text-center py-3">OTP Varify</div>
            <form>

                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <div class="position-relative has-icon-right">
                        <input type="password" id="password" class="form-control input-shadow"
                            placeholder="Enter Password">
                        <div class="form-control-position">
                            <i class="icon-lock"></i>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-light btn-block">Sign In</button>




            </form>
        </div>
    </div>
    <div class="card-footer text-center py-3">
        <p class="text-warning mb-0">Do not have an account? <a href="{{ url('/register') }}"> Sign Up here</a>
        </p>
    </div>
</div>
