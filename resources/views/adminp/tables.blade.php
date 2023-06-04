@extends('layouts.adminbase')
 
@section('title', 'Property')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Block Level Buttons </strong>
        <small>Use this class
            <code>.btn-block</code>
        </small>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
        <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>

        <button type="button" class="btn btn-primary btn-lg btn-block">Primary</button>
        <button type="button" class="btn btn-secondary btn-lg btn-block">Secondary</button>
        <button type="button" class="btn btn-success btn-lg btn-block">Success</button>
        <button type="button" class="btn btn-warning btn-lg btn-block">Warning</button>
        <button type="button" class="btn btn-danger btn-lg btn-block">Danger</button>
        <button type="button" class="btn btn-link btn-lg btn-block">Link</button>
    </div>
</div>
@endsection