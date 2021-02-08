<?php  
    include "includes/header.php";
    /*include "includes/db.php"*/;
    include "includes/navigation.php";

?>

<body>

    <div class="container">

        <div class="row">

            <div class="col-md-8">


                <?php/*


                $query="SELECT * FROM posts";
                $select_all_post=mysqli_query($connection,$query);

                while($row=mysqli_fetch_assoc($select_all_post)){
                        $post_title=$row['post_title'];
                        $post_author=$row['post_author'];
                        $post_date=$row['post_date'];
                        $post_content=$row['post_content'];
                        $post_image=$row['post_image'];
                       */?>

                        <h1 class="page-header">
                    
                </h1>

                <h2>
                    <a href="#"><?php/* echo $post_title; */?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php /*echo $post_author;?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image ?> "alt="">
                <hr>
                <p><?php /*echo $post_content; */?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                

              <?/*php } */?>
                
               


                
            </div>

        </div>


    </div>

</body>


<?php  

    include "includes/footer.php";
?>
