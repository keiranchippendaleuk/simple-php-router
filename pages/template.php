<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple php page router</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.12.4.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://omnipotent.net/jquery.sparkline/2.1.2/jquery.sparkline.min.js"
    ></script>
    <style>
      body {
        background-color: #343a40;
        color: #f8f9fa;
      }
      .card {
        background-color: #42464d;
        border-color: #343a40;
        color: #f8f9fa;
      }
      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
      }
      .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/home" target="page">Simple PHP page router</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/home" target="page">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/page2" target="page">page2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/page3" target="page">page3</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
          <div class="page">
            <div class="pageAjax">

            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    ></script>
    <script src="assets/router.js"></script>
  </body>
</html>
