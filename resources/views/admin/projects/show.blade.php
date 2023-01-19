@extends('layouts.admin')

@section('content')

@if($project->cover_image)
<img src="{{asset('storage/'. $project->cover_image)}}" alt="" class="img-fluid">
@else
<div class="placeholder p-5 bg-secondary">placeholder</div>
@endif

<h1>Title project: {{$project->title}}</h1>
<div><strong>Slug Title project:</strong> {{$project->slug}}</div>
<div><strong>Type project:</strong> {{$project->type ? $project->type->name : 'Uncatecorized'}}</div>
<div><strong>Technology used:</strong> {{$project->technology}}</div>
<div><strong>Descritpion project:</strong> {{$project->description}}</div>


@endsection