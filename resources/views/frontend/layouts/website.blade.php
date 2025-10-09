@extends('frontend.layouts.app')
@section('website')

    @include('frontend.website.privacy-policy.privacy')
    @include('frontend.website.chat-bot.chatbot')
    @include('frontend.components.loader')
    @include('frontend.components.header')
    @include('frontend.website.slider.slider')
    @include('frontend.website.about.about')
    @include('frontend.website.department.department')
    @include('frontend.website.feature.feature')
    @include('frontend.website.brand.brand')
    @include('frontend.website.team.team')
    @include('frontend.website.banner.banner')
    @include('frontend.website.call.call')
    @include('frontend.components.footer')

@endsection
