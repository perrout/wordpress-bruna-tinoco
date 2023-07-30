@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  
  <!-- About -->
  @include('partials.front-page.about')
  <!-- end of About -->

  <!-- Statistics -->
  @include('partials.front-page.statistics')
  <!-- end of statistics -->

  <!-- Testimonials -->
  @include('partials.front-page.testimonials')
  <!-- end of testimonials -->

  <!-- video -->
  @include('partials.front-page.video')
  <!-- end of testimonial -->
@endsection
