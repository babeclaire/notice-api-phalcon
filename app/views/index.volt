<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Phalcon PHP Framework</title>
        <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/animate.min.css" rel="stylesheet"/> -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- <link href="assets/css/themify-icons.css" rel="stylesheet">
        <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
        <link href="assets/css/style.css" rel="stylesheet"/> -->
        {{ stylesheet_link('assets/css/bootstrap.min.css') }}
        {{ stylesheet_link('assets/css/animate.min.css') }}
        {{ stylesheet_link('assets/css/themify-icons.css') }}
        {{ stylesheet_link('assets/css/paper-dashboard.css') }}
        {{ stylesheet_link('assets/css/style.css') }}
    </head>
    <body>
        <div class="container">
            {{ content() }}
        </div>
       <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
         <!-- <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script> -->
        <!-- <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>  -->
       <!--   <script src="assets/js/demo.js"></script>
          <script src="assets/js/utils.js"></script> --> 
         <!-- {{ javascript_include('assets/js/utils.js') }} -->
         {{ javascript_include('assets/js/demo.js') }}
         <!-- {{ javascript_include('assets/js/bootstrap.min.js') }} -->
         </body>
</html>
