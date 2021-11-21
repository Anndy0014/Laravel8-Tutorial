<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Countries List</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('datatable/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('datatable/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css')}}">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md-8">

              <input type="text" name="searchfor" id="" class="form-control">
                  <div class="card">
                      <div class="card-header">Countries</div>
                      <div class="card-body">
                          <table class="table table-hover table-condensed" id="counties-table">
                              <thead>
                                  <th><input type="checkbox" name="main_checkbox"><label></label></th>
                                  <th>#</th>
                                  <th>Country name</th>
                                  <th>Capital City</th>
                                  <th>Actions <button class="btn btn-sm btn-danger d-none" id="deleteAllBtn">Delete All</button></th>
                              </thead>
                              <tbody></tbody>
                          </table>
                      </div>
                  </div>
            </div>
            <div class="col-md-4">
                  <div class="card">
                      <div class="card-header">Add new Country</div>
                      <div class="card-body">
                          <form action="{{ route('add.country')}}" method="post" id="add-country-form" autocomplete="off">
                              @csrf
                              <div class="form-group">
                                  <label for="">Country name</label>
                                  <input type="text" class="form-control" name="country_name" placeholder="Enter country name">
                                  <span class="text-danger error-text country_name_error"></span>
                              </div>
                              <div class="form-group">
                                  <label for="">Capital city</label>
                                  <input type="text" class="form-control" name="capital_city" placeholder="Enter capital city">
                                  <span class="text-danger error-text capital_city_error"></span>
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-block btn-success">SAVE</button>
                              </div>
                          </form>
                      </div>
                  </div>
            </div>
        </div>

  </div>
    
    <script src="{{ asset('jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('datatable/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('toastr/toastr.min.js')}}"></script>
    <script>

        toastr.options.prevenDuplicates = true;

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function () {
            //ADD NEW COUNTRY
            $('#add-country-form').on('submit',function(e){
                e.prevenDefault();
                alert('hello form');
            })
          })


    </script>
</body>
</html>