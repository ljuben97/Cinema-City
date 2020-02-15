<html>
@include('partials.head')
<body>
@include('partials.navbar')
<div class="container">
    <?php $count=0; ?>
    <br/>
    @foreach($movies as $movie)
        @if($count%4==0)
            <div class="row">
        @endif
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" style="width: 100%" src="{{$movie->imageLink}}" alt="Card image cap">
                        <div class="card-body">
                            <br/>
                            <h5 class="card-title">{{$movie->name}}</h5>
                            <h6 class="card-title">Directed By: {{$movie->director}}</h6>
                            <h6 class="card-title">Year Release: {{$movie->year}}</h6>
                            <p class="card-text">{{substr($movie->description, 0, 100)}}...</p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" onclick="window.location.href = '/Cinema/public/movie/{{$movie->id}}';">Read More</button>
                        </div>
                    </div>
                </div>
                @if($count%4==3)
            </div>
            <br/>
        @endif
        <?php $count++?>
    @endforeach
</div>
</body>
</html>
