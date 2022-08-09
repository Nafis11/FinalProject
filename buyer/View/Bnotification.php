<?php
    
    include '../Controller/show_notification_xml.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Notification</title>
        <style>
            h2 {
                padding: 20px;
                text-align: center;
            }

            p {
                padding: 10px;
                background: gray;
                margin: 20px auto;
            }

            button {
                padding: 10px;
                background: #336638;
                border: none;
                color: #FFF;
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
                    <h2>All Notification</h2>
                    <p><b><?php echo $xml1->seller; ?></b> <?php echo $xml1->message; ?></p>
                    <button>Accept</button>
                    <button>Reject</button>
                    <p><b><?php echo $xml2->seller; ?></b> <?php echo $xml2->message; ?></p>
                    <button>Accept</button>
                    <button>Reject</button>
                </div>
            </section>
        </div>         
    </body>
</html>