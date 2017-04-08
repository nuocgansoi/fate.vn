<?php
$starActives = ['admin.star.create', 'admin.star.index', 'admin.star.edit'];
?>

<aside class="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-header">
            <div class="brand">
                <div class="logo"><span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span
                            class="l l4"></span> <span class="l l5"></span></div>{{ config('app.name') }}</div>
        </div>
        <nav class="menu">
            <ul class="nav metismenu" id="sidebar-menu">
                <li class="{{ in_array(Route::currentRouteName(), $starActives) ? 'active open' : '' }}">
                    <a href="#"> <i class="fa fa-th-large"></i>{{ trans('string.star') }}<i class="fa arrow"></i> </a>
                    <ul>
                        <li><a class="{{ Route::currentRouteName()=='admin.star.index'?'active':'' }}"
                               href="{{ route('admin.star.index') }}">{{ trans('string.list') }}</a></li>
                        <li class="{{ Route::currentRouteName()=='admin.star.create'?'active':'' }}"><a
                                    href="{{ route('admin.star.create') }}">{{ trans('string.create') }}</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>