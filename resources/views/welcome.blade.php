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
                <?php $posts = \Illuminate\Support\Facades\DB::table('posts')->where('status', '=', 'PUBLISHED')->orderBy('created_at', 'desc')->simplePaginate(10) ?>
                @foreach($posts as $post)
                <a href="{{ url('post/'.$post->id) }}">
                    <h2 class="post-title">{{ $post->title }}</h2></a>
                    <h3 class="post-subtitle"><small style="font-family: 'Noto Sans Hanunoo'; font-size: 18px; line-height: 1;"> {!! str_limit($post->body, 150, '...') !!}</small></h3>

                <p class="post-meta"><small>Posted by Yarotska Yuliana

                        on {{ date('d.m.Y', strtotime($post->created_at)) }}</small></p><br>
                    @endforeach
            </div>
            <hr>


            <hr>
            <!-- Pager -->
            <div class="clearfix">
                <div class="pager">
                    &nbsp; {{ $posts->links('vendor.pagination.simple-bootstrap-4') }}
                </div>
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
