<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('pm/styles/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('pm/styles/style.css')}}">
</head>
<body>
    
    <header>
        <div>
            <a href="#" class="brand-logo"><button class="nav-button">Azar's Blog</button></a>
        </div>
        <nav>
            <ul class="nav-links desktop__menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="user_panel">
            <a href="#"><button class="nav-button">Login</button></a>
            <a href="#"><button class="nav-button">Register</button></a>
        </div>
        <a class="open" onclick="openNav()" href="#">MENU</a>
    </header>

    <div id="mobile__menu" class="overlay">
        <a class="mobile_brand" href="#">Azar's Blog</a>
        <a class="close" onclick="closeNav()">&times;</a>
        <div class="overlay__content">
            <a href="#">Home</a>
            <a href="#">Blog</a>
            <a href="#">Portfolio</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>

    <section class="search_section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="search_panel">
                            <input type="text" class="search_input " placeholder="What are you looking for?">
                            <button class=""><a href="#" class="">Search</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-md-2 sidebar-col">
                    <div class="row">
                        <div class="col-md-12 category-col">
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="card category-card">
                                        <div class="card-body">
                                            <a href="#" class="btn btn-light">Object Oriented Programming PHP <span class="badge badge-dark">5</span></a>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card category-card">
                                        <div class="card-body">
                                            <a href="#" class="btn btn-light">Laravel <span class="badge badge-dark">9</span></a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-12">
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="card series-card">
                                        <div class="card-body">
                                            <a href="#" class="btn btn-light">Laravel from Scratch <span class="badge badge-dark">5</span></a>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card series-card">
                                        <div class="card-body">
                                            <a href="#" class="btn btn-light">Object Oriented Programming PHP <span class="badge badge-dark">9</span></a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="row ">
                        <div class="col-md-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item active" aria-current="page">Home</li>
                                </ol>
                              </nav>
                        </div>
                        <div class="col-md-6 article-col">
                            <div class="card article-card">
                                <div class="card-body card_body_fixed_height article-card-body">
                                    <a href="#" class="card-title article-title"><h5>Object-Oriented Principles in PHP</h5></a>
                                    <p class="card-text">The typical beginner, whether they realize it or not, first learns procedural programming.</p>
                                </div>
                                <ul class="list-group list-group-flush card-list-group">
                                    <li class="list-group-item article-category"><a href="#"><ion-icon name="briefcase-sharp"></ion-icon> PHP</a></li>
                                    <li class="list-group-item article-comment"><a href="#"><ion-icon name="chatbubbles-sharp"></ion-icon> 5 Comments</a></li>
                                    <li class="list-group-item article-author"><a href="#"><ion-icon name="person-sharp"></ion-icon> azagul</a></li>
                                    <li class="list-group-item article-date"><p><ion-icon name="calendar-sharp"></ion-icon> 20.03.2000 / 12:30</p></li>
                                </ul>
                                <div class="card-body footer">
                                  <a href="#" class="card-link read-more">Read More	&rarr;</a>
                                </div>
                              </div>
                        </div>

                        <div class="col-md-6 article-col">
                            <div class="card article-card">
                                <div class="card-body card_body_fixed_height article-card-body">
                                    <a href="#" class="card-title article-title"><h5>Generate Multiple Files in a Single Command</h5></a>
                                    <p class="card-text">The typical beginner, whether they realize it or not, first learns procedural programming.</p>
                                </div>
                                <ul class="list-group list-group-flush card-list-group">
                                    <li class="list-group-item article-category"><a href="#"><ion-icon name="briefcase-sharp"></ion-icon> PHP</a></li>
                                    <li class="list-group-item article-comment"><a href="#"><ion-icon name="chatbubbles-sharp"></ion-icon> 5 Comments</a></li>
                                    <li class="list-group-item article-author"><a href="#"><ion-icon name="person-sharp"></ion-icon> azagul</a></li>
                                    <li class="list-group-item article-date"><p><ion-icon name="calendar-sharp"></ion-icon> 20.03.2000 / 12:30</p></li>
                                </ul>
                                <div class="card-body footer">
                                    <a href="#" class="card-link read-more">Read More	&rarr;</a>
                                  </div>
                              </div>
                        </div>

                        <div class="col-md-6 article-col">
                            <div class="card article-card">
                                <div class="card-body card_body_fixed_height article-card-body">
                                    <a href="#" class="card-title article-title"><h5>Understanding Foreign Keys and Database Factories</h5></a>
                                    <p class="card-text">The typical beginner, whether they realize it or not, first learns procedural programming.</p>
                                </div>
                                <ul class="list-group list-group-flush card-list-group">
                                    <li class="list-group-item article-category"><a href="#"><ion-icon name="briefcase-sharp"></ion-icon> PHP</a></li>
                                    <li class="list-group-item article-comment"><a href="#"><ion-icon name="chatbubbles-sharp"></ion-icon> 5 Comments</a></li>
                                    <li class="list-group-item article-author"><a href="#"><ion-icon name="person-sharp"></ion-icon> azagul</a></li>
                                    <li class="list-group-item article-date"><p><ion-icon name="calendar-sharp"></ion-icon> 20.03.2000 / 12:30</p></li>
                                </ul>
                                <div class="card-body footer">
                                    <a href="#" class="card-link read-more">Read More	&rarr;</a>
                                  </div>
                              </div>
                        </div>

                        <div class="col-md-6 article-col">
                            <div class="card article-card">
                                <div class="card-body card_body_fixed_height article-card-body">
                                    <a href="#" class="card-title article-title"><h5>Build a Registration System in Mere Minutes</h5></a>
                                    <p class="card-text">The typical beginner, whether they realize it or not, first learns procedural programming.</p>
                                </div>
                                <ul class="list-group list-group-flush card-list-group">
                                    <li class="list-group-item article-category"><a href="#"><ion-icon name="briefcase-sharp"></ion-icon> PHP</a></li>
                                    <li class="list-group-item article-comment"><a href="#"><ion-icon name="chatbubbles-sharp"></ion-icon> 5 Comments</a></li>
                                    <li class="list-group-item article-author"><a href="#"><ion-icon name="person-sharp"></ion-icon> azagul</a></li>
                                    <li class="list-group-item article-date"><p><ion-icon name="calendar-sharp"></ion-icon> 20.03.2000 / 12:30</p></li>
                                </ul>
                                <div class="card-body footer">
                                    <a href="#" class="card-link read-more">Read More	&rarr;</a>
                                  </div>
                              </div>
                        </div>
                        
                        <div class="col-md-12">
                            <nav aria-label="...">
                                <ul class="pagination">
                                  <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                  </li>
                                </ul>
                              </nav>
                        </div>

                    </div>
                    
                </div>
                
            </div>
        </div>
    </main>

    <footer class="text-muted">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Powered by Azar Guliyev</p>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{URL::asset('pm/js/mobile.js')}}"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>