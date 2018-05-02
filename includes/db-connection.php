<?php 
                $user = 'cis340final';
                $password = 'cis340DB';
                $db = 'cis340';
                $host = 'cis340.database.windows.net';
                $port = 3306;
                $link = mysqli_init();
                $success = mysqli_real_connect(
                        $link, $host, $user, $password, $db, $port
                );
               