@extends('layouts.app')

@section('content')
<section>
 @foreach ($data as $pasta)
     <div class="pasta">
         <img src="{{ $pasta['src'] }}" alt="">
     </div>
 @endforeach

</section>
@endsection