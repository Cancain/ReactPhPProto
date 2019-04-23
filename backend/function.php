<?php

    function get_posts(){
        global $connection;

        $query = "SELECT * FROM posts";
        $result = mysqli_query($connection, $query);

        while($row = mysqli_fetch_array($result)){
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            $post_body = $row['post_body'];
            $post_author = $row['post_author'];
            $post_date = $row['post_date'];
        }
    }
?>