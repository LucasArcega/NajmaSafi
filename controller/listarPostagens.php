<?php

    require ('../model/post.php');

    $postagens = new Post();
    echo json_encode($postagens->ListPosts());

?>