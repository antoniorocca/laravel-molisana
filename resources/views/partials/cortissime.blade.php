 <h2>LE CORTISSIME</h2>
 <div class="container d-flex wrap">
     @foreach ($data as $pasta)
     @if($pasta['tipo'] == 'cortissima')
     <div class="pasta">
         <img src="{{ $pasta['src'] }}" alt="">
         <div class="over d-flex center">
             <h4>{{ $pasta['titolo'] }}</h4>
             <img src="{{ asset('/img/icon.svg') }}" alt="">
         </div>
     </div>
     @endif
     @endforeach
 </div>