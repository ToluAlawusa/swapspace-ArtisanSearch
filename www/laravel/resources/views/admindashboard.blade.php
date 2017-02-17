@extends('layouts.master')
@section('browsertitle')admindashboard @stop
@section('content')

    <div class="wrapper">
    <table id="tab">
        <thead>
            <tr>
                <th>Statement</th>
                <th>Statement ID</th>
                <th>Category ID</th>
                <th>User ID</th>
                <th>User Email</th>
                <th>Phone Number</th>
                <th>Preview</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
               @foreach ($stat as $stat)
            <tr>
            <td>{!! $stat->statement !!}</td>
            <td>{!! $stat->statement_id !!}</td>
            <td>{!! $stat->category_id !!}</td>
            <td>{!! $stat->user_id !!} </td>
            <td>{!! $stat->email !!}</td>
            <td>{!! $stat->phone !!}</td>
            <td> <a href="/previewstatement/{!! $stat->statement_id !!}/">Preview</a></td>
            <td> <a href="/deletestatement/{!! $stat->statement_id !!}/">Delete</a></td>
            </tr>
               @endforeach            
        </tbody>
    </table>
    <input type="hidden" value="{{ Session::token() }}" name="_token">
    </div>

@endsection