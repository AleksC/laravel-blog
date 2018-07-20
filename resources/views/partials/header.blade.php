<div class="blog-masthead">
    <div class="container">
      <nav class="nav blog-nav">
        <a class="nav-link" href="/">Home</a>
        @if(auth()->check())
        <a class="nav-link ml-auto" href="#">{{ auth()->user()->name }}</a>
        <a class="nav-link" href="/logout">Logout</a>
        @else
        <a class="nav-link ml-auto" href="/login">Login</a>
        <a class="nav-link" href="/register">Register</a>
        @endif
      </nav>
    </div>
  </div>
  <!--header-->

<div class="blog-header">
    <div class="container">
    <h1 class="blog-title">The Blog Site</h1>
    <p class="lead blog-description">A blog about writing blog posts. Or blogs. For blogging.</p>
    </div>
</div>