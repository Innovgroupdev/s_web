
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur 419</title>
    <link rel="icon" href="{{ url('images/AGNASSAN-logo.svg') }}" sizes="50x50">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,700;1,700&family=Dela+Gothic+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap4/bootstrap.min.css') }}">
<script src="{{asset('bootstrap-autocomplete.js')}}"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div id="content" style="margin :auto;vertical-align:middle;display: flex;align-items: center;justify-content: center;height:100%">
<div class="m-auto text-center container">
<img src="{{ asset('images/419.png') }}" class="mx-auto mt-n5 col-10 col-sm-8 col-md-4" style="margin: auto;"  alt="erreur 419">

<h1 class="text-uppercase mt-0 title" style="font-family: 'Balsamiq Sans', cursive;z-index:10"><br><strong style="font-weight:bold!important"> Erreur 419</strong></h1>

<p style="font-size: 25px;font-weight:300;font-family: 'Montserrat', sans-serif;" class="subtitle">
  La session à expiré !
</p>
 <div class="d-flex py-5 justify-content-center">
    <a  onclick="goBack()" class="btn btn-primary px-5 py-3"> Retour</a>
 </div>
</div>
</div>
</body>
</html>
<style>
.title{
    font-size: 40px;
}
.btn{
    border-radius: 50px;
    background-color: orangered;
    color: #fff !important;
    border: 1px solid orangered;
    padding: 15px 100px !important;
    font-weight: 400!important;
}
  @media(max-height:770px){
      .title{
          font-size: 25px;
          margin-top: 0!important;
      }
      .subtitle{
          font-size: 15px!important;
      }
  }
</style>
<script>
  var body = document.body,
    html = document.documentElement;

var height = Math.max( body.scrollHeight, body.offsetHeight,
                       html.clientHeight, html.scrollHeight, html.offsetHeight );
    document.getElementById("content").style.height = height+"px";

  
function goBack() {
   window.history.back();
}

</script>
