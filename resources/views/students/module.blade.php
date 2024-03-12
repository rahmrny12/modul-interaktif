@extends('layouts.app')

@section('content')
    <p>{{ $module->title }}</p>
    <p>{{ $module->description }}</p>
    <p>{{ $module->category_id }}</p>
    <p>{{ $module->thumbnail }}</p>
    <p>{{ $module->file_path }}</p>
    <p>{{ $module->file_type }}</p>
@endsection
