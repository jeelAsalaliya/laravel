<h1>About Us</h1>

<a href="{{route('home')}}">Home Page</-a>
<a href="{{ route('mypost')}}">Post page</a>

@extends('layouts.masterlayouts');

@section('content')
<h3>Jeel aSALALIya</h3>
@verbatim
<div id="app">{{ message }}</div>
@endverbatim
@endsection

@push('scripts')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello vue!')
      return {
        message
      }
    }
  }).mount('#app')
</script>
@endpush
