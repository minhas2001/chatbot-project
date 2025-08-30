@extends('frontend.layouts.app')
@section('website')

    @include('frontend.components.chatbot')
    @include('frontend.components.loader')
    @include('frontend.components.header')
    @include('frontend.website.slider.slider')
    @include('frontend.website.about.about')
    @include('frontend.website.department.department')
    @include('frontend.website.feature.feature')
    @include('frontend.website.brand.brand')
    @include('frontend.website.team.team')
{{--    @include('frontend.website.schedule.schedule')--}}
    @include('frontend.website.banner.banner')
    @include('frontend.website.blog.blog')
    @include('frontend.website.call.call')
    @include('frontend.components.footer')

@endsection
