@extends('layouts.app')

@section('content')
    <section class="my-5 dashboard">
        <div class="container">
            <div class="text-left row">
                <div class="mt-4  col-lg-12 col-12 header-wrap">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Bootcamps
                    </h2>
                </div>
            </div>
            <div class="my-5 row">
                @include('components.alert')
                <table class="table">
                    <tbody>
                        @forelse ($checkouts as $checkout)
                            <tr class="align-middle">
                                <td width="18%">
                                    <img src="{{ asset('images/item_bootcamp.png') }}" height="120" alt="">
                                </td>
                                <td>
                                    <p class="mb-2">
                                        <strong>{{ $checkout->Camp->title }}</strong>
                                    </p>
                                    <p>
                                        {{ $checkout->created_at->format('M-d-y') }}
                                    </p>
                                </td>
                                <td>
                                    <strong>{{ $checkout->Camp->price }}</strong>
                                </td>
                                <td>
                                    @if($checkout->is_paid)
                                    <strong class="text-success">Payment Success</strong>
                                    @else
                                    <strong>Waiting for Payment</strong>
                                    @endif
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary">
                                        Contact Support
                                    </a>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="5">
                                <h3>No Data</h3>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
