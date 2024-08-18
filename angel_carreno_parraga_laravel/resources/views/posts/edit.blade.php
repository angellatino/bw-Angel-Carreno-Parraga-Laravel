<!DOCTYPE html>
<html>
<head>
    <title>Edit Rumor</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Edit Rumor</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype
