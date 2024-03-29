<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Info Form</title>
</head>

<body>
    <form action="{{ route('create-student') }}" method="post" class="form container" enctype="multipart/form-data">
        @csrf
        <h1 class="text-center text-primary">Registration Form</h1>

        {{-- first Name --}}
        <input class="form-control form-control-lg border border-primary" type="text" name="first_name"
            placeholder="First Name">
        <x-input-error :messages="$errors->get('first_name')" class="mt-2 text-danger" />
        <br>
        {{-- last name --}}
        <input class=" form-control form-control-lg border border-primary" type="text" name="last_name"
            placeholder="Last Name">
        <x-input-error :messages="$errors->get('last_name')" class="mt-2 text-danger" />
        <br>
        {{-- email --}}
        <input class="form-control form-control-lg border border-primary" type="email" name="email"
            placeholder="Email">
        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
        <br>
        {{-- profile picture --}}
        <input class="form-control form-control-lg border border-primary" type="file" name="profile_picture">
        <x-input-error :messages="$errors->get('profile_picture')" class="mt-2 text-danger" />
        <br>
        {{-- gender --}}
        <select class="form-select form-select-lg border border-primary" name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Others</option>
            <option value="notSelected" selected>Select Gender..</option>
        </select>
        <x-input-error :messages="$errors->get('gender')" class="mt-2 text-danger" />
        <br>
        {{-- address --}}
        <input class="form-control form-control-lg border border-primary" type="text" name="address"
            placeholder="Address">
        <x-input-error :messages="$errors->get('address')" class="mt-2 text-danger" />
        <br>
        {{-- contact --}}
        <input class="form-control form-control-lg border border-primary" type="tel" name="contact"
            placeholder="Contact no">
        <x-input-error :messages="$errors->get('contact')" class="mt-2 text-danger" />
        <br>

        {{-- submit button --}}
        <input class="btn btn-primary mx-1 align-middle" type="submit" value="Submit">
    </form>


    @if (session()->has('msg'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('msg') }}
        </div>
    @endif


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
