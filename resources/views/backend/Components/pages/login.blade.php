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
                {{-- <img src="assets/images/logo-icon.png" alt="logo icon"> --}}
            </div>
            <div class="card-title text-uppercase text-center py-3">Login In</div>

            <div class="form-group">
                <label for="email" class="sr-only">User Email</label>
                <div class="position-relative has-icon-right">
                    <input type="email" id="email" class="form-control input-shadow" placeholder="Enter Useremail"
                        name="email" value="{{ old('email') }}">
                    <div class="form-control-position">
                        <i class="icon-email"></i>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="sr-only">Password</label>
                <div class="position-relative has-icon-right">
                    <input type="password" id="password" class="form-control input-shadow" placeholder="Enter Password"
                        name="password" value="{{ old('password') }}">
                    <div class="form-control-position">
                        <i class="icon-lock"></i>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <div class="icheck-material-white">
                        <input type="checkbox" id="user-checkbox" checked="" />
                        <label for="user-checkbox">Remember me</label>
                    </div>
                </div>
                <div class="form-group col-6 text-right">
                    <a href="{{ url('/sendOtp') }}">Reset Password</a>
                </div>
            </div>
            <button onclick="SubmitLogin()" class="btn btn-light btn-block">Sign In</button>
            <div class="text-center mt-3">Sign In With</div>

            <div class="form-row mt-4">
                <div class="form-group mb-0 col-6">
                    <button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i>
                        Facebook</button>
                </div>
                <div class="form-group mb-0 col-6 text-right">
                    <button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i>
                        Twitter</button>
                </div>
            </div>

        </div>
    </div>
    <div class="card-footer text-center py-3">
        <p class="text-warning mb-0">Do not have an account? <a href="{{ url('/register') }}"> Sign Up here</a>
        </p>
    </div>
</div>
<script>
    async function SubmitLogin() {

        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        if (email.length === 0) {
            errorToast('email requeired');
        } else if (password.length === 0) {
            errorToast('password requeired');
        } else {


            // showLoader();
            let res = await axios.post("{{ route('userLogin') }}", {
                email: email,
                password: password
            });
            // hideLoader()
            if (res.status === 200 && res.data['status'] === 'success') {
                successToast(res.data['message']);
                window.location.href = "/dashboard";
            } else {
                errorToast(res.data['message']);
            }


        }
    }
</script>
