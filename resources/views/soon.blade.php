<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ isset($title) ? $title : config('app.name') }}</title>
    <link href="{{ asset('css/library.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        window.Laravel = {
            csrfToken: '{{ csrf_token() }}'
        };
        const trans = function (code) {
            let maps = {!! js_trans(['validation']) !!};
            let pieces = code.split('.');
            if (pieces.length == 2 && typeof maps[pieces[0]] !== undefined) {
                return maps[pieces[0]][pieces[1]] || code;
            }
            return maps[code] || code;
        };
    </script>
</head>

<body>

<div class="container-fluid animated fadeIn" id="contact-content">
    <div class="row">
        <div class="col-xl-7 pl-0 pr-0 contact-description">
            <div class="left-content">
                <div class="logo"><img src="{{ asset('images/logo.png') }}"/></div>
                <div class="description">
                    <h4 class="title">Kết bạn với người hợp mệnh</h4>
                    <div class="line">Số mệnh đưa chúng ta đến với nhau</div>
                    <div class="line">Coming soon...</div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 pl-0 pr-0 contact-form" id="contact-form">

        </div>
    </div>
</div><!-- /.container -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/home/coming_soon.js') }}"></script>
</body>
</html>