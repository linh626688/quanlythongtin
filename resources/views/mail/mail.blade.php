<!DOCTYPE html>
<html>
<body>

<form method="post" action="{!! url('send-mail')!!}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  Name:<br>
  <input type="text" id ="name" name="name">

  <br>
  Text:<br>
  <textarea row ="6" cols="40" id = "message" name= " message"></textarea>
  <br><br>
  <input type="submit" value="Submit" id =submit>
</form>

</body>
</html>
