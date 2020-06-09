@extends('layouts.subdomain')
@section('pageTitle', __('leo.pageTitle'))
@section('content')
    @include('pages.active_track.banner')

    @include('pages.active_track.section_2')

    @include('pages.active_track.monitoring')

    @include('pages.active_track.section_4')

    @include('pages.active_track.software')

    @include('pages.active_track.how_it_works')

    @include('pages.active_track.interested')

    @include('pages.active_track.about_lock')

    @include('pages.active_track.contact-modal')
@endsection

