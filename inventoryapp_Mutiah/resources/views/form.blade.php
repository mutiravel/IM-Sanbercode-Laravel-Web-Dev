@extends('layouts.master')
@section('title')
Form Input
@endsection
@section('content')
 <h2>Buat Account Baru!</h2>
  <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf

      <div class="mb-3">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="John">
      </div>
      <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe">
      </div>
    

    <label for="Gender" class="form-label">Gender</label>
     <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
      <label class="form-check-label" for="male">
          Male
      </label>
    </div>
    <div class="form-check">
     <input class="form-check-input" type="radio" name="gender" id="female" value="female" checked>
     <label class="form-check-label" for="female">
        Female
     </label>
    </div>
   
     <br /><br />

      <label for="nationality">Nationality:</label><br /><br />
     <select class="form-select" aria-label="Default select example">
        <option selected>Indonesian</option>
        <option value="1">Malaysian</option>
        <option value="2">Singaporean</option>
        <option value="3">Other</option>
      </select>
      <br /><br />

     <label for="language">Language Spoken:</label><br /><br />
       <div class="form-check">
         <input class="form-check-input" type="checkbox" value="" id="bahasaIndonesia" >
         <label class="form-check-label" for="bahasaIndonesia">
          Bahasa Indonesia
         </label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="checkbox" value="" id="english" >
         <label class="form-check-label" for="english">
          English
         </label>
      </div>
       <div class="form-check">
         <input class="form-check-input" type="checkbox" value="" id="other" >
         <label class="form-check-label" for="other">
          Other
         </label>
      </div>
      
      
      <br /><br />
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Bio</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <input type="submit" value="Sign Up" class="btn btn-success"/>
    </form>
@endsection
