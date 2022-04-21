@extends('layouts.app')

@section('content')
    <h3 class="mb-3">Create Contact</h3>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/contact/store">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" name="name" id="name" type="text" placeholder="Jorge Alfasoft" value="{{old('name')}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input class="form-control" name="email" id="email" type="email" placeholder="example@mail.com" value="{{old('email')}}">
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input class="form-control" name="contact" id="contact" type="text" placeholder="Ex: 999999999" value="{{old('contact')}}">
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
        <a href="{{ route('contact.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
