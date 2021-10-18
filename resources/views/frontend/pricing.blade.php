@extends('template')
@section('body')
   <div class="container">
       <h3 class="text-center heading py-5">Pricing</h3>
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Food</th>
            <th scope="col">Price</th>
       
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Buger</td>
            <td>Rs. 160</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Dhosa</td>
            <td>Rs. 80</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Samosa</td>
            <td>Rs. 20 each</td>
          </tr>
        </tbody>
      </table>
   </div>
@endsection