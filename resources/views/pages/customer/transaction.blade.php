@extends("layouts.app")

@section('content')
    <div class="container">

        {{-- saldo --}}
        <div class="card">
            <div class="card-header">
                Saldo
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>Rp. 40000</p>
                </blockquote>
            </div>
        </div>

        {{-- menu --}}
        <div class="card mt-5">
            <div class="card-header">
                Menu
            </div>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        Cart
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Bakso</td>
                                    <td>10000</td>
                                    <td>1</td>
                                    <td>10000</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="#" class="btn btn-primary">Check Out</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        Check Out
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Bakso</td>
                                    <td>10000</td>
                                    <td>1</td>
                                    <td>10000</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection