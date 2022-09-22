<div class="dropdown">
  
<div class="flex space-x-2 justify-center">
  <button type="button" class=" px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center">
    Notifications
    <span class="inline-block py-1 px-1.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded ml-2">  ? </span>
  </button>
</div>

  <div tabindex="0" class="w-64 p-2 shadow card card-compact dropdown-content bg-primary text-primary-content">
    <div class="card-body flex flex-col">
      <h3 class="card-title text-lg w-full">newest notifications! :</h3>
<hr>
      <?php   
      

      /*


 $shipments=auth()->user()->shipments;
      if($shipments->count()>0){
        foreach($shipments as $shipment)
        {
        $users = DB::table('drivers')
            ->join('voyages', function ($join) {
            $join->on('drivers.id', '=', 'voyages.driverid')
                 ->where('voyages.shipment_id', '=', $shipment->id);
        })
            ->select('drivers.*')
            ->get();
   

      */
      $shipments=auth()->user()->shipments;
      
         
      if($shipments->count() >0 ){
        foreach($shipments as $shipment)
        {
            
            $voyages= $shipment->voyage;
           
      ?>


 @if($voyages ?? false)

            
    <a href="/drivers/driver/{{ $voyages->owner->id }}"class=" text-sm w-full">   {{$voyages->owner->name}} will drive your shipment of ref {{$voyages->shipment->id}}  </a>
<hr class=" h-3">

@endif
    
    
      <?php }} ?>
 

    </div>
  </div>
</div>





 
    