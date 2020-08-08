@extends('master')
@section('form')
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form method="post" action="/process" >
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
	<p>First Name :</p>
	<input type="text" name="first_name">
	<p>Last Name :</p>
	<input type="text" name="last_name">
	<p>Gender :</p>
	<input type="radio" id="male" name="gender" value="male">
  	<label for="male">Male</label><br>
 	<input type="radio" id="female" name="gender" value="female">
 	<label for="female">Female</label><br>
 	<input type="radio" id="other" name="gender" value="other">
 	<label for="other">Other</label>
	<p>Nationality :</p>
	<select>
		<option>Indonesian</option>
		<option>Singaporean</option>
		<option>Australian</option>
		<option>Malaysian</option>
	</select>
	<p>Language Spoken :</p>
	<input type="checkbox" name="language1" id="language1" value="language1">
	<label for="language1">Bahasa Indonesia</label><br>
	<input type="checkbox" name="language2" id="language2" value="language2">
	<label for="language2">English</label><br>
	<input type="checkbox" name="language3" id="language3" value="language3">
	<label for="language3">Other</label>
	<p>Bio : </p>
	<textarea rows="10" cols="50">
	</textarea>
	<br>
	<input type="submit" name="submit" value="Sign Up">
</form>
@endsection