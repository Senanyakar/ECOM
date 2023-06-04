
<div>
    <input wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">

        <select wire:model="greeting" name="cars" id="cars">
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Audi</option>
        </select>

    {{ $greeting }} {{ $name }} @if ($loud) ! @endif
        {{----------- Events ------------}}
    <button wire:click="resetName($event.target.innertext)">Reset Name</button>
    <button wire:mouseenter="resetName($event.target.innertext)">Reset Name</button>

    {{----------- Events form ------------}}
    <form action="#" wire:submit.prevemt="$set('name','Erkan')">
        <button>Reset Name</button>
    </form>


</div>
