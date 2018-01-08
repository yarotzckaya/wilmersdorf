<!DOCTYPE html>
<html lang="en">

@include('user.layouts.head')

<body>

<!-- Navigation -->
@include('user.layouts.nav')
<!-- Page Header -->
@include('user.layouts.header')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <?php $posts = \Illuminate\Support\Facades\DB::table('posts')->orderBy('created_at', 'desc')->paginate(2) ?>
                @foreach($posts as $post)
                <a href="{{ url('post/'.$post->id) }}">
                    <h2 class="post-title">{{ $post->title }}</h2>
                    <h3 class="post-subtitle"><small> {!! str_limit($post->body, 100, '...') !!}</small>

                    </h3>
                </a>
                <p class="post-meta"><small>Posted by Yarotska Yuliana
                        on {{ $post->created_at }}</small></p>
                    @endforeach
            </div>
            <hr>


            <hr>
            <!-- Pager -->
            <div class="clearfix" style=".li {

                background-color: red;
            }">
                {{ $posts->links() }}
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
@include('user.layouts.footer')

@include('user.layouts.scripts')
</body>

</html>
