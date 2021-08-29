@extends('home')

@section('content')

<div class="container mh-75">
    <table class="table table-center">
        <tr>
            <th>ID</th>
            <th>{{$data->id}}</th>
        </tr>
        <tr>
            <th>Name</th>
            <th>{{$data->name}}</th>
        </tr>
        <tr>
            <th>eMail</th>
            <th>{{$data->email}}</th>
        </tr>
        <tr>
            <th>TEXT</th>
            <th>{{$data->text}}</th>
        </tr>
    </table>
    <div>
        <a href="{{ route('admin.index') }}">
            <button class="btn btn-primary d-grid gap-2 btn-lg btn-block" type="button">Back</button>
        </a>
    </div>
</div>

@endsection