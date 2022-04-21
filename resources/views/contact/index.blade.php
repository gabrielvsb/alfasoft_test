@extends('layouts.app')

@section('content')

    <h3 class="mb-3">Contact List</h3>

    <div>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                @if(Auth::check())
                    <th>Actions</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact['name'] }}</td>
                    <td>{{ $contact['contact'] }}</td>
                    <td>{{ $contact['email'] }}</td>
                    @if(Auth::check())
                        <td>
                            <a href="{{ route('contact.detail', $contact['id']) }}" >Details</a>
                            <a href="{{ route('contact.edit', $contact['id']) }}" >Edit</a>
                            <a href="{{ route('contact.delete', $contact['id']) }}">Delete</a>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
