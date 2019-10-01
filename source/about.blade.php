@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>Tentang</h1>

    <p class="mb-6">
        Ini adalah blog komunitas PHPBali yang membahas tentang pengembangan web dan PHP.
        Website ini dibuat menggunakan Jigsaw (Laravel Static Site Generator), markdown dan Github Pages.
    </p>
@endsection
