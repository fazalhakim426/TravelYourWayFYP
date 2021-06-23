<div style="text-align: center">

    <input wire:model="message" type="text">

    <h1>{{ $message }}</h1>

    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
</div>
