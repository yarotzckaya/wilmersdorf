<!DOCTYPE html>
<html lang="en">

@include('user.layouts.head')

<body>

<!-- Navigation -->
@include('user.layouts.nav')
<!-- Page Header -->
<header class="masthead" style="background-image: url({{ $post->image }})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{!! $post->title !!}</h1><br>
                    <span class="meta">Posted by
                {{ 'Yarotska Yuliana' }}
                on {{ $post->created_at }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row"><small>category:</small>&nbsp;
            <span>{{ $cat_id }}</span>
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>
                    {!! $post->body !!}
              </p>
            </div>
        </div>
    </div>
</article>

<hr>

<!-- Footer -->
@include('user.layouts.footer')

@include('user.layouts.scripts')
</body>

</html>
