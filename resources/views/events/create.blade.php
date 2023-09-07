@extends('layouts.main')

@section('title', 'Create Event')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Create Event</h1>
        <form action="/events" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Event:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="description">City:</label> 
                <input type="text" class="form-control" id="city" name="city" placeholder="city">
            </div>
            <div class="form-group">
                <label for="start_date">Is the event private:</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description:</label> 
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="writing"></textarea>
            </div>
            <input type="submit" value="Create Event" class="btn btn-primary">
        </form>
    </div>

@endsection