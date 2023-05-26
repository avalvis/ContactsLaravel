@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Contact</h1>

    <form action="{{ route('contacts.update', $contact->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" required>
        </div>

        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea class="form-control" id="notes" name="notes">{{ $contact->notes }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Contact</button>
    </form>
</div>
@endsection
