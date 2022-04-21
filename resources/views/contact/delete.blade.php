@extends('layouts.app')

@section('content')
    <div class="mb-3">
        <h3>Delete Contact</h3>

    </div>
    <hr>

    <div >
        <p><strong>Name:</strong> {{ $contact[0]['name'] }}</p>
        <p><strong>Email:</strong> {{ $contact[0]['email'] }}</p>
        <p><strong>Contact:</strong> {{ $contact[0]['contact'] }}</p>
    </div>

    <form method="POST" action="/contact/destroy">
        @csrf
        <input type="hidden" name="id" value="{{ $contact[0]['id'] }}">

        <h5>Are you sure you want to delete this contact?</h5>
        <button class="btn btn-danger" type="submit">Yes, delete it!</button>
        <a href="{{ route('contact.index') }}" class="btn btn-secondary">No, go back!</a>
    </form>


@endsection
