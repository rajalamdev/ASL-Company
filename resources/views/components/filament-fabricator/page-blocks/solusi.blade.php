@props([
    'title',
    'desc',
    'card',
])
@aware(['page'])

<section class="pt-16 pb-20 bg-gray-200">
    <div class="container mx-auto">
      <div class="flex flex-wrap items-center mb-12">
        <div class="md:w-1/2 mb-6 lg:mb-0 text-center mx-auto">
            <h2 class="text-4xl font-bold font-heading text-gray-800">
                {{-- <span class="text-orange-600">ASL Movers</span> adalah solusi terbaik untuk kebutuhan relokasi Anda --}}
                <span>{{ $title }}</span>
            </h2>
            <p class="mt-4">
                {{ $desc }}
            </p>
        </div>
      </div>
      <div class="flex flex-wrap">
          @foreach ($card as $item)
            <div class="w-full md:w-1/2 lg:w-1/2 px-3 mb-6">
                <div class="pt-8 px-6 pb-6 bg-white text-center rounded shadow h-full">
                    <x-curator-glider
                        class="w-full"
                        media="{{ $item['image'] }}"
                    />
                    <h3 class="my-2 text-2xl font-bold font-heading">{{ $item['title'] }}</h3>
                    <p class="text-sm text-orangeGray-400">{{ $item['desc'] }}</p>
                </div>
            </div>
        @endforeach
      </div>
    </div>
</section>
