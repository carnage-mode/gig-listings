@if (session()->has('message'))
    <div
        class="absolute top-1/3 left-10 bg-green-500 text-white py-2 px-10 rounded-lg"
        x-transition
        x-data="{show: true}"
        x-init="setTimeout(() => show = false, 3000)"
        x-show="show"
    >
        <i class="fa-solid fa-bell"></i>
        {{session('message')}}
    </div>
@endif
