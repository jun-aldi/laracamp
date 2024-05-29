@extends('layouts.app')

@section('content')
    <section class="checkout">
        <div class="container">
            <div class="text-center row pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        YOUR FUTURE CAREER
                    </p>
                    <h2 class="primary-header">
                        Start Invest Today
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <div class="item-bootcamp">
                                <img src="{{ asset('images/item_bootcamp.png') }}" alt="" class="cover">
                                <h1 class="package text-uppercase">
                                    {{ $camp->title }}
                                </h1>
                                <p class="description">
                                    Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai
                                    membangun sebuah projek asli
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-1 col-12"></div>
                        <div class="col-lg-6 col-12">
                            <form action="{{ route('checkout.store', $camp->id) }}" class="basic-form" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label class="form-label">Full Name</label>
                                    <input required name="name" type="text"
                                        class="form-control {{ $errors->has('name') ? 'is_invalid' : '' }}"
                                        aria-describedby="emailHelp" value="{{ Auth::user()->name }}">
                                    @if ($errors->has('name'))
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Email Address</label>
                                    <input required name="email" type="email"
                                        class="form-control {{ $errors->has('email') ? 'is_invalid' : '' }}"
                                        aria-describedby="emailHelp" value="{{ Auth::user()->email }}">
                                    @if ($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Occupation</label>
                                    <input required name="occupation" type="text"
                                        class="form-control {{ $errors->has('occupation') ? 'is_invalid' : '' }}"
                                        aria-describedby="emailHelp" {{-- ?: adalah 'kalau gk ada' --}}
                                        value="{{ old('occupation') ?: Auth::user()->occupation }}">
                                    @if ($errors->has('occupation'))
                                        <p class="text-danger">{{ $errors->first('occupation') }}</p>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Card Number</label>
                                    <input name="card_number" type="number" required
                                        class="form-control {{ $errors->has('card_number') ? 'is_invalid' : '' }} "
                                        aria-describedby="emailHelp" value="{{ old('card_number') ?: '' }}">
                                    @if ($errors->has('card_number'))
                                        <p class="text-danger">{{ $errors->first('card_number') }}</p>
                                    @endif
                                </div>
                                <div class="mb-5">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <label class="form-label">Expired</label>
                                            <input required name="expired" type="month" class="form-control {{ $errors->has('expired') ? 'is_invalid' : '' }}"
                                                aria-describedby="emailHelp" value="{{ old('expired') ?: '' }}">
                                            @if ($errors->has('expired'))
                                                <p class="text-danger">{{ $errors->first('expired') }}</p>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <label class="form-label">CVC</label>
                                            <input required name="cvc" maxlength="3" type="number" class="form-control {{ $errors->has('cvc') ? 'is_invalid' : '' }}"
                                                aria-describedby="emailHelp" value="{{ old('cvc') ?: '' }}">
                                                @if ($errors->has('cvc'))
                                                <p class="text-danger">{{ $errors->first('cvc') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                                <p class="mt-4 text-center subheader">
                                    <img src="{{ asset(' images/ic_secure.svg') }}" alt=""> Your payment is secure
                                    and
                                    encrypted.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
