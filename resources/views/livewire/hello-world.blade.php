<div>
    <input wire:model.live="title" type="text">
    <input wire:model.live="loud" type="checkbox">
    <select wire:model.live="greetings">
        <option>Hello</option>
        <option>Adios</option>
        <option>Bue</option>
    </select>

    <h1>{{ $greetings }} {{ strtoupper($title) }} @if($loud) How are u? @endif</h1>
</div>
