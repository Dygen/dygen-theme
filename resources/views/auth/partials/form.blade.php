
<form role="form" id="login" method="POST" action="{{ route('canvas.auth.login.store') }}">
    {!! csrf_field() !!}
    <div class="form-group fg-line">
        <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" style="background-color: #fff !important;padding: 4px;">
    </div>
    <div class="form-group fg-line">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" style="background-color: #fff !important;padding: 4px;">
    </div>

    <div class="form-group fg-line">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember">
                <i class="input-helper"></i>
                Remember me
            </label>
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-block btn-primary m-t-10">Sign in</button>
    <br><br>
    <div style="text-align: center">
        <a href="{{ route('canvas.auth.password.forgot') }}" class="btn btn-link m-t-10">Forgot password</a><a href="{{ url('/') }}" class="btn btn-link m-t-10">Back to Blog</a>
    </div>
</form>
