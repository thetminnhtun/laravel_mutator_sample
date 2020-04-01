@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form method="post">
                @csrf
                <div class="form-group">
                    <label >First Name</label>
                    <input class="form-control" type="text" name="first_name">
                </div>
                <div class="form-group">
                    <label >Last Name</label>
                    <input class="form-control" type="text" name="last_name">
                </div>
                <button class="btn btn-primary" type="submit">Add</button>
            </form>
        </div>
        <div class="col-md-8">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Full Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->first_name }}</td>
                            <td>{{ $customer->last_name }}</td>
                            <td>{{ $customer->first_name . ' ' .$customer->last_name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection