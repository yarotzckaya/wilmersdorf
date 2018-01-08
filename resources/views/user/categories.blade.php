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
        <div class="col-lg-10 col-md-10 mx-auto">
            <div class="post-preview">
                @foreach($categories as $category)
                    <a href="{{ url('category/'.$category->id) }}">
                        <h2 class="post-title">{{ $category->name }}</h2>
                    </a>

                    <?php
                    $posts_cat = \Illuminate\Support\Facades\DB::table('posts')->where('category_id', '=', $category->id)->take(10)->get();?>
                <ul>
                    @if($posts_cat != "[]")

                    @foreach ($posts_cat as $post)
                       <li><small><a href="{{ url('post/'.$post->id) }}"> {{ $post->title }}</a></small></li>
                    @endforeach{{ "..." }}
                        @else
                        <p style="color: grey">Здесь пока пусто.</p>

                    @endif
                </ul>


                @endforeach

            </div>
            <hr>


            <hr>
            <!-- Pager -->
            <div class="clearfix">
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