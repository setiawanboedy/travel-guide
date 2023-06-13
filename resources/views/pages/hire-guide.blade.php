@extends('layout.checkout')
@section('title','Hire tour guide')

@section('content')
<main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <div class="block-heading">
          <h2>Payment</h2>
          <p>
            Please make a payment to the account listed to complete the transaction.</p>
        </div>
          <form action="{{route('hire-create', $item->id)}}" method="POST">
            @csrf
            <div class="products">
                <h3 class="title">Checkout</h3>
                <div class="item">
                  <span class="price">{{"Rp " . number_format($item->price,2,',','.')}}</span>
                  <p class="item-name">Tour Guide Destination</p>
                  <p class="item-description">{{$item->travel_package->title}}</p>
                </div>
                <div class="item">
                  <span class="price">{{"Rp " . number_format(100000,2,',','.')}}</span>
                  <p class="item-name">Transportation</p>
                  <p class="item-description">{{$item->transportation}}</p>
                </div>
                <div class="total">Total<span class="price">{{"Rp " . number_format($item->price+100000,2,',','.')}}</span></div>
              </div>
              <div class="card-details">
                <h3 class="title">Credit Card Details</h3>

                    <div class="row bank ml-3">
                        <div class="col-sm-3">
                            <img src="{{url('frontend/assets/img-tour/Bank_Central_Asia.png')}}" style="max-width: 100px" alt="bank" class="bank-image">
                        </div>

                        <div class="col-sm-5">
                            <div class="bank-item">
                                <div class="description ">
                                  <h3>PT Jadoo ID</h3>
                                  <p>0881 8829 8800
                                    <br>
                                    Bank Central Asia
                                  </p>

                                </div>
                              </div>
                        </div>

                  <div class="form-group col-sm-12">
                    <button type="submit" class="btn btn-primary btn-block">Proceed</button>
                  </div>
                </div>
              </div>
          </form>
      </div>
    </section>
  </main>
@endsection
