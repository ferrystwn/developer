@extends('page')
@section('judul')
Register New Account!
@endsection
@section('content')
<form action="/final" method="post">
  @csrf
  
    <label>First Name :</label><br><br>
      <input type="text" name="name"><br><br>
    <label>Last Name :</label><br><br>
      <input type="text" name="name1"><br><br>
    <label>Gender :</label><br><br>
      <input type="radio" name="gender" value="male" >Male<br>
      <input type="radio" name="gender" value="female">Female<br>
      <input type="radio" name="gender" value="other">Other<br><br>
    <label>Nationality :</label><br><br>
    <select>
      <option value="indonesia"> Indonesian</option>
      <option value="amerika">Amerika</option>
      <option value="Belanda">Belanda</option>
    </select><br><br>
    <label>Languange Spoken :</label><br><br>
      <input type="checkbox" name="skill">Bahasa Indonesia<br>
      <input type="checkbox" name="skill">English<br>
      <input type="checkbox" name="skill">Other<br><br>
    <label>Bio :</label><br><br>
    <textarea name="bio" rows="5" cols="20"></textarea><br><br>
      <input type="submit" value="send" >
</form>
@endsection

      
