@if (session()->has('message'))
    <div
        class="fixed top-8 z-20 mx-auto bg-black text-white py-2 px-10 rounded-lg"
        x-transition
        x-data="{show: true}"
        x-init="setTimeout(() => show = false, 3000)"
        x-show="show"
    >
        <i class="fa-solid fa-bell"></i>
        Notification:
        {{session('message')}}
    </div>
@endif
