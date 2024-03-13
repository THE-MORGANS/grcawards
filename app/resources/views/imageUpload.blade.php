<!DOCTYPE html>
<html>
<body>

<p></p>

<form action="{{route('UploadFiles')}}" method="post" enctype="multipart/form-data">
  @csrf
  <input type="file" name="images[]" multiple>
  <input type="submit">
</form>
</body>
</html>
