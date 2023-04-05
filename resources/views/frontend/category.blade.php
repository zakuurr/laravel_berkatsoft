<!-- <div class="container overflow-hidden text-center ">
    <div class="row gy-5">
      @foreach ($responseBody->results as $item)
      <div class="col-md-4">
        <a class=" btn-block text-decoration-none" onclick="getDetailMovie({{ $item->id }})" data-bs-toggle="modal" data-bs-target="#exampleModalContent">
            <div class="card " style="">
                <img src="https://image.tmdb.org/t/p/w500{{ $item->backdrop_path }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-white">{{ $item->original_title }}</h5>
                </div>
             </div>
        </a>
      </div>
          
      @endforeach
    </div>
</div> -->


@foreach ($responseBody->results as $item)
              <div class="movie-card">

              <a class=" btn-block text-decoration-none" onclick="getDetailMovie({{ $item->id }})" data-bs-toggle="modal" data-bs-target="#exampleModalContent">
                  <figure class="card-banner">
                  <img src="https://image.tmdb.org/t/p/w500{{ $item->backdrop_path }}" class="card-img-top" alt="...">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="./movie-details.html">
                 
                    <h3 class="card-title">{{ $item->original_title }}</h3>
                  </a>

                  <time datetime="2022">{{ $item->release_date }}</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT122M">122 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>{{ $item->vote_average}}</data>
                  </div>
                </div>

              </div>
              @endforeach


