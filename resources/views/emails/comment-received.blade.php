Hello, {{ $post->user->name }}!
<br>
You have a new comment on your <a href="{{ url('posts/'.$post->id) }}">{{ $post->title }}</a> post.
<br>
Commenter {{ $comment->author }} says: 
<br>
<p>
    {{ $comment->text }}
</p>