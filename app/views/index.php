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
                <p>Hello. This is a collection of gluten-free recipes that I've developed since I was diagnosed with celiac disease in June 2014.</p>
                <p>This site isn't fancy at all as it's really just meant for me and a few friends. If you have the url of this site, chances are you only have it because I love you.</p>
                <p>Note: I regularly use a scale for cooking, so most of the time I provide weights instead of measures.</p>
                <div class="list-group">
                    <?php foreach ($dishes as $dish): ?>
                      <a class="ajax-link" href="<?php echo url('view', [$dish->id]) ?>">
                        <?php echo $dish->name ?></a><br>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="col-md-9" id="recipe_display">
                <!-- This is where the recipe will appear -->
                <?php echo $first_dish ?>
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

    <script type="text/javascript">
    $(function () {
        $('a.ajax-link').on('click', function (e) {
            // Stop the browser from loading another page
            e.preventDefault();

            var url = $(this).attr('href');
            
            $.get(url, function (data) {
                $('#recipe_display').html(data);
            });
        });
    });
    </script>
    
</body>
</html>