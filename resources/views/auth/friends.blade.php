<x-app-layout>
    <x-slot name="title">Friends</x-slot>
    <div x-data="{ show: false, message: '' }" x-show="show" x-transition
        class="fixed top-5 right-5 z-50 bg-blue-500 text-white px-6 py-4 font-semibold rounded text-lg shadow-lg"
        x-init="Echo.Private('user').listen('MovieAdded', (event) => {
            show = true;
            message = event.user;
            console.log(event);
            setTimeout(() => {
                show = false;
            }, 3000);
        })">
        <p x-text="message"></p>
    </div>
    <div x-init="
    function removeFriend($friend) {
        {{$user->removeFriend()}}}"
     class="py-6 text-center align-center text-white">
        <ul>
            <h1>Your Friends</h1>
            @foreach ($friends as $friend)
                <li>Name: {{ $friend->name }}</li>
                <button @click="removeFriend">Remove Friend</button>
            @endforeach

        </ul>
        <hr>
        <ul>
            <h1>Users you may know</h1>
            @foreach ($users as $user)
                <li>Name: {{ $user->name }}</li>
                <button @click="sendFriendRequest">Send Friend Request</button>
            @endforeach

        </ul>
    </div>
</x-app-layout>
