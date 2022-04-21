@extends('layouts.app')

@section('content')
    <div class="mb-3">
        <h3>Details Contact</h3>

    </div>
    <hr>

    <div >
        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Contact:</strong> {{ $contact->contact }}</p>
    </div>

    <a href="{{ route('contact.index') }}" class="btn btn-secondary">Back</a>


@endsection
