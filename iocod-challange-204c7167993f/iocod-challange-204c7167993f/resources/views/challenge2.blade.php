<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?PHP


if($_POST['fav_language'])
{

  $lang_name=$_POST['fav_language'];
}else
{

  echo "Oops!! Something went wrong!!!";
  exit();
}


if($lang_name=='other')
{


  echo "Sorry! We have openings only for Laravel, Flutter, Vuejs";
  exit();
}



$rand_and=rand(1,3);

?>
<div class="container">
<body>
    <div id="app">
      {{-- <div class="container-fluid"> --}}
{{ Form::open(array('url' => 'challenge_email')) }}

<input name="wizard1" type="hidden" value="<?PHP print_r($_POST) ?>" name="">




  <div class="form-group row">
    <input type="text" disabled name="timer" value="0" style="width: 20px;">

</div>
  <div class="form-group row">

<img src="{{$lang_name}}/{{$rand_and}}.png">
<input type="hidden" value="{{$rand_and}} {{$lang_name}}" name="question">
</div>

  <div class="form-group row">
    <h3 for="missing_code" class="col-4 col-form-label">What is missing in the above code?</h3>
    <div class="col-8">
      <textarea id="missing_code" name="missing_code" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>

 <button name="submit" type="submit" class="btn btn-success">Completed</button>


{{ Form::close() }}
</div></div></body>
