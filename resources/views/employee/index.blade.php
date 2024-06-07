@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" style="margin-bottom: 50px;">Employee Management</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('employee.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Employee First Name</label>
                            <input type="text" class="form-control" name="firstname">
                        </div><div class="col-md-6">
                            <label>Employee Last Name</label>
                            <input type="text" class="form-control" name="lastname">
                        </div>
                        <div class="col-md-6">
                            <label>Employee DOB</label>
                            <input type="date" class="form-control" name="DOB">
                        </div>
                        <div class="col-md-6">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone">

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-info" value="Register">
                        </div>

                    </div>
                </form>
            </div>

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Employee First Name</th>
                        <th scope="col">Employee Last Name</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($employers as $employee)
                        <tr>
                        <td>{{ $employee->id }}</td>
                            <td>{{ $employee->firstname }}</td>
                            <td>{{ $employee->lastname }}</td>
                            <td>{{ $employee->DOB }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>
                            <a href="{{ url('employees/' . $employee->id . '/edit') }}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{ url('employees/' . $employee->id . '/delete') }}" class="btn btn-danger btn-sm">Delete</a>
                            </form>
                            </td>

                          </tr>

                        @endforeach




                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF00;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush