{{--
./resources/views/template/partials/_header.blade.php
--}}


<main>
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                      @yield('content')
                    </div>
                </div>
                @include('template.partials._aside')
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
</main>
