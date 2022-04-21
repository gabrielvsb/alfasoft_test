@extends('layouts.app')

@section('content')
    <h3 class="mb-3">Edit Contact</h3>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/contact/update">
        @csrf
        <input type="hidden" name="id" value="{{ $contact[0]['id'] }}">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" name="name" id="name" type="text" value="{{ $contact[0]['name'] }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input class="form-control" name="email" id="email" type="email" value="{{ $contact[0]['email'] }}">
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input class="form-control" name="contact" id="contact" type="text" value="{{ $contact[0]['contact'] }}">
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
        <a href="{{ route('contact.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
