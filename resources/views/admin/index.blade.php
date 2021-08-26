@extends('home')

@section('content')

<div class="container">

    
    <table class="table table-center" border="1">
        <Tr>
            <Th>id</Th>
            <Th>name</Th>
            <Th>mail</Th>
            <Th>text</Th>
        </Tr>
        @foreach ($data as $dat)
        
        <tr>
            <td>{{$dat->id}}</td>
            <td>{{$dat->name}}</td>
            <td>{{$dat->email}}</td>
            <td>{{$dat->text}}</td>
        </tr>
        @endforeach
        
    </table>
</div>

@endsection