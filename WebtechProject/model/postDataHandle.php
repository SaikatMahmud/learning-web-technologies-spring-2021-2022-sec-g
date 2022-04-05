<?php

$postsFilePath = '../model/posts.txt';

function getAllPosts()
{
    global $postsFilePath;
    $data = file_get_contents($postsFilePath);
    $data_arr = json_decode($data, true);
    return $data_arr ?? array();
}

function getUserPosts($username)
{
    $posts = getAllPosts();
    $userPosts = array();
    foreach ($posts as $postId => $post)
    {
        if ($post['publisher'] === $username)
        {
            $userPosts[$post['id']] = $post;
        }
    }
    return $userPosts;
}

function getPostsForUser($username)
{
    $posts = getAllPosts();
    $userPosts = array();
    foreach ($posts as $postId => $post)
    {
        if ($post['publisher'] !== $username)
        {
            $userPosts[$post['id']] = $post;
        }
    }
    return $userPosts;
}

function addPost($post)
{
    global $postsFilePath;
    $posts = getAllPosts();
    $post['id'] = count($posts) + 1;
    $posts[$post['id']] = $post;
    file_put_contents($postsFilePath, json_encode($posts));
}

function updatePost($post){
    $posts = getAllPosts();
    if (array_key_exists($post['id'], $posts)) {
        $posts[$post['id']] = $post;
        global $postsFilePath;
        file_put_contents($postsFilePath, json_encode($posts));
        return true;
    }
    return false;
}

function deletePost($id)
{
    global $postsFilePath;
    $posts = getAllPosts();
    if (array_key_exists($id, $posts))
    {
        unset($posts[$id]);
        file_put_contents($postsFilePath, json_encode($posts));
        return true;
    }
    return false;
}

?>