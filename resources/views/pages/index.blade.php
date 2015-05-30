@extends('layout.master')

@section('title')
    Josh Bruce
@endsection

@section('main')
    <!-- Job Profile -->
    <div class="profile">
        <h1 class="full-name">Josh Bruce</h1>
        <h2 class="job-title">iOS Developer</h2>
    </div>

    <!-- WWDC 2014 -->
    <div class="badge" id="wwdc-2014">
        <i class="fa fa-apple badge-logo"></i><br />
        <span class="badge-title">WWDC 2014</span><br />
        <span class="badge-footer">Scholarship Receipient</span>
    </div>

    <!-- WWDC 2014 -->
    <div class="badge" id="wwdc-2015">
        <i class="fa fa-apple badge-logo"></i><br />
        <span class="badge-title">WWDC 2015</span><br />
        <span class="badge-footer">Scholarship Receipient</span>
    </div>
@endsection

@section('footer')
    <!-- Social Icons -->
    <ul class="list-inline" id="social-icons">
        <li><a href="{{ $social['github'] }}" title="Josh Bruce GitHub Profile" target="_blank"><i class="fa fa-github"></i></a></li>
        <li><a href="{{ $social['linkedin'] }}" title="Josh Bruce LinkedIn Profile" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="{{ $social['twitter'] }}" title="Josh Bruce Twitter Profile" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="{{ $social['facebook'] }}" title="Josh Bruce Facebook Profile" target="_blank"><i class="fa fa-facebook"></i></a></li>
    </ul>
@endsection