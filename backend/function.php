<?php
include('db.php');


    function get_posts(){
        global $connection;

        $query = "SELECT * FROM posts";
        $result = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($result)){
            $post = [
            ];
            $post['id'] = $row['post_id'];
            $post['title'] = $row['post_title'];
            $post['body'] = $row['post_body'];
            $post['author'] = $row['post_author'];
            $post['date'] = $row['post_date'];
            $json = json_encode($post);
            var_dump($json);
        } 
    }
    get_posts();

    function get_by_id(){
        global $connection;
        $post_id = 2;
        $query = "SELECT * FROM posts WHERE post_id = $post_id";
        $result = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($result)){
            $post = [
            ];
            $post['id'] = $row['post_id'];
            $post['title'] = $row['post_title'];
            $post['body'] = $row['post_body'];
            $post['author'] = $row['post_author'];
            $post['date'] = $row['post_date'];
            $json = json_encode($post);
            var_dump($json);

    }
}
?>