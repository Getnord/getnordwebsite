@extends('layouts.app')
@section('pageTitle', __('leo.pageTitle'))
@section('content')
    <div id="lock">
        @include('pages.lock.banner-section')

        @include('pages.lock.manage-section')

        @include('pages.lock.you-can-section')

        @include('pages.lock.icons-section')

        @include('pages.lock.try-section')

        @include('pages.lock.scalefusion-section')

        @include('pages.lock.video-modal')

        @include('pages.lock.contact-modal')
    </div>
@endsection

