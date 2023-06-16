@extends('layout')

@section('content')
    <div class="container">
        <h1>{{ isset($contact) ? 'Edit' : 'Create' }} contact</h1>
        <form action="{{ isset($contact) ? route('contacts.update', $contact->id) : route('contacts.store') }}" method="POST">
            @csrf
            @if (isset($contact))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ isset($contact) ? $contact->name : '' }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{ isset($contact) ? $contact->description : '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ isset($contact) ? 'Update' : 'Submit' }}</button>
        </form>
    </div>
@endsection
