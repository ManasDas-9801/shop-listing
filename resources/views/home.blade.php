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
    <nav class="navbar navbar-expand-md  text-light shadow-sm sticky-top " style="background-color: #1abc9c">
        <div class="container">
            <a class="navbar-brand text-light" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler text-dark bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-light" data-bs-toggle="modal"
                            data-bs-target="#catMaodel">Add Categories</a>
                    </li>
                </ul>
            </div> 
        </div>
    </nav>

    {{-- Modal for adding Cateogries --}}

    <!-- Modal -->
    <div class="modal fade" id="catMaodel" tabindex="-1" aria-labelledby="catMaodelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('Save.Cat') }}" method="post" id="basic-form">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="catMaodelLabel">Add Categoery Table </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="cat_name"> <b>Category Name</b> </label>
                        <input type="text" name="cat_name" class="form-control mt-2" id="cat_name" required>
                        @error('cat_name')
                            <small class="text-danger">Categorie name is required field!</small>
                        @enderror

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Save" />
                    </div>
                </div>
            </form>
        </div>
    </div>
 {{-- Modal for Ends Cateogries --}}
    <section>
        <div class="container mt-3">
            @if (Session::has('message'))
                <p class="alert alert-success">{{ Session('message') }}</p>
            @endif
            @if (Session::has('err'))
                <p class="alert alert-danger">{{ Session('err') }}</p>
            @endif
            <div class="col-sm-12 mx-auto">
                <div class="row">
                    <div class="col-sm-4 mx-auto">

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
                            <a href="{{ route('home') }}" class="list-group-item list-group-item-action active p-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                    class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                </svg>
                                <span class="ms-3"> Add Shop</span>
                            </a>
                            <a href="{{ route('shops') }}" class="list-group-item list-group-item-action  p-4 ">
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
                    <div class="col-sm-8 mx-auto">
                        <div class="card shadow">
                            <div class="card-header list-group-item list-group-item-action active">Add Shop Here</div>
                            <div class="card-body">
                                <div class="col-6 mx-auto">
                                    <form action="{{ route('Save.Shop') }}" method="post">
                                        @csrf

                                        <label for="shop_name"> <b>Shop Name</b> </label>
                                        <input type="text" name="shop_name" id="shop_name"
                                            class="form-control mb-2 mt-2">
                                        @error('shop_name')
                                            <small class="text-danger">Shop name is required field!</small>
                                        @enderror

                                          <div class="row">
                                             <div class="col-10">
                                                <div class="select">
                                                    <label for="Cateogry Name"> <b>Categories Name</b> </label>
                                                    <select name="cat_id[]" id="cat_id" class="form-select mt-2 mb-2">
                                                        <option value="0">Categories Name</option>

                                                        @foreach ($cats as $cat)
                                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                        @endforeach
            
                                                    </select>     
                                                 </div>
                                            </div> 
                                             <div class="col-2">
                                                <button id="more" class="btn btn-primary mb-2" style="margin-top: 31px"> +</button>
                                             </div>
                                          </div>
                                         {{-- New Cateogry Append Here --}}
                                          <div class="select-two col-10">
                                                
                                         </div>  
                                        
                                        <input type="submit" value="Submit"
                                            class="form-control mt-2 mb-2 btn btn-success">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  {{-- js for addding more cateogries  --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
          $("#more").click(function(event){
                     event.preventDefault();
                $(".select").clone().appendTo(".select-two");
          });
        });
        </script>
  {{-- js for addding more cateogries  --}}

</body>

</html>
