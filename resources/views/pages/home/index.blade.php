@extends('layouts.app')
@section('pageTitle', __('home.pageTitle'))
@section('content')  
    
    {{-- # --}}
    @include('pages.home.section_1')

    {{-- # --}}
    @include('pages.home.section_2')

    {{-- #  --}}
    @include('pages.home.section_3')

    {{--  #  --}}
    @include('pages.home.section_4');

    {{--  #  --}}
    @include('pages.home.section_5')

    {{--  #  --}}
    @include('pages.home.section_6')

    {{--  #  --}}
    @include('pages.home.section_7')

    {{--  #  --}}
    @include('pages.home.section_8')
    
    {{--  #  --}}
    @include('pages.home.section_9')

    {{--  #  --}}
    @include('pages.home.section_10')

    {{--  #  --}}
    @include('pages.home.section_11')

    {{--  #  --}}
    @include('pages.home.section_12')

    
    
    
    
    
    
 

    
    
    
@endsection('content')
