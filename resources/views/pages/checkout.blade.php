@extends('layout.checkout')
@section('title', 'Checkout')
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

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h1>Who is going ?</h1>
                        <p>Trip to {{ $item->travel_package->title }}, {{ $item->travel_package->location }}</p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Username</td>
                                        <td>Nationality</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($item->transaction_details as $detail)
                                        <tr>
                                            <td>
                                                <img src="https://ui-avatars.com/api/?name={{ $detail->username }}"
                                                    height="60" class="rounded-circle" />
                                            </td>
                                            <td class="align-middle">{{ $detail->username }}</td>
                                            <td class="align-middle">{{ $detail->nationality }}</td>
                                            <td class="align-middle">
                                                <a href="{{ route('checkout-remove', $detail->id) }}">
                                                    <img src="{{ url('frontend/assets/img/dest/ic_remove.png') }}" />
                                                </a>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                No visitor
                                            </td>
                                        </tr>
                                    @endforelse

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

                            <form method="POST" action="{{ route('checkout-create', $item->id) }}"
                                class="row gy-2 gx-3 align-items-center">
                                @csrf
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2 me-sm-2" id="username" name="username"
                                        placeholder="Username" />
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control mb-2 me-sm-2" id="nationality"
                                        name="nationality" placeholder="Nationality" />
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
                                <td width="50%" class="text-right">{{ $item->transaction_details->count() }} person</td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">Rp {{ $item->travel_package->price }}k / person</td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">Rp {{ $item->transaction_total }}k</td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique)</th>
                                <td width="50%" class="text-right tex-total">
                                    <span class="text-blue">Rp {{ $item->transaction_total }},</span>
                                    <span class="text-orange">{{ mt_rand(0, 999) }}</span>
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
                                <img src="{{ url('frontend/assets/img/dest/ic_bank.png') }}" alt="bank"
                                    class="bank-image">
                                <div class="description">
                                    <h3>PT Jadoo ID</h3>
                                    <p>0881 8829 8800
                                        <br>
                                        Bank Central Asia
                                    </p>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="join-container">
                        <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">
                            I Have Made Payment
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('destination-detail', $item->travel_package->slug) }}" class="text-muted"
                            style="text-decoration: none;">
                            Cancel Booking
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
