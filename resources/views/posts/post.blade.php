<div class="post-preview">
    <a href="posts/{{ $post->url_title }}">
        <h2 class="post-title">
            {{ $post->title }}
        </h2>
        <h3 class="post-subtitle">
            {{ $post->subtitle }}
        </h3>
    </a>
    <p class="post-meta">Posted by <strong>{{ $post->user->name }}</strong> on 
        {{ $post->created_at->format("jS F, Y") }}</p>
</div>
<hr>