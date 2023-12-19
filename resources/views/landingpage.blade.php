<x-unauth-layout>
    <link href="./css/styles.css" rel="stylesheet" />
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Harmens haarlijn corp.</div>
            <div class="masthead-heading text-uppercase">Cheesed to meet you</div>
        </div>
    </header>
    <!-- Portfolio Grids-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Portfolio</h2>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-pf col-sm-6 mb-4">
                        <!-- Portfolio items-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#modalid{{ $post->id }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid w-100" src="./img/harmen.jpg" alt="..."/>
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $post->title }}</div>
                                <div class="portfolio-caption-subheading text-muted">{{ $post->body }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="./img/team/adam.png" alt="..."/>
                        <h4>Adam</h4>
                        <p class="text-muted">Back-End Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Adam Twitter Profile"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Adam Facebook Profile"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Adam LinkedIn Profile"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="./img/team/benjamin.png" alt="..."/>
                        <h4>Benjamin</h4>
                        <p class="text-muted">Back-End Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Benjamin Twitter Profile"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Benjamin Facebook Profile"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Benjamin LinkedIn Profile"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="./img/team/elise.jpg" alt="..."/>
                        <h4>Elise</h4>
                        <p class="text-muted">Front-End Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Elise Twitter Profile"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Elise Facebook Profile"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Elise LinkedIn Profile"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="./img/team/jonah.png" alt="..."/>
                        <h4>Jonah</h4>
                        <p class="text-muted">Presenter</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Jonah Twitter Profile"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Jonah Facebook Profile"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Jonah LinkedIn Profile"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    @foreach ($posts as $post)
        <div class="portfolio-modal modal fade" id="modalid{{ $post->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="./img/close-icon.svg" alt="Close modal"/>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">{{ $post->title }}</p>
                                    <img class="img-fluid d-block mx-auto" src="./img/harmen.jpg" alt="..."/>
                                    <p>{{ $post->body }}</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                            type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-unauth-layout>
