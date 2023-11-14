@extends('layout.head')

@section('content')
@php
    $title = "Page Not Found";
@endphp
<div class="container-xxl container-p-y">
    <div class="misc-wrapper">
      <h2 class="mb-2 mx-2">Page Not Found :(</h2>
      <p class="mb-4 mx-2">Oops! 😖 Halaman yang anda cari tidak di temukan.</p>
      <a href="/" class="btn btn-primary">kembali</a>
      <div class="mt-3">
        <img
          src="../assets/img/illustrations/page-misc-error-light.png"
          alt="page-misc-error-light"
          width="500"
          class="img-fluid"
          data-app-dark-img="illustrations/page-misc-error-dark.png"
          data-app-light-img="illustrations/page-misc-error-light.png" />
      </div>
    </div>
  </div>
@endsection