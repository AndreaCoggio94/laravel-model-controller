<div class="card" >
    
    <div class="card-body">
      <h5 class="card-title">{{ $movie->title }}</h5>
      <h6 class="card-title">{{ $movie->original_title }}</h6>
      <p class="card-text">Nationality: {{ $movie->nationality }}</p>
      <p class="card-text">Release Date: {{ $movie->date }}</p>
      <p class="card-text">Average Vote: {{ $movie->vote }}</p>
      
    </div>
  </div>