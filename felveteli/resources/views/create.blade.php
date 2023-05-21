@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <form action="/companies" method="post" enctype="multipart/form-data">
            @csrf
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create new company</h6>
                <div>
                    Name:
                    <div class="form-floating mb-3">
                        <input type="text" name="name" placeholder="Stark Industries">
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    Tax Number:
                    <div class="form-floating mb-3">
                        <input type="number" name="taxNumber" placeholder="*number*">
                        @error('taxNumber')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    Email:
                    <div class="form-floating mb-3">
                        <input type="email" name="email" placeholder="example@example.com">
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    Phone Number:
                    <div class="form-floating mb-3">
                        <input type="tel" name="phoneNumber" placeholder="+58245852565">
                        @error('phoneNumber')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                    <button type="submit" class="btn btn-success m-2">Add</button>
                
            </div>
        </form>
    </div>
@endsection