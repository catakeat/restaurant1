<div>
   <form action="/welcome1"  wire:submit="adaugaCitat">
      @csrf
      <input type="text" name="citat" wire:model.debounce.150ms="citat">
      <input type="submit" value="Go">
   </form>


   {{--@foreach($citate as $citat)--}}
   @if(!empty($citat))
   <textarea>{{$citat[0]->body}}</textarea><br><br>
   @else
   citat empty
   @endif
   {{-- @endforeach   --}}

</div>