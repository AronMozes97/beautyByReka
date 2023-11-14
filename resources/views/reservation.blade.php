@extends('core.html')

@section('body')
    <style>
        .container {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #salonicBookingWidget {
            width: 100vw !important;
            height: 100vh !important;
            border: 0;

        }
    </style>

    <iframe id="salonicBookingWidget"
            src="https://beautybyreka.salonic.hu/?iframe=true"
            allowfullscreen="true"> <!-- This attribute is for the Fullscreen API -->
    </iframe>
@endsection
