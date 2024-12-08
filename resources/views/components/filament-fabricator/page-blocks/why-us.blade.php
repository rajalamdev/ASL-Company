@props(['reasons', 'title'])
@aware(['page'])
<section class="py-20 bg-gray-100 w-full">
    {{-- <h2 class="text-center text-4xl font-bold">Kenapa Memilih <span class="text-orange-600">ASL</span>?</h2> --}}
    <h2 class="text-center text-4xl font-bold">{{ $title }}</h2>
    <div class="mx-auto overflow-hidden">
        @foreach ($reasons as $index => $reason)
        <div class="flex pt-20 gap-4 container {{ $index % 2 === 0 ? 'lg:flex-row flex-col' : 'lg:flex-row-reverse flex-col' }}">
            <div class="max-w-[600px]">
                <h3 class="text-3xl font-semibold mb-4">{{ $reason['title'] }}</h3>
                <p>{{ $reason['desc'] }}</p>
            </div>
            <div class="flex-1 flex {{ $index % 2 === 0 ? 'justify-start' : 'justify-end' }}"></div>
                @if ($reason['image'])
                    <x-curator-glider
                        media="{{ $reason['image'] }}"
                    />
                @else
                    <img src="https://via.placeholder.com/420x640.jpg" alt="boring fallback image" class="w-[500px] h-80 mx-auto mb-4" />
                @endif
            </div>
        </div>
        @endforeach
    </div>
</section>
