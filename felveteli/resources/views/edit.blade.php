@extends('layouts.app')

@section('title','Edit Company')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <form action="{{route('update', ['company' => $company->id])}}" method="post" id="updateForm" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Create new company</h6>
                <div>
                    Name:
                    <div class="form-floating mb-3">
                        <div class="col-md-3 mx-left">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Stark Industries" value="{{$company->name}}">
                            <span class="text-danger" id="nameError"></span>
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
                            <input type="number" name="taxNumber" id="taxNumber" class="form-control" placeholder="*number*" value="{{$company->taxNumber}}">
                            <span class="text-danger" id="taxNumberError"></span>
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
                            <input type="email" name="email" id="email" class="form-control" placeholder="example@example.com" value="{{$company->email}}">
                            <span class="text-danger" id="emailError"></span>
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
                            <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="+6251454456" value="{{$company->phoneNumber}}">
                            <span class="text-danger" id="phoneNumberError"></span>
                            @error('phoneNumber')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                    <button type="submit" class="btn btn-success m-2">Edit</button>
                
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
          $('#updateForm').submit(function(event) {
            event.preventDefault();
            var isValid = true;
            
            // Clear previous error messages
            $('.text-danger').text('');
            
            // Validate name field
            var name = $('#name').val();
            if (name.length === 0) {
              $('#nameError').text('Name is required');
              isValid = false;
            }
            
            // Validate email field
            var email = $('#email').val();
            if (email.length === 0) {
              $('#emailError').text('Email is required');
              isValid = false;
            } else if (!isValidEmail(email)) {
              $('#emailError').text('Invalid email address');
              isValid = false;
            }
            
            // Validate taxnumber field
            var taxNumber = $('#taxNumber').val();
            if (taxNumber.length === 0) {
              $('#taxNumberError').text('Tax number is required');
              isValid = false;
            } else if (taxNumber.length != 9) {
              $('#taxNumberError').text('Tax number must be 9 characters long');
              isValid = false;
            }

            // Validate phone number field
            var phoneNumber = $('#phoneNumber').val();
            if (phoneNumber.length === 0) {
              $('#phoneNumberError').text('Phone number is required');
              isValid = false;
            }
            else if (!isValidPhoneNumber(phoneNumber)) {
              $('#phoneNumberError').text('Invalid phone number');
              isValid = false;
            }
             else if (phoneNumber.length < 10) {
              $('#phoneNumberError').text('Phone number must be 10 characters long');
              isValid = false;
            }
            
            
            // Submit the form if all fields are valid
            if (isValid) {
              this.submit();
            }
          });
        });
        
        // Email validation function
        function isValidEmail(email) {
          var emailPattern = /\S+@\S+\.\S+/;
          return emailPattern.test(email);
        }

        //phone number validation
        function isValidPhoneNumber(email) {
          var emailPattern = /^[\d\-()\s+]+$/;
          return emailPattern.test(email);
        }
      </script>
@endsection