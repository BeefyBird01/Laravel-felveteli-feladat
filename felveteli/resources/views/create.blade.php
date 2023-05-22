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
                        <div class="col-md-3 mx-left">
                            <input type="text" name="name" class="form-control" placeholder="Stark Industries" value="{{old('name')}}">
                            @error('name')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    Tax Number:
                    <div class="form-floating mb-3">
                        <div class="col-md-3 mx-left">
                            <input type="number" name="taxNumber" class="form-control" placeholder="*number*" value="{{old('taxNumber')}}">
                            @error('taxNumber')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    Email:
                    <div class="form-floating mb-3">
                        <div class="col-md-3 mx-left">
                            <input type="email" name="email" class="form-control" placeholder="example@example.com" value="{{old('email')}}">
                            @error('email')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    Phone Number:
                    <div class="form-floating mb-3">
                        <div class="col-md-3 mx-left">
                            <input type="tel" name="phoneNumber" class="form-control" placeholder="+58245852565" value="{{old('phoneNumber')}}">
                            @error('phoneNumber')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                    <button type="submit" class="btn btn-success m-2">Add</button>
                
            </div>
        </form>
    </div>
@endsection