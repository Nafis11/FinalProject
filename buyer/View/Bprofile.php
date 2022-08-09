<?php


?>

<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="../Model/css/Profile.css?v<?php echo time(); ?>">
        
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
                                <a href="Bprofile.php">About You</a>
                            </li>
                            <li>
                                <a href="">Edit Profile</a>
                            </li>
                            <li>
                                <a href="">Change Password</a>
                            </li>
                        </ul>
                    </div>
                    <div class="aboutyou">
                        <div class="profileinfo">
                            <table>
                                <tr>
                                    <th>
                                        <p>Name: </p>
                                    </th>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>E-mail: </p>
                                    </th>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Phone Number: </p>
                                    </th>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Address: </p>
                                    </th>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Gender: </p>
                                    </th>
                                    <td>
                                    
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <p>Date of Birth: </p>
                                    </th>
                                    <td>
                                        
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
    </body>
</html>