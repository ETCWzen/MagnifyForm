<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Employee Form</title>
</head>

<body>
<h1>Create Employee</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    <hr/>
@endif
<div>

    <form action="{{ route('employee.create') }}" method="post:">
        @csrf
        <div>
            <label for="name">Full Name:</label>
            <input type="text" name="name" required aria-required="true"></br>
        </div>
        <div>
            <label for="identity">Id Number:</label>
            <input type="text" name="identity" required aria-required="true"></br>
        </div>
        <div>
            <label for="department">Pick your department:</label>
            <select id="department" name="department" required aria-required="true"> </br>
                <option value="accounting">Accounting</option>
                <option value="regStaff">Staff</option>
                <option value="management">Management</option>
                <option value="infoTech">IT</option>
            </select> </br>
        </div>

        <div>
            <label for="employment_status">Employment Status:</label> </br>
            <label for="full_time">Full Time</label>
            <input type="radio" id="full_time" name="employment_status" value="full_time">
            <label for="part_time">Part Time</label>
            <input type="radio" id="part_time" name="employment_status" value="part_time">
            <label for="contract">Contractor</label>
            <input type="radio" id="contract" name="employment_status" value="contract">
        </div>
        <div>
            <label for="email">Email Address:</label>
            <input type="email" name="email" required aria-required="true"></br>
        </div>

        <div>
            <label for="file">Select File for Upload</label> </br>
            <input type="file" id="file" name="file"></br>
        </div>
        <!--
            <label for="vol">Volume (between 0 and 50):</label>
            <input type="range" id="vol" name="vol" min="0" max="50">
            this is to show that one option for if say there is a range of number for the ID numbers


            <select id="employment_status" name="employment_status" required aria-required="true"> </br>
                <option value="full_time">Full Time</option>
                <option value="part_time">Part Time</option>
                <option value="contract">Contract</option>
            </select> </br>
        -->


        <button>Send</button>
    </form>
</div>
</body>

</html>
