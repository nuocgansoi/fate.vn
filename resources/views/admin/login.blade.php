<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">
@include('admin.layouts.include.head')
<body>
<div class="auth">
    <div class="auth-container">
        <div class="card">
            <header class="auth-header">
                <h1 class="auth-title">
                    <div class="logo">
                        <span class="l l1"></span>
                        <span class="l l2"></span>
                        <span class="l l3"></span>
                        <span class="l l4"></span>
                        <span class="l l5"></span>
                    </div>
                    {{ config('app.name') }}
                </h1>
            </header>
            <div class="auth-content">
                <form id="login-form" method="POST" novalidate="">
                    {{ csrf_field() }}
                    <div class="form-group"><label for="username">{{ trans('string.email') }}</label>
                        <input type="email"
                               class="form-control underlined"
                               name="email" id="email"
                               required/>
                    </div>
                    <div class="form-group"><label for="password">{{ trans('string.password') }}</label>
                        <input type="password"
                               class="form-control underlined"
                               name="password" id="password"
                               placeholder="Your password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">{{ trans('string.login') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.include.script')
</body>
</html>