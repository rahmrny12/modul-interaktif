@extends('layouts.app')

@section('content')
    {{-- <section id="hero-section">
        <div class="row">
            <div class="col">
                <h1>Ubah dunia melalui ujung jari</h1>
            </div>
        </div>
    </section> --}}
    <section id="modules-section">
        <div class="container my-4">
            @livewire('modules')
        </div>
    </section>
@endsection
