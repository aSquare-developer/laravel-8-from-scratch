@if(session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed right-3 bottom-3 text-white py-2 px-4 bg-blue-500 rounded-xl text-sm">
        <p>
            {{ session('success') }}
        </p>
    </div>
@endif
