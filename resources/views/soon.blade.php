@extends('layouts.desktop')
@push('js')
<script src="{{ asset('js/home/coming_soon.js') }}"></script>
@endpush
@section('content')
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
@endsection