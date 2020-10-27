@include('layouts.header')

<main class="admin">
<section class="admin-content">
        <div class="bg-dark m-b-30">
            <div class="container">
                <div class="row p-b-60 p-t-60">

                    <div class="col-md-6 text-white p-b-30">
                        <div class="media">
                            <div class="media-body m-auto">
                                <h1 class="mt-0">Comment Guest</h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container pull-up">
            <div class="row">

                <div class="col-md-12 m-b-30">
                    <div class="card ">
                        <div class="card-header border-bottom">
                            <div class="row text-muted  no-gutters align-items-center">
                                <div class="col ">
                                  Top  Comments
                                </div>
                                <div class="col-4 d-none d-md-block text-muted">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-12">Username</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid">
                            @foreach ($comment_guest as $guest)

                                <!--comment-guest-->
                                <div class="row p-t-10 p-b-10  align-items-center border-bottom">
                                    <div class="col">
                                        @if($guest->comment == null)
                                            <a href="#" class="text-big">No Comment</a>
                                        @else
                                            <a href="#" class="text-big">{{ $guest->comment }}</a>
                                        @endif
                                    </div>
                                    <div class="d-none d-md-block col-4">

                                        <div class="row no-gutters align-items-center">
                                            <div class="media col-12 align-items-center">
                                                <div class="avatar avatar">
                                                    <img src="assets/img/users/user-5.jpg" alt="..."
                                                        class="avatar-img rounded-circle">
                                                </div>
                                                <div class="media-body  ml-2">
                                                    <div class=" text-truncate">{{ $guest->name }}</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--end comment-guest-->
                            @endforeach

                        </div>

                   </div>
                </div>

            </div>
        </div>
    </section>
</main>

@include('layouts.footer')
