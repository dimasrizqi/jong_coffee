@extends('layouts.app')

@section('links')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('bodyID')
{{ 'cart' }}@endsection

@section('navTheme')
{{ 'light' }}@endsection

@section('logoFileName')
{{ URL::asset('/images/Black Logo.png') }}@endsection


@section('content')
<section class="cart" style="margin-top: 20vh;">
    <div class="container">
        <h2 class="d-flex justify-content-center">CART</h2>
        @if (session('success'))
            {{ session('success') }}
        @elseif (session('error'))
            {{ session('error') }}
        @endif
        
        @if ($cartItems->count())

            <div class="container py-5">
                <div class="card col-md-6 col-12 offset-md-3">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Zen Sushi Wishlist <span class="text-secondary h5">- {{ $cartItems->count() }} Items</span></h4>
                        @foreach ($cartItems as $item)
                            <div class="w-100 px-3 d-flex align-items-center py-3">
                                <div class="col-2">
                                    <img src="./images/chef1.jpg" alt="cart item image" class="img-fluid">
                                </div>
                                <div class="col-6 px-4">
                                    <h5 class="text-dark">{{ $item->menu->name }}</h5>
                                    <h5 class="text-secondary">RM {{ $item->menu->price * $item->quantity }}</h5>
                                </div>
                                <div class="col-4 d-flex align-items-baseline justify-content-end">
                                    <!-- Decrement button -->
                                    <form action="{{ route('cartUpdate', $item) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="cartAction" value="-">
                                        <button type="submit" class="btn btn-outline-secondary">-</button>
                                    </form>
                                    <!-- Quantity -->
                                    <h5 class="mx-4">{{ $item->quantity }}</h5>
                                    <!-- Increment button -->
                                    <form action="{{ route('cartUpdate', $item) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="cartAction" value="+">
                                        <button type="submit" class="btn btn-outline-secondary">+</button>
                                    </form>   
                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-between px-3 mt-5">
                            <h5 class="text-dark">Subtotal</h5>
                            <h5 class="text-dark">RM {{ $subtotal }}</h5>
                        </div>

                        <!-- CHECKOUT ALONG WITH DISCOUNT CODE APPLICATION START -->
                        <form action="{{ route('cartCheckout') }}" method="post">
                            @csrf
                            <div class="d-flex flex-column px-3 mt-5 col-12 align-items-center">
                                <h5 class="text-secondary">Discount Code</h5>
                                <input type="text" class="form-control mt-3" name="discountCode" id="discountCode" placeholder="Place your discount code here...">
                            </div>
                            <h5 class="text-secondary mt-5 text-center">Order Type</h5>
                            <!-- Dine in / dine in now / take away ==> radio -->
                            <div class="d-flex justify-content-center mt-4">
                                <div class="form-check form-check-inline">
                                    <input value="dineIn" class="form-check-input @error('type') is-invalid @enderror h5" type="radio" name="type" id="dineInRadio">
                                    <label class="form-check-label" for="dineInRadio">
                                        Dine In
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input value="takeAway" class="form-check-input @error('type') is-invalid @enderror h5" type="radio" name="type" id="takeAwayRadio">
                                    <label class="form-check-label" for="takeAwayRadio">
                                        Take Away 
                                    </label>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <h5 class="text-secondary mt-5 text-center">Order Date and Time</h5>
                            <div class="d-flex justify-content-center mt-4">
                                <!-- Select Date time (only applicable for dine in / take away, not dine in now) -->
                                <!-- Perform validation to ensure they don't select time that has passed -->
                                <input type="datetime-local" name="dateTime" value="{{ old('dateTime') }}" required>
                                @error('dateTime')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- perhaps add a confirmation during checkout process - like a popup or smtg -->
                            <button type="submit" class="primary-btn mt-5 w-100">Checkout</button>
                        </form>
                        <!-- CHECKOUT END -->
                    </div>
                </div>
            </div>
        @else
            <div class="d-flex justify-content-center">
                <div class="col-md-4 col-8">
                    <div class="col-12 mt-5 d-flex align-items-baseline">
                        <div class="col-2 px-2">
                            <img src="./images/cart.svg" alt="cart" class="img-fluid">
                        </div>
                        <div class="col-10">
                            <h4 class="m-3">Empty Cart</h4>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <p class="h5">Your cart is empty currently. <span><a href="{{ route('menu') }}" class="h5"><u>Add item now</u></a></span></p>
                    </div>
                    <div class="col-12 mt-4">
                        <a href="{{ route('menu') }}"><button class="primary-btn w-100 py-2">See Menu</button></a>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection