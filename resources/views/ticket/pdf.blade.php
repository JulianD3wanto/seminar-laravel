<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" media="print">

    <title>Hello, world!</title>

    <style>
      .card {
        border: 1px solid rgba(0,0,0,.125);
        border-radius: .25rem;
      }
      .text-center {
        text-align: center;
      }
      .card-header {
        padding: .75rem 1.25rem;
        background-color: #4829B2;
        color: #fff;
        border-bottom: 1px solid rgba(0,0,0,.125);
      }
      .card-body {
        padding: 1.25rem;
      }
      h5 {
        font-size: 1.25rem;
        margin-top: 0;
        margin-bottom: 0;
      }
      h6 {
        font-size: 1rem;
        margin-bottom: 1rem;
      }
      .card-title {
        margin-bottom: .75rem;
      }
      .card-subtitle {
        margin-top: -.375rem;
      }
      .text-uppercase {
        text-transform: uppercase;
      }
      .text-muted {
        color: #6c757d;
      }
    </style>
  </head>
  <body>
   <div class="container">
     <div class="card">
       <div class="card-header text-uppercase text-center">
         <h5>Thank You, You Have Joined Event</h5>
       </div>
       <div class="card-body">
         <h5 class="card-title text-uppercase">{{$myEventJoined->nama}}</h5>
         <h6 class="card-subtitle mb-3 text-muted">Event</h6>
         <h5 class="card-title text-uppercase">{{$user->name}}</h5>
         <h6 class="card-subtitle mb-3 text-muted">Name</h6>
         <h5 class="card-title text-uppercase">{{$myEventJoined->alamat}}</h5>
         <h6 class="card-subtitle mb-3 text-muted">Alamat</h6>
         <h5 class="card-title text-uppercase">{{\Carbon\Carbon::parse($myEventJoined->tanggal_mulai)->format('M-d-Y, H:i')}}</h5>
         <h6 class="card-subtitle mb-3 text-muted">Tanggal</h6>
       </div>
     </div>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>