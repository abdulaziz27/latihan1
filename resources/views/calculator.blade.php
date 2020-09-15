<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>tugas - calculator</title>
  </head>
  <body>
    <h4 class="text-center mt-4">Hitung Volume</h4>
    <div class="container text-center">
        <form class="form-group mt-5" action="/calculate" method="post">
        @csrf
        <div class="row text-center">
            <div class="col-md-3">
                <input class="form-control" type="number" name="jari2" id="" placeholder="Masukkin Jari-Jari">
            </div>
            <div class="col-md-3">
                <select class="form-control" name="operator" id="" required>
                    <option value="" selected="">--- Pilih Rumus ---</option>
                    <option value="tabung"> Tabung </option>
                    <option value="bola"> Bola </option>
                    <option value="kerucut"> Kerucut </option>
                </select>
            </div>
            <div class="col-md-3">
                <input class="form-control" type="number" name="tinggi" id="" placeholder="Masukkin Tinggi">
            </div>
            <div class="col-md-3">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </div>
            
        </form>
        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                @if(session('info'))
                    <div class="alert alert-info">
                        {{ session('info') }}
                    </div>
                @endif
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>