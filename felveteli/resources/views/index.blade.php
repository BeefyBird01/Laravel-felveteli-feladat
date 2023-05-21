@extends('layouts.app')


@section('content')
@if (count($companies) === 0)
    <p class="p">No companies found</p>    
@else
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
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>
                            {{$company->name}}
                        </td>
                        <td>
                            {{$company->taxNumber}}
                            
                        </td>
                        <td>
                            <a href="/companies/{{$company->id}}">
                                <button type="button" class="btn btn-primary m-2">Details</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
<a href="/companies/create">
    <button type="button" class="btn btn-success m-2">Add</button>
</a>
@endsection