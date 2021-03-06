<!DOCTYPE html>
<html lang="en">

@include('user.layouts.head')

<body>

<!-- Navigation -->
@include('user.layouts.nav')
<!-- Page Header -->
<header class="masthead" style="background-image: url({{ asset('user/img/contact-bg.jpg') }})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{!! 'Contacts' !!}</h1><br>


                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <p>
        {{ 'Если вдруг вы задумали со мной пообщаться - пишите на скайп, на почту или звоните кому-нибудь из моих друзей.' }}
           <h3>Skype:</h3>  yarotzckaya.yuliana<br>
           <h3>Email:</h3>  yarotzckaya.yuliana@yandex.ua<br>

        </p>

    </div>
</article>

<hr>

<!-- Footer -->
@include('user.layouts.footer')

@include('user.layouts.scripts')
</body>

</html>
