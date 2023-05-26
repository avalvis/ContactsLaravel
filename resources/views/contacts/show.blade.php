@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $contact->name }}</h1>
    <p>Phone: {{ $contact->phone }}</p>
    <p>Email: {{ $contact->email }}</p>
    <p>Notes: {{ $contact->notes }}</p>
    
    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back to All Contacts</a>
</div>
@endsection
