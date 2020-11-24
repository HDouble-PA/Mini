@extends("layout.layout")
@section("content")
    <div class="container">
    
    @if(Session("delete"))
            <div class="alert alert-danger mt-3 mb-3">
                {{ Session("delete") }}
            </div>
        @endif
    
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                <th scope="col"><strong>ID</strong></th>
                <th scope="col"><strong>Customer's Name</strong></th>
                <th scope="col"><strong>Pizza Name</strong></th>
                <th scope="col"><strong>Toopings</strong></th>
                <th scope="col"><strong>Sauce</strong></th>
                <th scope="col"><strong>Price</strong></th>
                <th scope="col"><strong>Edit Order</strong></th>
                <th scope="col"><strong>Order</strong></th>
                </tr>
            </thead>
            <tbody>
              @foreach($pizzas as $pizza)
                <tr>
                <th scope="row">{{$pizza->id}}</th>
                <td>{{$pizza->username}}</td>
                <td>{{$pizza['pizza_name']}}</td>
                <td>{{$pizza['toppings']}}</td>
                <td>{{$pizza['sauce']}}</td>
                <td>{{$pizza['price']}}</td>
                <td><button class="btn btn-sm btn-warning"data-toggle="modal" data-target="#modalLoginForm">Edit Order</button></td>
                <td><a class="btn btn-sm btn-success" href="{{route("delete",$pizza->id)}}">Order Confirmed</a></td>
                </tr>
              @endforeach
              
            </tbody>
        </table>
    </div>
    <!-- modal form -->
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Editing Order</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mt-4">
            <input type="text" id="materialRegisterFormEmail" class="form-control">
            <label for="materialRegisterFormEmail">Customer's Name</label>
        </div>
        <div class="md-form mt-4">
            <input type="text" id="materialRegisterFormEmail" class="form-control">
            <label for="materialRegisterFormEmail">Pizza Name</label>
        </div>
        <div class="md-form mt-4">
            <input type="text" id="materialRegisterFormEmail" class="form-control">
            <label for="materialRegisterFormEmail">Toppings</label>
        </div>
        <div class="md-form mt-4">
            <input type="text" id="materialRegisterFormEmail" class="form-control">
            <label for="materialRegisterFormEmail">Sauce</label>
        </div>
        <div class="md-form mt-4">
            <input type="text" id="materialRegisterFormEmail" class="form-control">
            <label for="materialRegisterFormEmail">Price</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn yellow black-text w-100">Order Updated</button>
      </div>
    </div>
  </div>
</div>
    
@endsection
