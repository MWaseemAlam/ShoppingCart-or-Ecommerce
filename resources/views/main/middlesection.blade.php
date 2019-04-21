@extends('layouts.app');
@section('content');

<div class="leftsidebar">

@include('main.leftsidebar')

</div>

<div class="MidArea">

  {{--@include('main.MidArea')--}}
  @include($viewname);

</div>
<div class="rightsidebar">




</div>


@endsection
