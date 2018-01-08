<!DOCTYPE html>
<html lang="en">

@include('user.layouts.head')

<body>

<!-- Navigation -->
@include('user.layouts.nav')
<!-- Page Header -->
<header class="masthead" style="background-image: url({{ asset('user/img/about-bg.jpg') }})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{!! 'About me' !!}</h1><br>

                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">

            <div class="col-lg-8 col-md-10 mx-auto">
                <p>
                {{'Телевизор не смотрю. Газет не читаю. Телефоном не пользуюсь. Питаюсь преимущественно тем, что можно заказать в Salateira.
                (Это не реклама). Инстаграм не веду. Зарабатываю на жизнь веб-разработкой. На досуге читаю книги, о которых потом пишу в блог.
                Иногда смотрю видео на ютубчике, о которых тоже пишу в блог.
                 Иногда езжу во всякие дальние страны, о которых тоже пишу в блог.
                 Дневников не веду - потому, что есть блог.
                 Люблю, когда к моим постам оставляют комментарии. '}}
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
