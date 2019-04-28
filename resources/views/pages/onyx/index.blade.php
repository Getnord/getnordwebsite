@extends('layouts.app')
@section('pageTitle', __('onyx.pagetitle'))
@section('content')
    
    {{-- hero section --}}
    @include('pages.onyx.section_1')

    {{-- product section  --}}
    @include('pages.onyx.section_2')

    {{-- metal reinforced section --}}
    @include('pages.onyx.section_3')

    {{-- dual molding section --}}
    @include('pages.onyx.section_4');

    {{-- refined to be perfect section --}}
    @include('pages.onyx.section_5')

    {{-- technical specs section  --}}
    @include('pages.onyx.section_6')

    {{-- scratch proof section --}}
    @include('pages.onyx.section_7')


@endsection