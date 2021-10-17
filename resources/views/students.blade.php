<html>
    <head>
    <style>
    div {text-align:center;}

</style>

<html  dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- <title>Laravel</title> -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                  dateFormat: "yy-mm-dd",
                  maxDate: 5,
                  minDate: 0
            });
        });
        </script> -->

</head>
<body>
<div class="container">

<div class="row justify-content-center">
<div class="col-md-8">
    <br>
<br>
<br>
<div class="card">

<div class="card-header">
project
</div>
<div class="card-body">
<form action="{{ route('students.store') }}" method="POST">
<div class="p-2 mb-6"  >
            <div class="row">
                
            <!--<div class="col-sm-12"><h1 class="text-center text-secondary">إستعراض الطلب</h1>-->
      
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2" for="subject_pr" ></span>
  </div> 
  <input class="form-control"  aria-label="subject_pr" aria-describedby="basic-addon4" type="text" name="subject_pr" >
</div>
    
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2" for="idea_pr" ></span>
  </div> 
  <input class="form-control"  aria-label="idea_pr" aria-describedby="basic-addon4" type="text" name="idea_pr" >
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2" for="term_Gr" ></span>
  </div> 
  <input class="form-control"  aria-label="term_Gr" aria-describedby="basic-addon4" type="text" name="term_Gr" >
</div>
</div></div>
    </form>

    </div>    </div>
    </div>
    </div>

</body>
    </html>