<x-layout >
@if(isset($bool))
<x-dashboard :voyages="$voyages" :bool="$bool"  />
@else
<x-dashboard :voyages="$voyages" :  />
@endif
</x-layout>