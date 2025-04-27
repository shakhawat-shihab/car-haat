@props(['bodyClass' => '', 'title' => ''])

<x-base-layout :title="$title" :$bodyClass>
    @include('layouts.partials.header')
    {{$slot}}
    <footer>
        @section('footerLinks')

        @show
    </footer>
</x-base-layout>