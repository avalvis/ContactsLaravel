@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add a New Contact</h1>

    <form action="{{ route('contacts.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea class="form-control" id="notes" name="notes"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Contact</button>
    </form>
</div>
@endsection
