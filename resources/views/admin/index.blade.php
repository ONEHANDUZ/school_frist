@extends('home')

@section('content')

<div class="container">

    
    <table class="table table-center" border="1">
        <tr>
            <th>ID</th>
            <th>TEXT</th>
            <th>KEYS</th>
        </tr>
        @foreach ($data as $dat)
        <tr>
            <td>{{$dat->id}}</td>
            <td>{{$dat->email}}</td>
            <td>
                <div>
                    <a href="{{ route('admin.show', $dat->id) }}">
                        <button class="btn btn-primary mx-auto" type="button">More</button>
                    </a>
                </div>
            </td>
        </tr>
        @endforeach
        
    </table>
</div>

@endsection