<!DOCTYPE html>

 <html lang="en">
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1"> 
         <meta name="author" content="Yancheng Zhou(worked on this), Xiyuan Song(worked on this)">
         <meta name="description" content="basicinfo">
         <meta name="keywords" content="sprint">  
         <link rel="stylesheet" type="text/css" href="styles/info_upload.css">

         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> 

         <title>UVA Connect</title> 
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
                            <a class="nav-link" href="?command=usedItems"> Used Items | </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?command=rentals"> House Rentals | </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?command=carpooling"> Carpooling | </a>
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
                            <a href="?command=logout" class="btn btn-outline-dark my-2 my-sm-0"> Log out </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
 

        <section class="container">
            <div class="row">
                
            
            <div class= "col-4">
                    <h4>Basic Information</h4>  
                    <ul>
                      <li>Name: <?php echo $item[0]['itemname']; ?></li>
                      <li>Time: <?php echo $item[0]['time']; ?></li>
                      <li>Status: <?php echo $item[0]['status']; ?></li>
                      <li>Price: <?php echo $item[0]['price']; ?></li>
                      <li>Poster: <?php echo $item[0]['poster']; ?></li>
                      <li>Upvotes: <?php echo $item[0]['upvote']; ?></li>
                      <li>Notes: <?php echo $item[0]['note']; ?> </li>
                    </ul>
                </div>
                <div class= "col-8">
                    <h4>Post information</h4>
                    
                    <img src="images/item.jpg" alt="item image" style="height:40%;width:60%;">
                    <div style="padding-bottom:5px; padding-top: 5px;">
                        <button type="button" class="btn btn-primary" id = "upvote">Upvote</button>
                        <button type="button" class="btn btn-primary" id = "addcollection">Add collection</button>
                    </div>

                    <form action="/action.php" id="commentopen">
                        <label for="comment0">Send comments:</label>
                        <textarea id = "comment0" form = "commentopen" class = "usercomment" style=" min-width:10px; max-width:100%;min-height:10px;height:30%;width:70%;" >
                        </textarea>
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </form>

                    <form action="/action.php" id="private">
                        <label for="comment1">Send comments:</label>
                        <textarea id = "comment1" form = "private" class = "usercomment" style=" min-width:10px; max-width:100%;min-height:10px;height:30%;width:70%;" >
                        </textarea>
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </form>

                </div>
            </div>
        </section>    


        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">?? All rights authorized to Zhou, Song, 2022</p>

                <ul class="nav col-md-8 justify-content-end">
                    <li class="nav-item"><a href="?command=index" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="?command=usedItems" class="nav-link px-2 text-muted">Used Items</a></li>
                    <li class="nav-item"><a href="?command=rentals" class="nav-link px-2 text-muted">House Rentals</a></li>
                    <li class="nav-item"><a href="?command=carpooling" class="nav-link px-2 text-muted">Carpooling</a></li>
                    <li class="nav-item"><a href="?command=account" class="nav-link px-2 text-muted">Account</a></li>
                </ul>
            </footer>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     </body>
 </html>





