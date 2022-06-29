{{--
  Template Name: Flexible Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  
  {{-- Include flexible content --}}
  @include('flexible-layout')

  @endwhile
@endsection
