@extends('backend.master')
@section('content')
    <h4 class="header-title mb-4">Add Faq</h4>
    <p style="color: green">
        @if(session('msg'))
            {{session('msg')}}
        @endif
    </p>

    <form action="{{route('faqPost')}}" method="post">
        @csrf
        <input type="hidden" name="id">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Product name" name="title">
            @error('title')
                <p style="color: red">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Enter Description"></textarea>
            @error('description')
                <p style="color: red">{{$message}}</p>
            @enderror
        </div>
        <input class="btn btn-primary" type="submit" value="Submit" name="submit">
    </form>
@endsection
