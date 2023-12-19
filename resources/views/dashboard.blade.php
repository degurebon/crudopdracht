<x-app-layout>
    <link href="./css/styles.css" rel="stylesheet" />
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Dashboard</h2>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                <a class="btn btn-sm btn-success mb-5" href="{{ route('posts.create') }}">Add Post</a>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-pf col-sm-6 mb-4">
                        <!-- Portfolio items-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="./img/harmen.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $post->title }}</div>
                                <div class="portfolio-caption-subheading text-muted">{{ $post->body }}</div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                        <div class="col-sm">
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
