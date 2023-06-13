@extends('layout.checkout')
@section('title', 'Checkout Success')
@section('content')
    <div class="container-sm section-success mt-100" style="max-width: 650px; margin-bottom: 150px;">
        <div class="col text-center">
            <h1>Yay! Enjoy Your Trip</h1>
            <p>
                I hope you have a nice trip <br>
                please review our tour guide after your trip to make it better :)
            </p>

            <h6 class="d-flex justify-content-start mt-4">Trip Informations</h6>
            <div class="row justify-content-center">

                <table class="table table-bordered trip-informations">

                    <tr>
                        <th class="text-left" width="50%">Hire Price</th>
                        <td width="50%" class="text-left">{{ 'Rp ' . number_format($item->price, 2, ',', '.') }} / person</td>
                    </tr>
                    <tr>
                        <th class="text-left" width="50%">Transportation</th>
                        <td width="50%" class="text-left">{{ 'Rp ' . number_format(100000, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <th class="text-left" width="50%">Sub Total</th>
                        <td width="50%" class="text-left">{{ 'Rp ' . number_format($item->price + 100000, 2, ',', '.') }}</td>
                    </tr>

                </table>
            </div>


            <div class="text-center">
                <form accept="{{route('review-guide-create', $item->id)}}" method="POST">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <fieldset class="rating">
                            <input type="radio" id="star5" name="rating" value="5" /><label class="full"
                                for="star5" title="Awesome - 5 stars"></label>

                            <input type="radio" id="star4" name="rating" value="4" /><label class="full"
                                for="star4" title="Pretty good - 4 stars"></label>

                            <input type="radio" id="star3" name="rating" value="3" /><label class="full"
                                for="star3" title="Meh - 3 stars"></label>

                            <input type="radio" id="star2" name="rating" value="2" /><label class="full"
                                for="star2" title="Kinda bad - 2 stars"></label>

                            <input type="radio" id="star1" name="rating" value="1" /><label class="full"
                                for="star1" title="Sucks big time - 1 star"></label>

                            <input type="radio" class="reset-option" name="rating" value="reset" />
                        </fieldset>
                    </div>

                    <div class="d-flex justify-content-start">
                        <label for="about">What make you satisfied?</label>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <textarea name="comment" rows="6" class="d-block w50 form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-home-page mt-3 px-5">Submit</button>
                </form>
            </div>
        @endsection
