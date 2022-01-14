<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Home Page </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</head>

<body>
    {{-- navbar start Here !! --}}
    <nav class="navbar navbar-expand-md  text-light shadow-sm sticky-top " style="background-color: #1abc9c">
        <div class="container">
            <a class="navbar-brand text-light" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler text-dark bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

            </div>
        </div>
    </nav>

    {{-- navbar end Here !! --}}

    {{-- main body Section start here !! --}}

    <section>
        <div class="container mt-3">
            {{-- Message form Controller Start here !! --}}
                     @if (Session::has('message'))
                         <p class="alert alert-success">{{ Session('message') }}</p>
                     @endif
                     @if (Session::has('err'))
                         <p class="alert alert-danger">{{ Session('err') }}</p>
                     @endif
            {{-- Message form Controller Ends here !! --}}

            <div class="col-sm-12 mx-auto">
                <div class="row ">
                    <div class="col-4 mx-auto">

                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action bg-dark text-center text-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                    class="bi bi-shop text-light" viewBox="0 0 16 16">
                                    <path
                                        d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                </svg>
                                <span class="ms-2">
                                    {{ config('app.name', 'Laravel') }}
                                </span>
                            </a>
                            <a href="{{ route('home') }}" class="list-group-item list-group-item-action p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                    class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                </svg>
                                <span class="ms-3"> Add Shop</span>
                            </a>
                            <a href="{{ route('shops') }}" class="list-group-item list-group-item-action active p-4 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                                <span class="ms-3">
                                    View
                                    Shop
                                </span>
                            </a>

                        </div>

                    </div>
                    <div class="col-8 mx-auto">
                        <div class="row">
                            <div class="col-12">
                                <div class="card shadow">
                                    <div class="card-header text-center bg-primary text-light"> Search Here</div>
                                    <div class="card-body">
                                        <form action="{{ route('search.rating') }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-5 mb-1">
                                                    <input type="text" name="search" class="form-control"
                                                        placeholder="Search By Shop Name ....">
                                                </div>
                                                <div class="col-sm-5 mb-1">
                                                    <input type="text" name="search_cat" class="form-control"
                                                        placeholder="Search By Cateogry Name....">
                                                </div>

                                                <div class="col-sm-2">
                                                    <input type="submit" name="send"
                                                        class="form-control btn btn-outline-success" value="Search">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="card shadow">
                                    <div class="card-header text-center bg-primary text-light"> Shop List</div>
                                    <div class="card-body">
                                        @foreach ($shops as $shop)

                                            <div class="row mb-4">
                                                <div class="col-12 mx-auto">
                                                    <div class="card shadow">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-1">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40"
                                                                        height="40" fill="currentColor"
                                                                        class="bi bi-shop text-primary"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <span>
                                                                        <p class="text-lead">
                                                                            <b>{{ $shop->name }}
                                                                            </b>
                                                                        </p>

                                                                        <small> {{ $shop->cat_name }}</small>
                                                                    </span>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    {{-- here shop_rating is global function declared in app\help\helper.php and returning avg of rating of particular shop --}}
                                                                    @php
                                                                        $current = shop_rating($shop->id);
                                                                        $total = 5;
                                                                        $remain = $total - $current;
                                                                    @endphp
                                                                    {{-- Average Number of Rating out of Five --}}
                                                                    @for ($i = 0; $i < $current; $i++)
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor"
                                                                            class="bi bi-star-fill text-primary"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                        </svg>
                                                                    @endfor
                                                                    {{-- Reamaing Number of Rating out of Average --}}
                                                                    @for ($i = 0; $i < $remain; $i++)
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16" fill="currentColor "
                                                                            class="bi bi-star text-primary"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                                        </svg>
                                                                    @endfor
                                                                    <br>
                                                                    <small> <strong>(Number of ratings :
                                                                            {{ shop_rating_count($shop->id) }})</strong>
                                                                        {{-- Here shop_rating_count is global function which is declared on app/help/help.php to count no.rating --}}
                                                                    </small>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <a href="" class="btn btn-outline-primary"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#catMaodel" id="add"
                                                                        onclick="rate('{{ $shop->id }}')"> Add a
                                                                        review</a>
                                                                    <br>

                                                                    <small> <strong>(Write Your Review)</strong>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2 mb-1">
                                                                <p class="text-lead">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit voluptatibus rerum voluptas consequatur dolorem
                                                                    .
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        @endforeach
                                        {{-- pagination start Here !! --}}
                                        @if ($shops->hasPages())
                                            <div class="text-right " style="float: right !important;">
                                                {{ $shops->links() }}
                                            </div>
                                        @endif
                                       {{-- pagination End Here !! --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Main section End Here !! --}}

    {{-- Rating Modal Start Here --}}
    <div class="modal fade" id="catMaodel" tabindex="-1" aria-labelledby="catMaodelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('Save.rating') }}" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="catMaodelLabel">Give Rating </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" name="shop_id" class="form-control" id="shop_id" value="">
                        @error('shop_id')
                            <small class="text-danger">Cateogrie name is required field!</small>
                        @enderror

                        <label for="email"> <b> Email </b> </label>
                        <input type="email" name="email" class="form-control" required>
                        @error('email')
                            <small class="text-danger">Email Required!</small>
                        @enderror
                        <br>
                        <label for="Rating"> <b> Give Rating</b> </label>

                        <select name="rating" id="rating" class="form-select mb-2">
                            <option value="0">Give Rating</option>
                            <option value="1">1 Rating</option>
                            <option value="2">2 Rating</option>
                            <option value="3">3 Rating</option>
                            <option value="4">4 Rating</option>
                            <option value="5">5 Rating</option>
                        </select>
                        <label for="Rating"> <b>Message (optional)</b> </label>

                        <textarea name="message" id="" cols="3" rows="3" class="form-control"></textarea>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Save" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- Rating Modal Start Here --}}

    {{-- Js Part Start Here !! --}}
    <script>
        var x;

        function rate(x) {
            const val = document.getElementById('shop_id').value = x;
            console.log(val);
            console.log(x)
        }
    </script>
    {{-- Js Part End Here !! --}}
</body>

</html>
