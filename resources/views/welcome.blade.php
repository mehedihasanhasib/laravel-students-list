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
    <form action="" method="post" class="form container ">
        <h1 class="text-center text-primary">Registration Form</h1>
        <input class="form-control form-control-lg border border-primary" type="text" name="first_name"
            placeholder="First Name">
        <span class="text-danger p-1"></span>
        <input class=" form-control form-control-lg border border-primary" type="text" name="last_name"
            placeholder="Last Name">
        <span class="text-danger p-1"></span>
        <input class="form-control form-control-lg border border-primary" type="email" name="email"
            placeholder="Email">
        <span class="text-danger p-1"></span>
        <select class="form-select form-select-lg border border-primary" name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Others</option>
            <option value="notSelected" selected>Select Gender..</option>
        </select>
        <span class="text-danger p-1">
            <input class="form-control form-control-lg border border-primary" type="text" name="address"
                placeholder="Address">
            <span class="text-danger p-1"></span>

            <input class="form-control form-control-lg border border-primary" type="tel" name="contact"
                placeholder="Contact no">
            <span class="text-danger p-1"></span>
            <br>
            <input class="btn btn-primary mx-1 align-middle" type="submit" value="Submit">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
