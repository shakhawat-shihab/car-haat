 @props(['color' => 'white', 'footer' => 'Default Footer'])

 <div class="card card-text-{{ $color }}" {{ $attributes }}>
     <div class="card-header">
         <h2>{{ $title }}</h2>
     </div>
     @if ($slot->isEmpty())
         <p>Please provide some content</p>
     @else
         {{ $slot }}
     @endif

     <div class="card-footer">
         <p>{{ $footer }}</p>
     </div>
 </div>
