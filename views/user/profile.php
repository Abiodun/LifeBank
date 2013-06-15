<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LifeBank</title>
        <link rel="stylesheet" href="css/gumby.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="three columns logo centered">
                        <a href="/"><img src="img/logo-cw.png" alt=""></a>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="wrapper seven columns centered">
                        <div class="centered user-profile">
                            <?php
                            if (is_logged()) {
                            ?>
                              <span class="edit"><!--a href=""><i class="icon-pencil"></i>Edit</a--> <a href="logout"><i class="icon-logout"></i>Logout</a></span>
                            <?php
                            }
                            ?>
                            <div class="image circle">
                                <img src="<?php echo get_gravatar($user['email'], 96); ?>" width="96">
                            </div>
                            <h3><?php echo $user['name']; ?></h3>
                            <span class="location"><i class="icon-location"></i><?php echo $user['location']; ?></span>
                            <?php
                            /*? >
                            <ul class="two_up tiles details">
                                <li><i class="icon-mail"></i> <?php echo $user['email']; ?></li>
                                <li><i class="icon-phone"></i> <?php echo $user['phone']; ?></li>
                            </ul>
                            < ? php
                            }//*/
                            ?>
                        </div>
                        
                        <div class="ten columns centered user-info">
                            <ul class="three_up tiles">
                                <li>
                                    <div>
                                        <span class="value"><?php echo $user['blood_group']; ?></span>
                                        <span class="title">Blood Group</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="value"><?php echo $user['donated_times']; ?></span>
                                        <span class="title">Donated</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span class="value"><?php echo $user['referrals']; ?></span>
                                        <span class="title">Referrals</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- <div class="twelve columns user-badges">
                            <ul>
                                <li><img src="img/badge1.png"></li>
                            </ul>
                        </div> -->
                        
                        
                        
                    </div>
                    
                </div>
            </div>
        </section>

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/libs/gumby.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>