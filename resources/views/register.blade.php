@extends('master')
@section('content')
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<!-- Membuat Form-->
<form action="{{ route('/welcome') }}" method="get">
    <label for="first_name">First Name:</label><br><br>
    <input type="text" id="first_name" name="first_name"><br><br>

    <label for="last_name">Last Name:</label><br><br>
    <input type="text" id="last_name" name="last_name"><br><br>

    <label>Gender:</label><br><br>
    <input type="radio" name="gender" value="0"> Male<br>
    <input type="radio" name="gender" value="1"> Female<br>
    <input type="radio" name="gender" value="2"> Other<br>
    <br><br>

    <label>Nationality</label><br><br>
    <select>
        <option>Indonesian</option>
        <option>Malaysian</option>
        <option>Singapore</option>
        <option>Australian</option>
    </select>
    <br><br>
    <label>Language Spoken:</label><br><br>
    <input type="checkbox" name="language" value="0"> Bahasa Indonesia<br>
    <input type="checkbox" name="language" value="1"> English<br>
    <input type="checkbox" name="language" value="2"> Other<br>
    <br><br>

    <label for="bio">Bio:</label><br><br>
    <textarea cols="30" rows="7" id="bio"></textarea>
    <br>
    <input type="submit" value="Sign Up">
</form>
@endsection
