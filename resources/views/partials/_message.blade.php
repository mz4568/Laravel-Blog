 @if(count($errors)>0)
<div class='alert alert-danger col-md-6 col-md-offset-2'>
<strong> Errors:</strong>
 @foreach($errors->all() as $error)

  {{ $error }}
  @endforeach

</div>
@endif