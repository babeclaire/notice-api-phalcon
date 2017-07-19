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
        <?= $this->tag->stylesheetLink('assets/css/bootstrap.min.css') ?>
        <?= $this->tag->stylesheetLink('assets/css/animate.min.css') ?>
        <?= $this->tag->stylesheetLink('assets/css/themify-icons.css') ?>
        <?= $this->tag->stylesheetLink('assets/css/paper-dashboard.css') ?>
        <?= $this->tag->stylesheetLink('assets/css/style.css') ?>
    </head>
    <body>
        <div class="container">
            <?= $this->getContent() ?>
        </div>
       <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
         <!-- <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script> -->
        <!-- <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>  -->
       <!--   <script src="assets/js/demo.js"></script>
          <script src="assets/js/utils.js"></script> --> 
         <!-- <?= $this->tag->javascriptInclude('assets/js/utils.js') ?> -->
         <?= $this->tag->javascriptInclude('assets/js/demo.js') ?>
         <!-- <?= $this->tag->javascriptInclude('assets/js/bootstrap.min.js') ?> -->
         </body>
</html>
