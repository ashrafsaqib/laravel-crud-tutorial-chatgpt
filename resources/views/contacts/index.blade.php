@extends('layout')

@section('content')
    <div class="container">
        <h1>contacts</h1>
        <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Create contact</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <th scope="row">{{ $contact->id }}</th>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->description }}</td>
                        <td>
                            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div
