@extends('dashboard.layouts.main')

@section('content')


    <div class="table-responsive table-bordered mt-5 ">
        <table class="table mt-3 ">
            <thead class="table-primary">
              <tr class="table-active">
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-active">
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr class="table-active">
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>

<div class="container">
  <label for="inputPassword5" class="form-label">Password</label>
  <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
  <div id="passwordHelpBlock" class="form-text">
    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
  </div>
</div>

@endsection