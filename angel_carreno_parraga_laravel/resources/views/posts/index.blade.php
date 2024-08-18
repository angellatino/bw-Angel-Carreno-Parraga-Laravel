<!DOCTYPE html>
<html>
<head>
    <title>Football Transfer Rumors</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Football Transfer Rumors</h1>
        @auth
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New Rumor</a>
        @endauth
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card">
                        @if ($post->cover_image)
                            <img src="{{ asset('storage/' . $post->cover_image) }}" class="card-img-top" alt="{{ $post->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
