@php
    function ratingStars($vote)
    {
        $roundedVote = round($vote);

        $fullStar = '<i class="fa fa-star"></i>';
        $empty = '<i class="fa-regular fa-star"></i>';
        $result = '';
        for ($i = 0; $i < 10; $i++) {
            if ($i < $roundedVote) {
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

                                    <p class="card-text text-warning">
                                        {!! ratingStars($movie['vote']) . ' ' . " ($movie[vote])" !!}

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
<script></script>
