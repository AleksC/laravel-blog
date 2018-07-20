
<div class="blog-post">
    <form action={{ route('create-comment', ['post' => $post]) }} method='POST'>

    {{ csrf_field() }}
    

    <h5> Post comment: </h5>
    <div class="form-group">
        <label for="text">Author: </label>
        <input type="text" class="form-control" id="author" name="author" placeholder="Your name">
    </div>
    @include('partials.error-message', ['fieldName' => 'author'])
    <div class="form-group">
        <label for="text">Your comment: </label>
        <textarea class="form-control" name="text" id="text" placeholder="Type your thoughts and opinions here..." rows=10 ></textarea>
    </div>
    @include('partials.error-message', ['fieldName' => 'text'])
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
