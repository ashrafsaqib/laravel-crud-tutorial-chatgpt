@extends('layout')

@section('content')
    <div class="container">
        <h1>contact Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $contact->name }}</h5>
                <p class="card-text">{{ $contact->description }}</p>
            </div>
        </div>
        <a href="{{ route('contacts.index') }}" class="btn btn-primary mt-3">Back to contacts</a>
    </div>
@endsection
