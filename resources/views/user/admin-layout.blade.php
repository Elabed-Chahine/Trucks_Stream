<x-layout>
 @if(isset($users))
    <x-users_dashboard :users="$users" />
@elseif(isset($drivers))
    <x-users_dashboard :drivers="$drivers" />
    @endif
</x-layout>
