@props(['bodyClass' => '', 'title' => ''])

<x-base-layout :title="$title" :$bodyClass>
    @include('layouts.partials.header')
    {{$slot}}
    <footer>
        @section('footerLinks')
        <a href="#">Link1</a>
        <a href="#">Link2</a>
        @show
    </footer>
</x-base-layout>