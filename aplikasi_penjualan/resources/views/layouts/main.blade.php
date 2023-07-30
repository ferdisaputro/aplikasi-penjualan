<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <meta name="generator" content="Hugo 0.108.0">
   <title>Dashboard Template · Bootstrap v5.3</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" defer integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/feather-icons"></script>
   

   

{{-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

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

   .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
   }

   .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
   }

   .bi {
      vertical-align: -.125em;
      fill: currentColor;
   }

   .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
   }

   .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
   }
   </style>

   
   <!-- Custom styles for this template -->
   <link href="/css/dashboard.css" rel="stylesheet">
</head>
<body>
   
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
</button>
<input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
<div class="navbar-nav">
   <div class="nav-item text-nowrap">
   <a class="nav-link px-3" href="#">Sign out</a>
   </div>
</div>
</header>

<div class="container-fluid">
   <div class="row">
      @include('partials.sidebar')

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 text-capitalize">{{ explode('.', Route::currentRouteName())[0] == null? 'Beranda' : explode('.', Route::currentRouteName())[0] }}</h1>
         </div>

         @yield('container')

      </main>
   </div>
</div>


   <script>
      feather.replace()
   </script>
   {{-- <script>
     const currencyInput = document.querySelector(".currency-input");
     currencyInput.addEventListener("keypress", function(e) {
       let key = e.keyCode || e.which;
       if (
         // Allow: Backspace, Delete, Tab, Escape, Enter
         [46, 8, 9, 27, 13].indexOf(key) !== -1 ||
         // Allow: Ctrl+A
         (key === 65 && e.ctrlKey === true) ||
         // Allow: Ctrl+C
         (key === 67 && e.ctrlKey === true) ||
         // Allow: Ctrl+X
         (key === 88 && e.ctrlKey === true) ||
         // Allow: Home, End, Left, Right
         (key >= 35 && key <= 39)
       ) {
         // let it happen, don't do anything
         return;
       }
       // Ensure that it is a number and stop the keypress
       if (
         (e.shiftKey || (key < 48 || key > 57)) &&
         (key < 96 || key > 105)
       ) {
         e.preventDefault();
       }
     });
     currencyInput.addEventListener("blur", function(e) {
       this.value = parseFloat(this.value).toFixed(2);
     });
   </script> --}}

   <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
   
   {{-- <script>
      const input = document.querySelector('.currency-input');

      input.addEventListener('keyup', function(event) {
         // Get the current value of the input
         let value = event.target.value;

         // Remove any non-numeric characters
         value = value.replace(/[^\d]/g, '');

         // Format the value as currency
         value = value.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");

         // Update the value of the input
         event.target.value = value;
      })
   </script> --}}

   @stack('scripts')

</body>
</html>
