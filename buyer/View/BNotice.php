<?php
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Notice</title>
        <style>
            h2 {
                    text-align: center;
                    padding: 20px;
                }

                p.noticetitle {
                    padding: 10px;
                    font-size: 16px;
                    font-family: sans-serif;
                }

                p {
                    padding: 10px;
                    background: #76abd9;
                    border-radius: 5px;
                }
        </style>
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
                    <h2>Notice</h2>                          
                    <p class="noticetitle">What is Lorem Ipsum?</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever <a href="#">More</a></p>                 
                </div>
            </section>
        </div>
    </body>
</html>