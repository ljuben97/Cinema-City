<html>
@include('partials.head')
<body>
@include('partials.navbar')
<br/>
<section class="container">
    <div style="width: 45%; float:left;">

        <h2>{{$movie->name}}</h2>

        <img src="{{$movie->imageLink}}" />
        <br/>
        <br/>
        <h3>Directed By: {{$movie->director}}</h3>
        <br/>
        <h3>Year released: {{$movie->year}}</h3>

        <p style="width:70%">{{$movie->description}}</p>

    </div>

    <div style="width:45%; float: left">
        <br/><br/>
        <div class="container">
            <?php $count=0;?>
            @if($movie->theaters!=[])
                @foreach ($movie->theaters as $theater)
                    @if(!$count%2)
                        <div class="row">
                            @endif

                            <div class="col-md-6">
                                <div class="card">
                                    <img class="card-img-top" style="width: 100%" src="{{$theater->imageLink}}" alt="Card image cap">
                                    <div class="card-body">
                                        <br/>
                                        <h5 class="card-title">{{$theater->name}}</h5>

                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary" onclick="window.location.href = '/Cinema/public/theater/{{$theater->id}}';">Read More</button>
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
