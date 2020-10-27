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
                </div>
            </div>
        </div>
        <div class="container pull-up">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Single post-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="media">
                                <div class="avatar mr-3 my-auto  avatar-xs">
                                    <img src="{{ asset('assets/img/users/user-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body m-auto">
                                    <h5 class="m-0"> Sarah shared a photo </h5>
                                    <div class="opacity-75 text-muted">6hrs ago</div>
                                </div>
                            </div>

                            <div class="card-controls">
                                <a href="#!" class="">
                                    <i class="mdi  mdi-settings"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-raw">


                        </div>
                        <div class="card-body">
                            <div class="p-b-10 text-center">
                                <img class="rounded" src="{{ asset('assets/img/social/s1.png') }}" alt="">
                            </div>
                            <p>
                                Here’s another illustration and design that I said before,
                                you can see the background of space, flying doctors and patients, plants, and other
                                things.
                                it's very interesting concept that I ever made, and I really
                                enjoy the result, I hope you guys enjoy it as well, thanks! ^^

                            </p>

                            <p class="mb-4">
                                What do you y'all think? Would love some feedback from <a href="#!"
                                                                                          class="badge badge-soft-primary">@Marinela</a>
                                or <a href="#!" class="badge badge-soft-primary">@Demkó</a>?
                            </p>

                            <div class="row">
                                <div class="col">
                                    <div class="opacity-75">
                                        <a href="#!" class="m-r-5">
                                            <i class="mdi mdi-heart-outline mdi-24px"></i>
                                        </a>
                                        <a href="#!" class="m-r-5">
                                            <i class="mdi mdi-message-outline mdi-24px"></i>
                                        </a>
                                        <a href="#!" class="m-r-5">
                                            <i class="mdi mdi-share-outline mdi-24px"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    <a href="#"
                                       class="mdi mr-2 mdi-24px mdi-bookmark-outline opacity-75 align-middle"></a>
                                    <div class="avatar-group">
                                        <div class="avatar avatar-xs">
                                            <img src="{{ asset('assets/img/users/user-2.jpg') }}" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <img src="{{ asset('assets/img/users/user-3.jpg') }}" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title rounded-circle">AB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <div class="list-unstyled">
                                    <div class="media">
                                        <div class="avatar mr-3  avatar-sm">
                                            <img src="{{ asset('assets/img/users/user-1.jpg') }}" alt="..."  class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1"> Semiha Yerman <span class="text-muted ml-3 small">2hrs ago</span>
                                            </h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus et
                                                id iusto maiores natus, placeat. Aspernatur consequatur culpa
                                                dignissimos dolor eligendi explicabo, nemo neque odit officiis provident
                                                quo reprehenderit veniam?

                                            </p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="avatar mr-3  avatar-sm">
                                            <img src="{{ asset('assets/img/users/user-2.jpg') }}" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1"> Severín Chovanec <span class="text-muted ml-3 small">3hrs ago</span>
                                            </h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                                                consequatur dicta dignissimos dolore earum explicabo, facilis id
                                                incidunt ipsam magni nobis odit quasi quia quo recusandae reprehenderit
                                                ut veritatis vitae!

                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
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

                    <!-- Single post-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="media">
                                <div class="avatar mr-3 my-auto  avatar-xs">
                                    <img src="{{ asset('assets/img/users/user-4.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body m-auto">
                                    <h5 class="m-0"> William shared a photo </h5>
                                    <div class="opacity-75 text-muted">10hrs ago</div>
                                </div>
                            </div>

                            <div class="card-controls">
                                <a href="#!" class="">
                                    <i class="mdi  mdi-settings"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-raw">


                        </div>
                        <div class="card-body">
                            <div class="p-b-10 text-center">
                                <img class="rounded" src="{{ asset('assets/img/social/s2.png') }}" alt="">
                            </div>
                            <p>
                                Been thinking about many things recently. Sometimes you think if you could do some sort
                                of time-traveling, what would I do? What wouldn't I do at all?

                                Then you say, whatever. Live in the moment and stop regretting anything. Afterall, we
                                always got tomorrow.

                                Enjoy your Sunday :) 🍭


                            </p>


                            <div class="row">
                                <div class="col">
                                    <div class="opacity-75">
                                        <a href="#!" class="m-r-5">
                                            <i class="mdi mdi-heart-outline mdi-24px"></i>
                                        </a>
                                        <a href="#!" class="m-r-5">
                                            <i class="mdi mdi-message-outline mdi-24px"></i>
                                        </a>
                                        <a href="#!" class="m-r-5">
                                            <i class="mdi mdi-share-outline mdi-24px"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    <a href="#"
                                       class="mdi mr-2 mdi-24px mdi-bookmark-outline opacity-75 align-middle"></a>
                                    <div class="avatar-group">
                                        <div class="avatar avatar-xs">
                                            <img src="{{ asset('assets/img/users/user-6.jpg') }}" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <img src="{{ asset('assets/img/users/user-4.jpg') }}" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title rounded-circle bg-danger">P</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <ul class="list-unstyled">
                                    <li class="media">
                                        <div class="avatar mr-3  avatar-sm">
                                            <img src="{{ asset('assets/img/users/user-2.jpg') }}" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1"> Felipe Valdés <span class="text-muted ml-3 small">2hrs ago</span>
                                            </h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus et
                                                id iusto maiores natus, placeat. Aspernatur consequatur culpa
                                                dignissimos dolor eligendi explicabo, nemo neque odit officiis provident
                                                quo reprehenderit veniam?

                                            </p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="avatar mr-3  avatar-sm">
                                            <img src="{{ asset('assets/img/users/user-7.jpg') }}" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Lucy Davies <span class="text-muted ml-3 small">3hrs ago</span>
                                            </h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                                                consequatur dicta dignissimos dolore earum explicabo, facilis id
                                                incidunt ipsam magni nobis odit quasi quia quo recusandae reprehenderit
                                                ut veritatis vitae!

                                            </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
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

                    <!-- Single post-->
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="media">
                                <div class="avatar mr-3 my-auto  avatar-xs">
                                    <img src="{{ asset('assets/img/users/user-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                </div>
                                <div class="media-body m-auto">
                                    <h5 class="m-0"> Sarah shared a photo </h5>
                                    <div class="opacity-75 text-muted">6hrs ago</div>
                                </div>
                            </div>

                            <div class="card-controls">
                                <a href="#!" class="">
                                    <i class="mdi  mdi-settings"></i>
                                </a>
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon mdi  mdi-dots-vertical"></i> </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-raw">


                        </div>
                        <div class="card-body">
                            <div class="p-b-10 text-center">
                                <img class="rounded" src="{{ asset('assets/img/social/s3.png') }}" alt="">
                            </div>
                            <p>
                                We really wanted Ollie to standout on the shelves, and we knew that the packaging would
                                be three boxes across. A simple scene of people sharing coffee felt like an appropriate
                                direction for Ollie, and compared to its competitors, the final product definitely
                                demands a presence.


                            </p>


                            <div class="row">
                                <div class="col">
                                    <div class="opacity-75">
                                        <a href="#!" class="m-r-5">
                                            <i class="mdi mdi-heart-outline mdi-24px"></i>
                                        </a>
                                        <a href="#!" class="m-r-5">
                                            <i class="mdi mdi-message-outline mdi-24px"></i>
                                        </a>
                                        <a href="#!" class="m-r-5">
                                            <i class="mdi mdi-share-outline mdi-24px"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    <a href="#"
                                       class="mdi mr-2 mdi-24px mdi-bookmark-outline opacity-75 align-middle"></a>
                                    <div class="avatar-group">
                                        <div class="avatar avatar-xs">
                                            <img src="{{ asset('assets/img/users/user-1.jpg') }}" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <img src="{{ asset('assets/img/users/user-9.jpg') }}" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <span class="avatar-title rounded-circle bg-dark">CK</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <ul class="list-unstyled">
                                    <li class="media">
                                        <div class="avatar mr-3  avatar-sm">
                                            <img src="{{ asset('assets/img/users/user-7.jpg') }}" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Lucy Davies <span class="text-muted ml-3 small">3hrs ago</span>
                                            </h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                                dolorum esse, et harum ipsa molestiae quasi rerum saepe sapiente
                                                temporibus? Consectetur cum delectus minus neque numquam officia
                                                perspiciatis qui quod!

                                            </p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="avatar mr-3  avatar-sm">
                                            <img src="{{ asset('assets/img/users/user-2.jpg') }}" alt="..."
                                                 class="avatar-img rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1"> Severín Chovanec <span class="text-muted ml-3 small">3hrs ago</span>
                                            </h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis
                                                excepturi ipsum iste nulla quisquam? Alias amet aut doloribus, ducimus
                                                eligendi eos inventore laboriosam laudantium molestiae odio perferendis
                                                soluta, tempore veniam.
                                            </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
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

                </div>
            </div>
        </div>
    </section>
</main>

@include('layouts.footer')
