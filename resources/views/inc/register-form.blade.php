<div class="login-wrap text-center">
    <h3 class="title">Create Your Account</h3>
    <form action="{{ route('register') }}" method="POST" class="login-form text-start">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-item">
                    <h4 class="form-header">First name*</h4>
                    <input type="text" id="fname" name="fname" class="form-control" placeholder="">
                    @error('fname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-item">
                    <h4 class="form-header">Last name*</h4>
                    <input type="text" id="lname" name="lname" class="form-control" placeholder="">
                    @error('lname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-item">
            <h4 class="form-header">Email Address*</h4>
            <input type="text" id="email" name="email" class="form-control" placeholder="">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-item">
            <h4 class="form-header">Password*</h4>
            <input type="password" id="text-2" name="password" class="form-control" placeholder="">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-item">
            <h4 class="form-header">Confirm Password*</h4>
            <input type="password" id="text-2" name="password_confirmation" class="form-control" placeholder="">
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-item">
            <div class="checkbox-wrap">
                <input type="checkbox" id="term" name="term" required>
                <label for="term"> I accept the <span>Terms / Privacy Policy</span></label><br>
            </div>
        </div>
        <div class="submit-btn">
            <button class="rr-primary-btn" type="submit">Register Account</button>
        </div>
        <div class="login-btn-wrap">
            <a href="#" class="forgot">Already have an account?</a>
            <a class="log-in" href="{{ route('login') }}">Log in</a>
        </div>
    </form>
</div>
