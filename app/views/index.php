<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nicole's Recipe Collection</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p class="lead">Nicole's Recipe Collection</p>
                <p>Hello. This is a collection of gluten-free recipes that I've developed since being diagnosed with celiac disease in June 2014.</p>
                <p>This site isn't fancy at all. If you have the url of this site, chances are you only have it because I love you.</p>
                <p>Choose one of my recipes below and watch it magically appear on the right side of this pane.</p>
                <div class="list-group">
                    <?php foreach ($dishes as $dish): ?>
                      <a href="<?php echo $dish->id ?>">
                        <?php echo $dish->name ?></a><br>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="col-md-9">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/800x300" alt="">
                    <div class="caption-full">
                        <h4><?php echo $dish->name ?></h4>
                        <p><?php echo $dish->description ?></p>
                        <p><?php echo $dish->ingredients ?></p>
                        <p><?php echo $dish->instructions ?></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Nicole Antonette del Rosario 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>