@extends('layouts.app')

@section('content')
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">
                        Company Name
                    </th>
                    <th scope="col">
                        Tax number
                    </th>
                    <th scope="col">
                        Phone Number
                    </th>
                    <th scope="col">
                        Email
                    </th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>
                            {{$company->name}}
                        </td>
                        <td>
                            {{$company->taxNumber}}                            
                        </td>
                        <td>
                            {{$company->phoneNumber}}
                        </td>
                        <td>
                            {{$company->email}}
                        </td>
                        <td>
                            <a href="/companies/{{$company->id}}/edit">                      
                                <button type="submit" class="btn btn-primary m-2">Edit</button>
                            </a>  
                            <form action="/companies/{{$company->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-2">Delete</button>
                            </form>
                        </td>
                    </tr>
            </tbody>
        
        </table>
    </div>
@endsection