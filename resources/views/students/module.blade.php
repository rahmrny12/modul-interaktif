@extends('layouts.app')

@section('content')
    <section id="modules-section" class="mx-5">
        <div class="pdf-container mx-auto">
            {{-- <embed src="{{ url('storage/' . $module->file_path) }}" type="application/pdf" /> --}}
            <iframe class="pdf" src={{ url('storage/' . $module->file_path . '#toolbar=0') }} width="800" height="500">
            </iframe>
        </div>

        <div class="w-50 mx-auto">
            @livewire('comments', ['moduleId' => $module->id])
        </div>
    </section>
@endsection

@section('style')
    <style>
        .pdf-container {
            width: 80%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border-radius: 10px;
        }

        iframe {
            width: 100%;
            height: 60rem;
            /* Adjust height as needed */
            overflow-y: scroll;
            scroll-behavior: smooth;
        }
    </style>
@endsection
