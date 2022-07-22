@extends('layout.navbar')
@section('content')
<div class="w-50 p-5 justify-content-center">
    <table class="table table-striped">
        <tbody>
        <tr>
            <th scope="row">Name    :</th>
            <td>{{$user_info->name}}</td>
        </tr>
        <tr>
            <th scope="row">Email   :</th>
            <td>{{$user_info->email}}</td>
        </tr>
        <tr>
            <th scope="row">Type    :</th>
            <td>{{$user_info->type}}</td>
        </tr>
        </tbody>
    </table>
</div>
@endsection