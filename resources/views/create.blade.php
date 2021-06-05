@extends('layouts.main')

@section('content')

<h1>Create a Student</h1>
<h1>Add New Post</h1>

<form method="POST" action="{{ route('post.addStudent') }}">
@csrf
<label for="name">Student name:</label>
<input type="text" id="name" name="name" placeholder="Enter student name..."> <br>
<label for="surname">Student surname:</label>
<input type="text" id="surname" name="surname" placeholder="Enter student surname..."> <br>
<label for="description">Student Description:</label>
<textarea name="description" id="description" rows="3"></textarea>
<input type="submit" value="submit">
</form>

@endsection