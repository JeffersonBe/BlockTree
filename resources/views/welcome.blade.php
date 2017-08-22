<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <!-- Bootstrap Core CSS -->
  <link href="css/app.css" rel="stylesheet">
  <link href="css/tp.css" rel="stylesheet">

</head>
<body>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <img src="logo.png" alt="..." class="img-responsive">
        </div>
      </div>
        {!! Form::open(array('route' => 'blockStore', 'class' => 'form')) !!}
        {!! csrf_field() !!}
        <div class="form-group">
          <label for="exampleInputEmail1">Location</label>
          {!! Form::text('location', 'France', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Company</label>
          {!! Form::text('company', 'Shanghai', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Type of Wood</label>
          {!! Form::text('typeOfWood', 'Oak', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::submit('Block Tree it!', array('class'=>'btn blockTree btn-default')) !!}
        </div>
        {!! Form::close() !!}
    </div>
  </div>
</body>
</html>
