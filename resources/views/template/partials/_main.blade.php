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
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" style="width: auto; padding: 0 1em;">More posts</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                @include('template.partials._aside')
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
</main>
