<div style="text-align: center">
    <button class="btn btn-primary" wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
    <input type="text" wire:model="name" />
    <div>{{$name}}</div>

</div>
