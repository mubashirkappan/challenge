<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<body>
    <div id="app">
      <div class="container">
  <div class="form-group row">
    <h3 for="candidate_name" class="col-3 col-form-label">Name</h3>
    <div class="col-9">
      <input id="candidate_name" name="candidate_name" placeholder="Please enter your name." type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <h3 for="candidate_phone" class="col-3 col-form-label">Phone number</h3>
    <div class="col-9">
      <input id="candidate_phone" name="candidate_phone" placeholder="Please enter your phone number." type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <h3 for="candidate_email" class="col-3 col-form-label">Email</h3>
    <div class="col-9">
      <input id="candidate_email" name="candidate_email" placeholder="Please enter your email." required type="email" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <h6 class="col-3">Your favorite programming language</h6>
    <div class="col-9">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="fav_language" id="fav_language_0" type="radio" class="custom-control-input" value="php">
        <label for="fav_language_0" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="fav_language" id="fav_language_1" type="radio" class="custom-control-input" value="dart">
        <label for="fav_language_1" class="custom-control-label">Dart</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="fav_language" id="fav_language_2" type="radio" class="custom-control-input" value="javascript">
        <label for="fav_language_2" class="custom-control-label">Javascript</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="fav_language" id="fav_language_3" type="radio" class="custom-control-input" value="other">
        <label for="fav_language_3" class="custom-control-label">Other</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-5 col-7">
      <button name="submit" type="submit" class="btn btn-primary">Start the challenge</button>
    </div>
  </div>
</div></div></body>
