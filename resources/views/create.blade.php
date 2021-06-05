@extends('layouts.main')

@section('content')

<h1>Create a Student</h1>
<h1>Add New Post</h1>

<form method="POST" action="{{ route('post.addStudent') }}">
@csrf
<label for="title">Student name:</label>
<input type="text" name="title" placeholder="Enter post title..."> <br>
<label for="title">Student surname:</label>
<input type="text" name="title" placeholder="Enter post title..."> <br>
<label for="post">Student Description:</label>
<textarea name="post" rows="3"></textarea>
<input type="submit" value="submit">
</form>

@endsection