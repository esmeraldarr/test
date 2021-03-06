@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Machinery Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("machinery")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New machinery</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>description</th>
            <th>status</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($machineries as $machinery) 
            <tr>
                <td>{!!$machinery->name!!}</td>
                <td>{!!$machinery->description!!}</td>
                <td>{!!$machinery->status!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/machinery/{!!$machinery->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/machinery/{!!$machinery->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/machinery/{!!$machinery->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $machineries->render() !!}

</section>
@endsection