<?php
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Report</title>
        <style>
            .reportbody{overflow: hidden;}

            .reportheading{background-color: #29AAE3;border: none;padding: 15px;color:#FFF;border-radius: 10px 10px 0px 0px;margin-bottom: 20px ;}

            .reportto input, .reportsub input, .reportmainbody textarea{width: 96%;border: none;border-bottom: 2px solid #B5B5B5 ;height: 15px;padding: 15px;
                font-size: 18px;background: transparent;margin-bottom: 15px;color: #022c12;}
            .reportto input{}

            .reportmainbody textarea{resize: none; height: 400px;}

            .reportsendbtn{width: 25%;overflow: hidden;padding: 15px;float: right;}

            .reportsendbtn input{width: 100%;background-color: #29AAE3;border: none;padding: 15px 0px 15px 0px;border-radius: 5px;color: #FFF;font-size: 20px;
                cursor: pointer;}
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
                    <div class="reportfullbody">
                         <div class="reportheading">
                             <h2>New Message</h2>
                         </div>
                         <div class="reportbody">
                             <form action="" method="post" enctype="multipart/form-data">
                                 <div class="reportto">
                                     <input type="email" name="useremail" placeholder="To">
                                 </div>
                                 <div class="reportsub">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                                <div class="reportmainbody">
                                    <textarea name="message" name="message" rows="10" cols="30" placeholder="Start writting">

                                    </textarea>
                                </div>
                                <div class="reportsendbtn">
                                    <input type="submit" name="messagesendbtn" value="Send">
                                </div>
                             </form>
                         </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>