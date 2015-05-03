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
        <span class="badge-footer">Student Scholarship</span>
    </div>
@endsection

@section('footer')
    <!-- Social Icons -->
    <ul class="list-inline" id="social-icons">
        <li><a href="{{ $social['github'] }}" target="_blank"><i class="fa fa-github"></i></a></li>
        <li><a href="{{ $social['linkedin'] }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="{{ $social['twitter'] }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="{{ $social['facebook'] }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
    </ul>
@endsection