<x-layout>
    <x-carousel />





    <x-focus :locations="$locations" />

<div >
    @if ($shipments->count() > 0)
              <h4 class="px-7 py-3 bg-gray-900 text-center  font-bold">All Our available shipments</h4>

        <x-grid :shipments="$shipments" />
        {{ $shipments->links() }}
    @else
        <h4 class="px-7 py-3 bg-red-800 text-center  font-bold">NO shipments are available</h4>
    @endif
</div>








</x-layout>
