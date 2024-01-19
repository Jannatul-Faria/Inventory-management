<div class="container-fluid ">


    <div class="card">
        <div class="card-body">
            <div class="card-title mx-auto">Registration Form</div>
            <hr>
            <form>
                <div class="row">
                    <div class="col-lg-5 my-4 mx-auto">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Your Name"
                                name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email"
                                placeholder="Enter Your Email Address" name="email">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" id="mobile"
                                placeholder="Enter Your Mobile Number" name="mobile">
                        </div>
                        <div class="form-group">
                            <label for="class">Class</label>
                            <input type="number" class="form-control" id="class" placeholder="Enter Your class"
                                maxlength="12" name="class">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" placeholder="Enter Password"
                                name="password">
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password</label>
                            <input type="text" class="form-control" id="cpassword" placeholder="Confirm Password"
                                name="cpassword">
                        </div>
                    </div>
                    <div class="col-lg-5 my-4 mx-auto">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St"
                                name="address">
                        </div>
                        <div class="form-group ">
                            <label for="state">State</label>
                            <select id="state" class="form-control">
                                <option selected>Dhaka</option>
                                <option>Khulna</option>
                                <option>Barishal</option>

                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" name="zip">
                        </div>
                        <div class="form-group">
                            <label for="image">Image Upload</label>
                            <div class="position-relative has-icon-right">
                                <input type="file" id="status" class="form-control input-shadow" name="image"
                                    id="image">
                                <div class="form-control-position">
                                    {{-- <i class="icon-file"></i> --}}
                                </div>
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <label class="col-form-label col-sm-2 pt-0">Gender</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                            id="gridRadios1" value="1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                            id="gridRadios2" value="2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Female
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                            id="gridRadios3" value="3">
                                        <label class="form-check-label" for="gridRadios3">
                                            Third Gender
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group py-2">
                            <div class="icheck-material-white">
                                <input type="checkbox" id="checkbox" checked="" />
                                <label for="checkbox">I Agree Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>
                                Register</button>
                        </div>
                    </div>
                </div>



            </form>
        </div>
    </div>
</div>
<!--End Row-->

<div class="card-footer text-center py-3">
    <p class="text-warning mb-0">Already have an account? <a href="{{ route('login') }}"> Sign In here</a></p>
</div>
</div>
