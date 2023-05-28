@extends('layouts.app')

@section('title')
{{$company->name}}
@endsection

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
                            <a href="{{route('edit', ['company' => $company->id])}}">                      
                                <button type="submit" class="btn btn-primary m-2">Edit</button>
                            </a>  
                            <form action="{{route('delete', ['company' => $company->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-2" onclick="return confirmDelete()">Delete</button>
                            </form>
                        </td>
                    </tr>
            </tbody>
        
        </table>
    </div>
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this element?");
        }
    </script>
@endsection