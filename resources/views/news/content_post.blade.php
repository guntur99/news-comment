@include('layouts.header')

<main class="admin">
<section class="admin-content">
        <div class="bg-dark m-b-30">
            <div class="container">
                <div class="row p-b-60 p-t-60">

                    <div class="col-md-6 text-white p-b-30">
                        <div class="media">
                            <div class="media-body m-auto">
                                <h1 class="mt-0">Content Post <img src="https://twemoji.maxcdn.com/2/72x72/1f397.png"
                                                                      width="20" alt=""></h1>
                            </div>
                        </div>
                    </div>

                    @include('news.menu')
                </div>
            </div>
        </div>

        <div class="container pull-up">
            <div class="row">
                <div class="col-lg-12">
                    <!--List post-->
                    @foreach ($content_post as $post)
                        <div class="card m-b-30">
                            <div class="card-header">
                                <div class="media">
                                    <div class="avatar mr-3 my-auto  avatar-xs">
                                        <img src="{{ asset('assets/img/users/user-2.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                    <div class="media-body m-auto">
                                        <h5 class="m-0">{{ $post->name }}</h5>
                                        <div class="opacity-75 text-muted">{{ $post->email }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="rounded" src="{{ asset('assets/img/social/s1.png') }}" alt="">
                                </div>
                                <p class="p-b-20">{!! $post->content !!}</p>

                                <hr>
                                <div class="row align-items-start">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img src="{{ asset('assets/img/users/user-3.jpg') }}" alt="..."
                                                class="avatar-img rounded-circle">
                                        </div>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Input -->
                                        <form>
                                            <label class="sr-only">Leave a comment...</label>
                                            <textarea class="form-control" placeholder="Leave a comment"
                                                    rows="2"></textarea>
                                        </form>

                                    </div>
                                </div> <!-- / .row -->

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</main>

@include('layouts.footer')
