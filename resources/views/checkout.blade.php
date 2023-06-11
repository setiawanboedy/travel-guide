@extends('layout.checkout')

@section('content')
<section class="section-detail-content">
    <div class="container">
              <div class="row">
            <div class="col">
              <nav class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0 bg-light">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Tour Guide</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div>
          </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-detail">
            <h1>Who is going ?</h1>
            <p>Trip to Ubud, Bali, Indonesia</p>
            <div class="attendee">
              <table class="table table-responsive-sm text-center">
                <thead>
                  <tr>
                    <td>Picture</td>
                    <td>Name</td>
                    <td>Nationality</td>
                    <td>Visa</td>
                    <td>Passport</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" height="60" />
                    </td>
                    <td class="align-middle">Angga Riski</td>
                    <td class="align-middle">CN</td>
                    <td class="align-middle">N/A</td>
                    <td class="align-middle">Active</td>
                    <td class="align-middle">
                      <a href="#">
                        <img src="{{url('frontend/assets/img/dest/ic_remove.png')}}" />
                      </a>
                    </td>

                  </tr>

                </tbody>

              </table>
            </div>


            <label class="mt-3" for="travel_packages_id">Tour Guide</label>
            <select name="travel_packages_id" required class="form-control mb-2">
                <option value="">Pilih Tour Guide</option>

                <option value="0">
                    Budi Setiawan
                </option>

            </select>


            <div class="member mt-3">

              <h6>Add Member</h6>

              <form class="row gy-2 gx-3 align-items-center">
                <div class="col-sm-3">
                  <input type="text" class="form-control mb-2 me-sm-2" id="inputUsername" name="inputUsername"
                    placeholder="Username" />
                </div>
                <div class="col-sm-2">
                  <select class="form-select custom-select mb-2 me-sm-2 form-control" name="inputVisa" id="inputVisa">
                    <option value="VISA" selected>VISA</option>
                    <option value="30 Days">30 Days</option>
                    <option value="N/A">N/A</option>
                  </select>
                </div>
                <div class="col-sm-4">
                  <div class="mb-2">
                    <input type="text" class="datepicker" id="doepassport" placeholder="DOE Passport" />
                  </div>
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-add-now mb-2 px-4">
                    Add Now
                  </button>
                </div>
              </form>
              <h3 class="mt-2 mb-0">
                Note
              </h3>
              <p class="disclaimer mb-0">
                You are only able to invite member that has registered in Nomads.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card card-detail card-right">

            <h2>Checkout Informations</h2>
            <table class="trip-informations">
              <tr>
                <th width="50%">Members</th>
                <td width="50%" class="text-right">2 person</td>
              </tr>
              <tr>
                <th width="50%">Additional VISA</th>
                <td width="50%" class="text-right">$ 190,00</td>
              </tr>
              <tr>
                <th width="50%">Trip Price</th>
                <td width="50%" class="text-right">$ 80,00 / person</td>
              </tr>
              <tr>
                <th width="50%">Sub Total</th>
                <td width="50%" class="text-right">$ 280,00</td>
              </tr>
               <tr>
                <th width="50%">Total (+Unique)</th>
                <td width="50%" class="text-right tex-total">
                  <span class="text-blue">$ 279,</span>
                  <span class="text-orange">33</span>
                </td>
              </tr>
            </table>

            <hr>
            <h2>Payment Instructions</h2>
            <p class="payment-instructions">
              Please complete your payment before to continue the wonderful trip
            </p>

            <div class="bank mt-3">
              <div class="bank-item pb-3">
                <img src="{{url('frontend/assets/img/dest/ic_bank.png')}}" alt="bank" class="bank-image">
                <div class="description">
                  <h3>PT Nomads ID</h3>
                  <p>0881 8829 8800
                    <br>
                    Bank Central Asia
                  </p>

                </div>
              </div>
            </div>

          </div>
          <div class="join-container">
            <a href="{{route('review')}}" class="btn btn-block btn-join-now mt-3 py-2">
              I Have Made Payment
            </a>
          </div>
          <div class="text-center mt-3">
            <a href="#" class="text-muted" style="text-decoration: none;">
              Cancel Booking
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
