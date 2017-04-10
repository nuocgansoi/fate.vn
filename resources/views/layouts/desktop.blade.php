<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('layouts.include.head')
<body>
<div class="container-fluid" id="contact-content">
    <div class="row">
        <div class="col-md-7 pl-0 pr-0 contact-description">
            <div class="left-content">
                <div class="logo"><img src="{{ asset('images/logo.png') }}"/></div>
                <div class="description">
                    <h4 class="title">Kết bạn với người hợp mệnh</h4>
                    <div class="line">Số mệnh đưa chúng ta đến với nhau</div>
                    <div class="line">Coming soon...</div>
                </div>
            </div>
        </div>
        <div class="col-md-5 pl-0 pr-0 contact-form" id="contact-form">

        </div>
    </div>
</div><!-- /.container -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/home/coming_soon.js') }}"></script>
</body>
</html>