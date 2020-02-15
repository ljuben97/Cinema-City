<html>
@include('partials.head')
<body>
@include('partials.navbar')
<br/>
<br/>
<section class="container">
    <div style="width: 45%; float:left;">

        <h2>{{$theater->name}}</h2>

        <img src="{{$theater->imageLink}}" style="width: 50%" />

        <h3>Year released: {{$theater->year}}</h3>

        <br/>
        <button class="btn btn-primary" onclick="window.location.href = '/Cinema/public/theater/addMovie/{{$theater->id}}';">Add a Movie</button>

        <p style="width:70%">{{$theater->description}}</p>


    </div>

    <div style="width:45%; float: left">
        <div class="container">
            <h2>Movies in this Theater:</h2>
            <?php $count=0;?>
            @if($theater->movies!=[])
                @foreach ($theater->movies as $movie)
                    @if(!$count%2)
                        <div class="row">
                            @endif

                            <div class="col-md-6">
                                <div class="card">
                                    <img class="card-img-top" style="width: 100%" src="{{$movie->imageLink}}" alt="Card image cap">
                                    <div class="card-body">
                                        <br/>
                                        <h5 class="card-title">{{$movie->name}}</h5>

                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary" onclick="window.location.href = '/Cinema/public/theater/buyTickets/{{$theater->id}}-{{$movie->id}}';">Buy Tickets</button>
                                    </div>
                                </div>
                            </div>
                            @if($count%2)
                        </div>
                        <br/>
                    @endif
                    <?php $count++?>
                @endforeach
                @endif
        </div>
    </div>
</section>

</body>
</html>
