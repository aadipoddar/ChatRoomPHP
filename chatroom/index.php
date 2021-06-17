
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>MyChat.com</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="img/icons8-chat-64.png">
    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/product.css" rel="stylesheet">
  </head>
  <body>

  <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
          <span class="fs-4">Chat Room</span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
      <a class="me-3 py-2 text-dark text-decoration-none" href="#">Home</a>
      <a class="me-3 py-2 text-dark text-decoration-none" href="#">About</a>
      <a class="me-3 py-2 text-dark text-decoration-none" href="#">Contact</a>
    </nav>
  </div>
    
<header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="#" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="#">Tour</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Product</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
  </nav>
</header>

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">My Chat</h1>
      <p class="lead fw-normal">Chat with your friends</p>

      <form action = "claim.php" method = "post">
        MyChat.com/<input type="text" name="room">
      <button class="btn btn-outline-secondary" href="#">Claim Room</button>
      </form>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-body shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div>
</main>

<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
    </div>
    <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Cool stuff</a></li>
        <li><a class="link-secondary" href="#">Random feature</a></li>
        <li><a class="link-secondary" href="#">Team feature</a></li>
        <li><a class="link-secondary" href="#">Stuff for developers</a></li>
        <li><a class="link-secondary" href="#">Another one</a></li>
        <li><a class="link-secondary" href="#">Last time</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Resource name</a></li>
        <li><a class="link-secondary" href="#">Resource</a></li>
        <li><a class="link-secondary" href="#">Another resource</a></li>
        <li><a class="link-secondary" href="#">Final resource</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Business</a></li>
        <li><a class="link-secondary" href="#">Education</a></li>
        <li><a class="link-secondary" href="#">Government</a></li>
        <li><a class="link-secondary" href="#">Gaming</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Team</a></li>
        <li><a class="link-secondary" href="#">Locations</a></li>
        <li><a class="link-secondary" href="#">Privacy</a></li>
        <li><a class="link-secondary" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      
  </body>
</html>
