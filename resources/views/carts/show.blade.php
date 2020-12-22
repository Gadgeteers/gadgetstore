@extends('layouts.app')

@section('content')
    <!--Section: Block Content-->

    <div class="container">
        <div class="card">
            <div><strong>Your Products:</strong></div>
            <table class="table table-hover shopping-cart-wrap">
                <thead class="text-muted">
                @foreach($products as $product)
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col" width="120">Quantity</th>
                    <th scope="col" width="120">Price</th>
                    <th scope="col" width="200" class="text-right">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <figure class="media">
                            <div class="img-wrap pr-3"><img src="/storage/{{$product->image}}" style="height: 75px; width: 75px" class="img-thumbnail img-sm" alt=""></div>
                            <figcaption class="media-body">
                                <h6 class="title text-truncate">{{$product->name}}</h6>
                                <dl class="param param-inline small">
                                    <dt>By: </dt>
                                    <dd>{{$product->user->name}}</dd>
                                </dl>
                            </figcaption>
                        </figure>
                    </td>
                    <td>
                        <label>
                            <input type="number" value="1" class="form-control" min="1" max="100">
                        </label>
                    </td>
                    <td>
                        <div class="price-wrap">
                            <var class="price">Tk. {{$product->price}} each</var>
                        </div> <!-- price-wrap .// -->
                    </td>
                    <td class="text-right">
                        <a href="/carts/remove/{{$product->id}}" class="btn btn-outline-danger"> × Remove</a>
                    </td>
                </tr>
                @endforeach


                </tbody>
            </table>
            <div><a href="/orders/checked">Proceed to checkout</a></div>
        </div> <!-- card.// -->


    </div>
    <!--Section: Block Content-->

@endsection
