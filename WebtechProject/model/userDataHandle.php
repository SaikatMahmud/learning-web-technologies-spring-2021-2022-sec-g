<?php

$usersFilePath = '../model/users.txt';

function getAllUsers()
{
    global $usersFilePath;
    $data = file_get_contents($usersFilePath);
    $data_arr = json_decode($data, true);
    return $data_arr ?? array();
}

function getUser($name)
{
    $users = getAllUsers();
    if (array_key_exists($name, $users))
    {
        return $users[$name];
    }
    return false;
}

function addUser($user)
{
    global $usersFilePath;
    $users = getAllUsers();
    $user['id'] = count($users) + 1;
    $users[$user['username']] = $user;
    file_put_contents($usersFilePath, json_encode($users));
}

function updateUser($user){
    $users = getAllUsers();
    if (array_key_exists($user['username'], $users)) {
        $users[$user['username']] = $user;
        global $usersFilePath;
        file_put_contents($usersFilePath, json_encode($users));
        return true;
    }
    return false;
}

function deleteUser($name)
{
    global $usersFilePath;
    $users = getAllUsers();
    if (array_key_exists($name, $users))
    {
        unset($users[$name]);
        file_put_contents($usersFilePath, json_encode($users));
        return true;
    }
    return false;
}

?>