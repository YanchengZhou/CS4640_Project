<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Yancheng Zhou(worked on this), Xiyuan Song">
    <meta name="description" content="Website for connecting people by exchanging items and information">
    <meta name="keywords" content="Connect Website">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet/less" type="text/css" href="styles/main.less" />
    <script src="less.min.js" ></script>

    <title> Connect Project </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-xl">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link active" href="?command=index"> Home | </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Used Items | </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> House Rentals | </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Carpooling | </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?command=account"> Account | </a>
                    </li>
                </ul>
            </div>

            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="?command=upload" class="btn btn-primary my-2 my-sm-0"> Upload </a>
                        &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="?command=logout" class="btn btn-outline-dark my-2 my-sm-0">Log out </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span> Search </span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="form-outline">
                                        <input type="search" class="form-control" placeholder="Input keyword.."/>
                                    </div>
                                    <a href="#" class="btn btn-primary">Search</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span> Filter </span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5> Time: within </h5>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="time">
                                        <label class="form-check-label">8 hours</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="time">
                                        <label class="form-check-label">1 day</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="time">
                                        <label class="form-check-label">1 week </label> &nbsp;
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="time" checked>
                                        <label class="form-check-label">Any</label>
                                    </div>
                                    <br><br>

                                    <h5> Price: $ </h5>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="price">
                                        <label class="form-check-label">&lt;10</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="price">
                                        <label class="form-check-label">10-50</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="price">
                                        <label class="form-check-label">>50</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="price" checked>
                                        <label class="form-check-label">Any</label>
                                    </div>
                                    <br><br>

                                    <h5> State </h5>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="state">
                                        <label class="form-check-label">Available</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="state">
                                        <label class="form-check-label">Pending</label>
                                    </div>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="state">
                                        <label class="form-check-label">Closed</label> &nbsp; &nbsp;
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="state" checked>
                                        <label class="form-check-label">Any</label>
                                    </div>
                                    <br><br>

                                    <p>
                                        <a href="#" class="btn btn-primary">Filter</a>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span> Sort </span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5> By Default </h5>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sort" checked>
                                        <label class="form-check-label">No Sort</label>
                                    </div>
                                    <br> <br>

                                    <h5> By Time </h5>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sort">
                                        <label class="form-check-label">Latest</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sort">
                                        <label class="form-check-label">Earliest</label>
                                    </div>
                                    <br> <br>

                                    <h5> By Price </h5>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sort">
                                        <label class="form-check-label">Lowest</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sort">
                                        <label class="form-check-label">Highest</label>
                                    </div>
                                    <br> <br>

                                    <h5> By Upvote </h5>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sort">
                                        <label class="form-check-label">Highest</label>
                                    </div>
                                    <br> <br>

                                    <a href="#" class="btn btn-primary">Sort</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col-md-8" >
                <div class="p-5 mb-4">
                    <div class="upper">
                        <h1 class="display-8 fw-bold"> Item1 Name </h1>
                        <h4> posted by Poster1 Name on Post Time </h4>
                    </div>

                    <div class="row">
                        <div class="col-md-4 itemInfo">
                            <ul>
                                <li> Price: 100$ </li>
                                <li> State: Available </li>
                                <li> Upvote: 1 </li>
                            </ul>

                            <a class="btn btn-primary btn-lg" href="basicinfo.html">View More</a>
                        </div>
                        <div class="col-md-8">
                            <img class="card-img-top" src="images/item.jpg" alt="No picture available">
                        </div>
                    </div>
                </div>
                <br>

                <div class="p-5 mb-4">
                    <div class="upper">
                        <h1 class="display-8 fw-bold"> Item2 Name </h1>
                        <h4> posted by Poster2 Name on Post Time </h4>
                    </div>

                    <div class="row">
                        <div class="col-md-4 itemInfo">
                            <ul>
                                <li> Price: 200$ </li>
                                <li> State: Available </li>
                                <li> Upvote: 2 </li>
                            </ul>

                            <a class="btn btn-primary btn-lg" href="basicinfo.html">View More</a>
                        </div>
                        <div class="col-md-8">
                            <img class="card-img-top" src="images/item.jpg" alt="No picture available">
                        </div>
                    </div>
                </div>
                <br>

                <div class="p-5 mb-4">
                    <div class="upper">
                        <h1 class="display-8 fw-bold"> Item3 Name </h1>
                        <h4> posted by Poster3 Name on Post Time </h4>
                    </div>

                    <div class="row">
                        <div class="col-md-4 itemInfo">
                            <ul>
                                <li> Price: 300$ </li>
                                <li> State: Available </li>
                                <li> Upvote: 3 </li>
                            </ul>

                            <a class="btn btn-primary btn-lg" href="basicinfo.html">View More</a>
                        </div>
                        <div class="col-md-8">
                            <img class="card-img-top" src="images/item.jpg" alt="No picture available">
                        </div>
                    </div>
                </div>
                <br>

                <div class="p-5 mb-4">
                    <div class="upper">
                        <h1 class="display-8 fw-bold"> Item4 Name </h1>
                        <h4> posted by Poster4 Name on Post Time </h4>
                    </div>

                    <div class="row">
                        <div class="col-md-4 itemInfo">
                            <ul>
                                <li> Price: 400$ </li>
                                <li> State: Available </li>
                                <li> Upvote: 4 </li>
                            </ul>

                            <a class="btn btn-primary btn-lg" href="basicinfo.html">View More</a>
                        </div>
                        <div class="col-md-8">
                            <img class="card-img-top" src="images/item.jpg" alt="No picture available">
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>


    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© All rights authorized to Zhou, Song, 2022</p>

            <ul class="nav col-md-8 justify-content-end">
                <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Used Items</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">House Rentals</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Carpooling</a></li>
                <li class="nav-item"><a href="account.html" class="nav-link px-2 text-muted">Account</a></li>
            </ul>
        </footer>
    </div>

</body>

</html>