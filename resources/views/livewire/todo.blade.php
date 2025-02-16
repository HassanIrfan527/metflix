<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4 text-white">Todo List</h1>

    <div class="mb-4">
        <input type="text" class="border p-2 w-full" placeholder="Add a new todo" wire:model="todoText" wire:keydown.enter="addTodo">
        <button class="bg-blue-500 text-white p-2 mt-2" wire:click="addTodo">Add Todo</button>
    </div>

    <ul>
        @foreach($todos as $todo)
            <li class="flex justify-between items-center mb-2">
                <input type="checkbox" class="mr-2" wire:change="toggleTodo({{ $todo->id }})" {{ $todo->completed ? 'checked' : '' }}>
                <input type="text" class="border-none p-2 w-full text-white bg-transparent {{$todo->completed ? 'line-through':''}}" value="{{ $todo->todo }}" wire:blur="updateTodo({{ $todo->id }}, $event.target.value)">
                <button class="bg-red-500 text-white p-2 ml-2" wire:click="delTodo({{ $todo->id }})">Delete</button>
            </li>
        @endforeach

    </ul>
</div>
