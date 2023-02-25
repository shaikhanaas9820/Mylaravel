<!doctype html>
<html lang="en">
  <head>
    <title>{{$title}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <link rel="stylesheet" type="text/css" href="{{ asset('/registration.css') }}">
    <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">{{$title}}</h3>
              <form action="{{$url}}" method="POST">
                @csrf
				{{-- @php
					if (count($errors->all())>0) 
					{
						echo "This is a test";
					}
					else {
						echo "This is a test2";
					}
				@endphp --}}
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      {{-- <input type="text" id="firstName" name="name" class="form-control form-control-lg" value="{{$data->name}}"/> --}}
                      <input type="text" id="firstName" name="name" class="form-control form-control-lg" value="<?php if (isset($data)) { echo $data->name;} else echo""; ?>"/>
                      <label class="form-label" for="firstName">Name</label>
					  <span class="text-danger">
						@error('name')
							{{$message}}
						@enderror
					  </span>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      {{-- <input type="date" id="date_of_birth" name = "date_of_birth" class="form-control form-control-lg" value="{{$data->dob}}"/> --}}
                      <input type="date" id="date_of_birth" name = "date_of_birth" class="form-control form-control-lg" value="<?php if (isset($data)) { echo $data->dob;} else echo""; ?>"/>
					  
                      <label class="form-label" for="date_of_birth">DOB</label>
					  <span class="text-danger">
						@error('date_of_birth')
							{{$message}}
						@enderror
					  </span>
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
  
                    <div class="form-outline datepicker w-100">
                      {{-- <input type="text" class="form-control form-control-lg" name="address" id="address" value="{{$data->address}}"/> --}}
                      <input type="text" class="form-control form-control-lg" name="address" id="address" value="<?php if (isset($data)) { echo $data->address;} else echo""; ?>"/>
                      <label for="address" class="form-label">Address</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <h6 class="mb-2 pb-1">Gender: </h6>
  
                    <div class="form-check form-check-inline">
                      {{-- <input class="form-check-input" name="gender" type="radio" name="inlineRadioOptions" id="femaleGender"
                        value="F" {{$data->gender == "F" ? "checked" : ""}}/> --}}
						<input class="form-check-input" name="gender" type="radio" name="inlineRadioOptions" id="femaleGender" 
						value="F" <?php if (isset($data->gender) && $data->gender == "M") { echo "checked";} ?>/>
						
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      {{-- <input class="form-check-input" name="gender" type="radio" name="inlineRadioOptions" id="maleGender"
                        value="M" {{$data->gender == "M" ? "checked" : ""}}/> --}}
						<input class="form-check-input" name="gender" type="radio" name="inlineRadioOptions" id="maleGender"
						value="M" <?php if (isset($data->gender) && $data->gender == "M") { echo "checked";} ?> />
						
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      {{-- <input class="form-check-input" name="gender" type="radio" name="inlineRadioOptions" id="otherGender"
                        value="O" {{$data->gender == "O" ? "checked" : ""}}/> --}}
						<input class="form-check-input" name="gender" type="radio" name="inlineRadioOptions" id="otherGender"
						value="O" <?php if (isset($data->gender) && $data->gender == "O") { echo "checked";} ?>  />
						
                      <label class="form-check-label" for="otherGender">Other</label>
					  <span class="text-danger">
						@error('gender')
							{{$message}}
						@enderror
					  </span>
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      {{-- <input type="email" id="email" name="email" class="form-control form-control-lg" value="{{$data->email}}"/> --}}
                      <input type="email" id="email" name="email" class="form-control form-control-lg" autocomplete="off" value="<?php if (isset($data)) { echo $data->email;} else echo""; ?>"/>
                      <label class="form-label" for="email">Email</label>
					  <span class="text-danger">
						@error('email')
							{{$message}}
						@enderror
					  </span>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="password" id="password" name="password" class="form-control form-control-lg" autocomplete="off" value=''/>
                      <label class="form-label" for="password">Password</label>
					  <span class="text-danger">
						@error('password')
							{{$message}}
						@enderror
					  </span>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      {{-- <input type="tel" id="phoneNumber" name = "number" class="form-control form-control-lg" value="{{$data->number}}"/> --}}
                      <input type="tel" id="phoneNumber" name = "number" class="form-control form-control-lg" value="<?php if (isset($data)) { echo $data->number;} else echo""; ?>"/>
                      <label class="form-label" for="phoneNumber">Phone Number</label>
					  <span class="text-danger">
						@error('number')
							{{$message}}
						@enderror
					  </span>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      {{-- <input type="text" id="country" name="country" class="form-control form-control-lg" value="{{$data->country}}"/> --}}
                      <input type="text" id="country" name="country" class="form-control form-control-lg" value="<?php if (isset($data)) { echo $data->country;} else echo""; ?>"/>
                      <label class="form-label" for="country">Country Name</label>
					  <span class="text-danger">
						@error('country')
							{{$message}}
						@enderror
					  </span>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      {{-- <input type="text" id="state" name="state" class="form-control form-control-lg" value="{{$data->state}}"/> --}}
                      <input type="text" id="state" name="state" class="form-control form-control-lg" value="<?php if (isset($data)) { echo $data->state;} else echo""; ?>"/>
                      <label class="form-label" for="state">State Name</label>
					  <span class="text-danger">
						@error('state')
							{{$message}}
						@enderror
					  </span>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      {{-- <input type="text" id="city" name="city" class="form-control form-control-lg" value="{{$data->city}}"/> --}}
                      <input type="text" id="city" name="city" class="form-control form-control-lg" value="<?php if (isset($data)) { echo $data->city;} else echo""; ?>"/>
                      <label class="form-label" for="city">City Name</label>
					  <span class="text-danger">
						@error('city')
							{{$message}}
						@enderror
					  </span>
                    </div>
  
                  </div>
                </div>
  
                
  
                <div class="mt-4 pt-2">
                  <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit" />
                </div>
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
  </body>
</html>