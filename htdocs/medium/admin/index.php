<?php  

    include "includes/header.php";
    ?>

<body>

    <div id="wrapper">

<?php  

    include "includes/navigation.php";
    ?>

                    <?php 
                    if ($connection)
                        {echo "Connected";}
                    else 
                        echo "Unconnected";
                    ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            welcome to the administration
                            <small>by Can Yuksel</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

       <?php  

    include "includes/footer.php";
    ?>
