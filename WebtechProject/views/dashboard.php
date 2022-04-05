<?php
    session_start();
    if (!isset($_SESSION['current_user']))
        header('location: ../auth/login.php');
    $title = 'Dashboard';
    require_once '../components/header.php';
    require_once '../model//userDataHandle.php';
    require_once '../model/postDataHandle.php';
    $user = getUser($_SESSION['current_user']);
    $users = getAllUsers();
    $posts = getAllPosts($user['username']);
?>
<style>
    .post {
        background-color: grey;
        padding: 5px;
        margin: 2px;
    }
</style>
<body>
    <h1>Wellcome Back <a href="profile.php?username=<?php echo $user['username'] ?>"><?php echo $user['username'] ?></a></h1>
    <table>
        <tr>
            <td>
                <?php require_once '../components/navlinks.php' ?>
            </td>
            <td>
                <form action="../others/handlePost.php" method="post" enctype="multipart/form-data">
                    <textarea  name="postDesc" placeholder="Write Something..." cols="30" rows="10"></textarea>
                    <br>
                    <input type="file" name="postImg" id="postImg">
                    <br>
                    <button type="submit">Post</button>
                </form>
            </td>
            <td>
                <p>Other Users:</p>
                <ul>
                    <?php
                        foreach ($users as $username => $usr) {
                            if ($username !== $user['username']) {
                                echo "<li><a href=\"profile.php?username={$username}\">{$username}</a></li>";
                            }
                        }
                    ?>
                </ul>
            </td>
        </tr>
        <?php
            if (!count($posts))
                echo '<tr><td></td><td> No posts for user yest </td><td></td></tr>';
            else {
                foreach ($posts as $postId => $post) {
                    if (!isset($post['img']))
                        echo "<tr><td></td><td class=\"post\"> By: {$post['publisher']}<br>
                    {$post['desc']} </td><td></td></tr>";
                    else
                        echo "<tr><td></td><td class=\"post\"> By: {$post['publisher']}<br>
                    {$post['desc']}<br>
                    <img src=\"../assets/{$post['img']}\" alt=\"{$post['img']}\" width=\"200\" height=\"300\"> </td><td></td></tr>";
                }
            }
        ?>
        <tr></tr>
    </table>
</body>
</html>