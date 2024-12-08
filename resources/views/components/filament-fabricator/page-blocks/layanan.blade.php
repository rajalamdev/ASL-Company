@props(['title', 'desc', 'image', 'layanan'])
@aware(['page'])
<section class="relative w-full h-full overflow-hidden py-16 bg-blue-900">
    <x-curator-glider
        class="absolute left-0 right-0 bottom-0 top-0 w-full h-full object-cover"
        media="{{ $image }}"
        />
        <div class="container px-4 mx-auto relative z-10">
        <div class="max-w-lg mx-auto text-center">
            <h2 class="mb-4 text-gray-200 text-4xl font-bold font-heading">{{ $title }}</h2>
          <p class="text-gray-200 leading-loose">
            {{ $desc }}
          </p>
        </div>
    </div>
</section>
<section class="pt-20">
    <div class="container px-4 mx-auto">
      <div class="flex flex-wrap -mx-3">
        @foreach ($layanan as $item)
        <div class="w-1/2 lg:w-1/4 px-3 mb-20">
            @if ($item['icon'])
                <x-curator-glider
                    class="w-16 h-16 sm:w-20 sm:h-20 mx-auto mb-4"
                    media="{{ $mediaId }}"
                    fallback="card_fallback"
                />
            @else
                <img src="https://via.placeholder.com/420x640.jpg" alt="boring fallback image" class="w-16 h-16 sm:w-20 sm:h-20 mx-auto mb-4" />
            @endif
            <h3 class="font-bold font-heading text-center">{{ $item['title'] }}</h3>
          </div>
        @endforeach
      </div>
    </div>
</section>