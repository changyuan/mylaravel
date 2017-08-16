<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$name}}</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="http://v3.bootcss.com/examples/grid/grid.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <h1 class="text-center">{{$name}}</h1>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-sm-offset-0 col-md-6 col-lg-6 col-sm-offset-2 visible-lg-block">
                this is a test
            </div>
            <div class="col-sm-6 visible-lg-block">
                <p>asdf</p><p>阿斯蒂芬</p>
            </div>
        </div>
        <div class="row">

              <div class="col-sm-9">
                Level 1: .col-sm-9
                <div class="row">
                  <div class="col-xs-8 col-sm-6">
                    Level 2: .col-xs-8 .col-sm-6
                  </div>
                  <div class="col-xs-4 col-sm-6">
                    Level 2: .col-xs-4 .col-sm-6
                  </div>
                </div>
              </div>

               <div class="col-sm-3">
                col-sm-3
                <div class="row">
                    <div class="col-xs-4 colsm-4">col-xs-4</div>
                </div>
            </div>


        </div>
       <div class="row">
          <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
          <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-lowercase">Lowercased text.</p>
                <p class="text-uppercase">Uppercased text.</p>
                <p class="text-capitalize">Capitalized text.</p>
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
                <kbd>ctrl + d</kbd>
                <div class="pre-scrollable">samp text</div>
            </div>
            <div class="col-md-12">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>


        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $('#myAlert').on('closed.bs.alert', function () {
              // do something…
            })
        </script>
    </body>
</html>