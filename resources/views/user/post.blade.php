<!DOCTYPE html>
<html lang="en">

@include('user.layouts.head')

<body>

<!-- Navigation -->
@include('user.layouts.nav')
<!-- Page Header -->
{{--<header class="masthead" style="background-image: url("{{ url('/public/storage/posts/January2018/'.$post->image) }}")">--}}
@if($post->image !== null)
<header class="masthead" style="background-image: url('{{ asset('storage/'.$post->image) }}')">
    @else
        <header class="masthead" style="background-image: url('{{ asset('user/img/default-post.jpg') }}')">
@endif

        <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{!! $post->title !!}</h1><br>
                    <small class="meta">Posted by
                        {{ 'Yarotska Yuliana' }}
                        on {{ date('d.m.Y', strtotime($post->created_at))}}</small>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row"><small>category:</small>&nbsp;
            <span>{{ $cat_id }}</span><br>

            <div class="col-lg-8 col-md-10 mx-auto">

                <p>
                    {!! $post->body !!}
              </p>
            </div>
        </div>
    </div>

    <div class="col-lg-5 col-md-6 mx-auto">
    <strong>Ваш комментарий:</strong><br>
    <form action="{{ url('comment') }}" method="POST" name="sentMessage" id="contactForm" novalidate>
        {{ csrf_field() }}
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Имя</label>
                <input type="text" class="form-control" placeholder="Имя" id="username" name="username" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <input type="hidden" name="post_id" value="{{$post->id}}">
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Комментарий</label>
                <textarea rows="5" class="form-control" placeholder="Teкст..." id="body" name="body" required data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <br>
        <div id="success"></div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Отправить</button>
            @include('user.layouts.errors')
        </div>


    </form>
        <div class="d-block col-lg-12 col-md-10 mx-auto" style="margin: 20px 20px 20px 20px; padding: 20px 20px 20px 20px; ">
            <?php $comments = App\Comment::where('post_id', '=', $post->id)->orderBy('id', 'DESC')->get(); ?>
            @foreach($comments as $comment)
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <p> <div class="form-control">{{ $comment->username }} <br>
                                <small>{{ $comment->email }}</small><br><br>
                                {{ $comment->body }}
                            </div>
                           </p>

                        </div>
                    </div>

            @endforeach
        </div>
    </div>

</article>

<hr>

<!-- Footer -->
@include('user.layouts.footer')

@include('user.layouts.scripts')
</body>

</html>
