@extends("layout.layout")
@section("content")
    <div class="container">
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
                <tr>
                <th scope="row">1</th>
                <td>user</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>$3.99</td>
                <td><button class="btn btn-sm btn-warning"data-toggle="modal" data-target="#modalLoginForm">Edit Order</button></td>
                <td><button class="btn btn-sm btn-success">Confirmed</button></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>user</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>$3.99</td>
                <td><button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalLoginForm">Edit Order</button></td>
                <td><button class="btn btn-sm btn-success">Confirmed</button></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>user</td>
                <td>Larry the Bird</td>
                <td>Thornton</td>
                <td>@twitter</td>
                <td>$3.99</td>
                <td><button class="btn btn-sm btn-warning"data-toggle="modal" data-target="#modalLoginForm">Edit Order</button></td>
                <td><button class="btn btn-sm btn-success">Confirmed</button></td>
                </tr>
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
        <button class="btn indigo white-text">Order Updated</button>
      </div>
    </div>
  </div>
</div>
    
@endsection
