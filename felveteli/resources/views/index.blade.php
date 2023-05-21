@extends('layouts.app')


@section('content')
@if (count($companies) === 0)
    <p class="p">No data found</p>    
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
                            <button type="button" class="btn btn-primary m-2">Details</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>
@endif
@endsection