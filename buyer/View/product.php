
<html>
    <head>
        <title>Seller</title>
        <link rel="stylesheet" href="../Model/css/seller.css?v<?php echo time(); ?>">
    </head>
    <body>
        <div class="container">
            <nav id="navbar">
            <?php
                include 'navbar.php';
            ?>
            </nav>
            <section id="sectionbar">
            <div class="ssectionbody">
                <div class="profilemenubar">
                        <ul>
                            <li>
                            <a id="load">Show all Product</a>
                            </li>
                        </ul>
                </div>

                <div class="selleradd" id="main">
                    <div class="srch">
                        <form action="" method="post" enctype="multipart/form-data">
                            <input class="srchbox" type="text" name="srch" placeholder="Enter Product ID">
                            <input id="load1" class="srchbtn" type="submit" name="Srchbtn" value="Search">
                        </form>
                    </div>
                    <?php
                        include '../View/productSearch.php';
                    ?>
                </div>
            </div>
            </section>   
        </div>   
        <script src="../Controller/js/jquery.js"></script>
        <script>
            $(document).ready(function(){
                $("#load").on("click",function(e){
                    $.ajax({
                        url:"productShow.php",
                        type:"POST",
                        success:function(data){
                            $("#main").html(data);
                        }
                    });
                });
            });
            $(document).ready(function(){
                $("#load1").on("click",function(e){
                    $.ajax({
                        url:"productSearch.php",
                        type:"POST",
                        success:function(data){
                            $("#main").html(data);
                        }
                    });
                });
            });
        </script>     
    </body>
</html>