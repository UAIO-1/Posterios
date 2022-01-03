<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Posterios - Project Exhibition & Forum Discussion</title>
        <link rel="shortcut icon" href="{{ asset('image/icon-logo.PNG') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome/cardWelcome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome/news.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome/font.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome/welcome.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <style>
            body{
                background-color: #f5f5fa;
                asd
            }

           .container2 {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            img {
                max-width: 100%;
            }

            .image {
                flex-basis: 40%;
            }

            .text {
                font-size: 20px;
                padding-left: 20px;
            }

        </style>

    </head>
    <body>

        @if(!Auth::check())
        @include('navbar')
        <div class="bg-slogan pb-xl-5">
            <div class="box2 p-5">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        <div class="p-lg-5 container container2">
            <div class="image">
                <div class="box">
                    <strong>
                        <div class="container text-light">
                            <div class="row">
                                <div class="col-md-6 box-c1 bg-warning">
                                   <p>Science</p>
                                   <h1 class="text-center sg">S</h1>
                                </div>
                                <div class="col-md-6 box-c1 bg-info">
                                    <p>Technology</p>
                                    <h1 class="text-center sg">T</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 box-c1 bg-danger">
                                    <p>Engineering</p>
                                    <h1 class="text-center sg">E</h1>
                                </div>
                                <div class="col-md-6 box-c1 bg-success">
                                    <p>Math</p>
                                    <h1 class="text-center sg">M</h1>
                                </div>
                            </div>

                    </strong>
                </div>
            </div>
        </div>

            <div class="text text-light">
                <h1 class="slogan">Project Exhibition & Forum Discussion</h1>
                <p class="">Posterios is a platform to show off and promote student creations widely. Everyone can learn through a project and build connections with people.</p>
              <div>
                <a href="/login" type="button" class="btn1">Get Started</a>
                <a href="" type="button" class="btn2">Explore Project</a>
              </div>

            </div>


        </div>
        <div class="container p-5">
            <h2 class="text-center text-light mt-xl-5">Join Us</h2>
            <p class="text-center text-light">Be a part of our community</p>
            <ul id="comm" class="text-center">
                <a href="" class="l1">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                        Facebook
                    </li>
                </a>

                <a href="" class="l2">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                        </svg>
                        Telegram
                    </li>
                </a>

                <a href="" class="l3">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                            <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
                        </svg>
                        Discord
                    </li>
                </a>

                <a href="" class="l4">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                        Instagram
                    </li>
                </a>

                <a href="" class="l5">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                        Twitter
                    </li>
                </a>



            </ul>


        </div>


        </div>


            {{-- advantage --}}
          <div class="container text-center mt-xl-5">
           <h1 class="s1">Why Posterios?</h1>
          </div>


          <div class="container mt-4">
            <div class="row">

              <div class="card col p-3 border-0 bg-transparent m-3">
                  <img src="{{ asset('image/easy.png') }}" alt="Posterios" width="50px" height="50px">
                <div class="card-title"><h3>Easy</h3></div>
                <div class="card-text">
                    <p class="text-justify">Post projects in minutes. Post your projects and get easy on the publishing process and organize your own projects. This ease of development helps Posterios grow.</p>
                </div>
              </div>

              <div class="card col p-3 border-0 bg-transparent m-3">
                <img src="{{ asset('image/friendly.png') }}" alt="Posterios" width="50px" height="50px">
              <div class="card-title"><h3>Convenient For Users</h3></div>
              <div class="card-text">
                  <p class="text-justify">Posterios provides a user interface that is as friendly and convenient as possible to carry out project publication activities.</p>
              </div>
            </div>

            <div class="card col p-3 border-0 bg-transparent m-3">
                <img src="{{ asset('image/features.png') }}" alt="Posterios" width="50px" height="50px">
              <div class="card-title"><h3>Full Features</h3></div>
              <div class="card-text">
                  <p class="text-justify">Posterios is always upgrading and improving its services for users. Add and improve the performance of new and existing features for the convenience of all users.</p>
              </div>
            </div>
            </div>
          </div>



        <h1 class="container text-center s2">Look Here!</h1>
        <p class="text-center" style="font-size: 17px">Posterios divides into categories for projects such as <span class="badge bg-warning">Science</span>
            , <span class="badge bg-info">Technology</span> , <span class="badge bg-danger">Engineering</span> , <span class="badge bg-success">Mathematics</span></p>

            <div class="columns">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-warning">Science</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>


            <div class="columns">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-warning">Science</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>

            <div class="columns">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-info">Technology</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>

            <div class="columns">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-success">Math</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>

            <div class="columns">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-danger">Engineering</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>

            <div class="columns">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-warning">Science</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>


            <div class="columns">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-warning">Science</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>

            <div class="columns mb-5">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-info">Technology</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>



            {{-- News --}}
            <div class="container text-center mt-xl-5">
                <h1 class="s3">News</h1>
                <p style="font-size: 17px">See updates on Posterios.</p>
            </div>
            <div class="container text-right mb-2">
                <a href="" class="btn btn-outline-secondary">View All</a>
            </div>



            <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="card card2 mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{ asset('image/icon-logo.PNG') }}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title text-secondary">New Feature!</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">2022, March 10</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card card2 mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{ asset('image/icon-logo.PNG') }}" class="img-fluid rounded-start" alt="..." height="100%">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title text-secondary">100k+ Users</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">2022, February 26</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card card2 mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{ asset('image/icon-logo.PNG') }}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title text-secondary">Happy New Year!</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">2022, April 17</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>

            <div class="container mt-xl-5" style="margin-bottom: 200px;">
                <h1 class="text-center s4">Want to get involved?</h1>
                <p class="text-center" style="font-size: 17px">learn about how to <a href="" class="badge bg-dark tutor">post a project</a> on Posterios</p>
                <p></p>
            </div>





            {{-- footer --}}
              <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h5>Posterios</h5>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li><a href="">Get Started</a></li>
                                        <li><a href="">Explore</a></li>
                                        <li><a href="">Ideas</a></li>
                                        <li><a href="">About</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li><a href="">News</a></li>
                                        <li><a href="">Partnership</a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="nav">
                                <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg text-white"></i></a></li>
                                <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg text-white"></i></a></li>
                                <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg text-white"></i></a></li>
                            </ul>
                            <br>
                        </div>
                        <div class="col-md-2">
                            <h5 class="text-md-right">Contact Us</h5>
                            <hr>
                        </div>
                        <div class="col-md-5">
                            <form>
                                <fieldset class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </fieldset>
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                                </fieldset>
                                <fieldset class="form-group text-xs-right">
                                    <a class="btn btn-outline-secondary w-100">Send</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </footer>
    @else
        @include('navbar')
        <div class="bg-slogan pb-xl-5">
            <div class="box2 p-5">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        <div class="p-lg-5 container container2">
            <div class="image">
                <div class="box">
                    <strong>
                        <div class="container text-light">
                            <div class="row">
                                <div class="col-md-6 box-c1 bg-warning">
                                   <p>Science</p>
                                   <h1 class="text-center sg">S</h1>
                                </div>
                                <div class="col-md-6 box-c1 bg-info">
                                    <p>Technology</p>
                                    <h1 class="text-center sg">T</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 box-c1 bg-danger">
                                    <p>Engineering</p>
                                    <h1 class="text-center sg">E</h1>
                                </div>
                                <div class="col-md-6 box-c1 bg-success">
                                    <p>Math</p>
                                    <h1 class="text-center sg">M</h1>
                                </div>
                            </div>

                    </strong>
                </div>
            </div>
        </div>

            <div class="text text-light">
                <h1 class="slogan">Project Exhibition & Forum Discussion</h1>
                <p class="">Posterios is a platform to show off and promote student creations widely. Everyone can learn through a project and build connections with people.</p>
              <div>
                <a href="" type="button" class="btn1">Post Project</a>
                <a href="" type="button" class="btn2">Explore Project</a>
              </div>

            </div>


        </div>
        <div class="container p-5">
            <h2 class="text-center text-light mt-xl-5">Join Us</h2>
            <p class="text-center text-light">Be a part of our community</p>
            <ul id="comm" class="text-center">
                <a href="" class="l1">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                        Facebook
                    </li>
                </a>

                <a href="" class="l2">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                        </svg>
                        Telegram
                    </li>
                </a>

                <a href="" class="l3">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                            <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
                        </svg>
                        Discord
                    </li>
                </a>

                <a href="" class="l4">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                        Instagram
                    </li>
                </a>

                <a href="" class="l5">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                        Twitter
                    </li>
                </a>



            </ul>


        </div>


        </div>


            {{-- advantage --}}
          <div class="container text-center mt-xl-5">
           <h1 class="s1">Why Posterios?</h1>
          </div>


          <div class="container mt-4">
            <div class="row">

              <div class="card col p-3 border-0 bg-transparent m-3">
                  <img src="{{ asset('image/easy.png') }}" alt="Posterios" width="50px" height="50px">
                <div class="card-title"><h3>Easy</h3></div>
                <div class="card-text">
                    <p class="text-justify">Post projects in minutes. Post your projects and get easy on the publishing process and organize your own projects. This ease of development helps Posterios grow.</p>
                </div>
              </div>

              <div class="card col p-3 border-0 bg-transparent m-3">
                <img src="{{ asset('image/friendly.png') }}" alt="Posterios" width="50px" height="50px">
              <div class="card-title"><h3>Convenient For Users</h3></div>
              <div class="card-text">
                  <p class="text-justify">Posterios provides a user interface that is as friendly and convenient as possible to carry out project publication activities.</p>
              </div>
            </div>

            <div class="card col p-3 border-0 bg-transparent m-3">
                <img src="{{ asset('image/features.png') }}" alt="Posterios" width="50px" height="50px">
              <div class="card-title"><h3>Full Features</h3></div>
              <div class="card-text">
                  <p class="text-justify">Posterios is always upgrading and improving its services for users. Add and improve the performance of new and existing features for the convenience of all users.</p>
              </div>
            </div>
            </div>
          </div>



        <h1 class="container text-center s2">Look Here!</h1>
        <p class="text-center" style="font-size: 17px">Posterios divides into categories for projects such as <span class="badge bg-warning">Science</span>
            , <span class="badge bg-info">Technology</span> , <span class="badge bg-danger">Engineering</span> , <span class="badge bg-success">Mathematics</span></p>

            <div class="columns">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-warning">Science</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>


            <div class="columns">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-warning">Science</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>

            <div class="columns">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-info">Technology</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>

            <div class="columns">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-success">Math</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>

            <div class="columns">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-danger">Engineering</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>

            <div class="columns">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-warning">Science</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>


            <div class="columns">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-warning">Science</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>

            <div class="columns mb-5">
                <ul class="price card bg-light">
                    <img class="image" src="{{ asset('image/gamefroot_by_gamefroot_d5uylyu-fullview.png') }}" alt="" width="100px" height="250px">
                    <div class="p-2">
                        <span class="badge bg-info">Technology</span>
                        <div><strong class="title">Posterios</strong></div>
                        <div class="description">
                            <p class="card-text text-secondary">
                                asdasdasdasdasdasdasdasdasdasdasdadsasdasdasdasdasdasdasdasdasdasdasdasd
                            </p>
                        </div>
                        <p class="card-text mt-3"><small class="text-muted">By <a href="" style="text-decoration: none">Posterios Admin</a> | 2021-12-11</small></p>
                    </div>
                </ul>
            </div>



            {{-- News --}}
            <div class="container text-center mt-xl-5">
                <h1 class="s3">News</h1>
                <p style="font-size: 17px">See updates on Posterios.</p>
            </div>
            <div class="container text-right mb-2">
                <a href="" class="btn btn-outline-secondary">View All</a>
            </div>



            <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="card card2 mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{ asset('image/icon-logo.PNG') }}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title text-secondary">New Feature!</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">2022, March 10</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card card2 mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{ asset('image/icon-logo.PNG') }}" class="img-fluid rounded-start" alt="..." height="100%">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title text-secondary">100k+ Users</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">2022, February 26</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card card2 mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{ asset('image/icon-logo.PNG') }}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title text-secondary">Happy New Year!</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">2022, April 17</small></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>

            <div class="container mt-xl-5" style="margin-bottom: 200px;">
                <h1 class="text-center s4">Want to get involved?</h1>
                <p class="text-center" style="font-size: 17px">learn about how to <a href="" class="badge bg-dark tutor">post a project</a> on Posterios</p>
                <p></p>
            </div>





            {{-- footer --}}
              <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h5>Posterios</h5>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li><a href="">Get Started</a></li>
                                        <li><a href="">Explore</a></li>
                                        <li><a href="">Ideas</a></li>
                                        <li><a href="">About</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li><a href="">News</a></li>
                                        <li><a href="">Partnership</a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="nav">
                                <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg text-white"></i></a></li>
                                <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg text-white"></i></a></li>
                                <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg text-white"></i></a></li>
                            </ul>
                            <br>
                        </div>
                        <div class="col-md-2">
                            <h5 class="text-md-right">Contact Us</h5>
                            <hr>
                        </div>
                        <div class="col-md-5">
                            <form>
                                <fieldset class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </fieldset>
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="exampleMessage" placeholder="Message"></textarea>
                                </fieldset>
                                <fieldset class="form-group text-xs-right">
                                    <a class="btn btn-outline-secondary w-100">Send</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </footer>



            @endif
    </body>
</html>

