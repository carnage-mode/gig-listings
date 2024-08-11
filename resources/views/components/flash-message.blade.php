@if (session()->has('message'))
    <div
        class="fixed top-4 z-20 rounded-full bg-green-500 px-5 py-3 text-white"
        x-data="{show: true}"
        x-init="setTimeout(() => show = false, 3000)"
        x-show="show"
    >
        {{session('message')}}
    </div>
@endif
