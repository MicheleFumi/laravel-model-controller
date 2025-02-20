@php
    function ratingStars($vote)
    {
        $roundedVote = round($vote);

        $fullStar = '<i class="fa fa-star"></i>';
        $empty = '<i class="fa fa-star-o"></i>';
        $result = '';
        for ($i = 1; $i <= $roundedVote; $i++) {
            if ($i <= $roundedVote) {
                $result .= $fullStar;
            } else {
                $result .= $empty;
            }
        }

        return $result;
    }

@endphp


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @vite(['resources/js/app.js'])

</head>

<body>
    <header>
        <div class="bg-primary p-3 text-white">
            <div class="container">
                <h1>Fresh Tomato</h1>
            </div>


        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col col-4 g-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ $movie['title'] }}</h4>
                                <p class="card-text text-muted">({{ $movie['original_title'] }})</p>

                                <div class="card-desc mt-4">
                                    <p class="card-text text-muted">({{ $movie['nationality'] }})</p>
                                    <p class="card-text text-muted">({{ $movie['date'] }})</p>
                                </div>
                                <div class="card-vote mt-3">

                                    <p class="card-text text-muted">
                                        {!! ratingStars($movie['vote']) !!}

                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>





    </main>
    <footer>

    </footer>

</body>

</html>
