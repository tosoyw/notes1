<?php
// $_GET and $_POST are super global variables in PHP.
// These let you retrieve information sent by the client.
// It allows data to persist between pages/ a single session.

// The main difference $_GET and $_POST is that $_GET appends the URL with a "?parameter=value".
// If you are to send a sensitive data to the server, $_GET is not recommended.
// You can use $_POST instead and just use $_GET for non-sensitive data. (e.g. "sort=ascending").
$tasks = ['Get Git', 'Bake HTML', 'Eat JavaScript', 'Learn PHP'];
if (isset($_GET['index'])) {
    $indexGet = $_GET['index'];
    echo "The retrieve task from GET is $tasks[$indexGet]";
}
if (isset($_POST['index'])) {
    $indexPost = $_POST['index'];
    echo "The retrieved task from POST is $tasks[$indexPost]";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>S05: Client-Server Communication (GET and POST)</title>
</head>

<body>
    <h1>Task index from GET</h1>
    <form method="GET">
        <select name="index" required>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <button type="submit">GET</button>
    </form>

    <h1>Task index from POST</h1>
    <form method="POST">
        <select name="index" required>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <button type="submit">POST</button>
    </form>
</body>

</html>