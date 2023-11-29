<div class="container m-8 mx-auto text-3xl">
    <h1 class=" text-green-500">{{ $count }}</h1>
 
    <button wire:click="increment" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">+</button>
 
    <button wire:click="decrement" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">-</button>
</div>