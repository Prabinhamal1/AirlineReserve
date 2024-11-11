@extends('frontend.layout.master')
@section('fronts-content')
    @include('frontend.body.info', ['flights' => $flights, 'class' => $class, 'passengerCount' => $passengerCount])
@endsection