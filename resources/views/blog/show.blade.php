@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ str_limit($blog->title, $limit = 65, $end = '...') }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Edit</a>
                <a class="btn btn-success" href="{{ route('blogs.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img width="100%" height="400px" src="{{ asset($blog->featured_image) }}" alt="logo">
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>{!! $blog->content !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
