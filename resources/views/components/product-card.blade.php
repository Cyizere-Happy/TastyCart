@props([
    'image' => '',
    'title' => '',
    'category' => '',
    'price' => '',
    'originalPrice' => null,
    'rating' => 5,
    'reviews' => 0,
    'badge' => null,
    'badgeColor' => 'green',
    'compact' => false,
    'description' => '',
    'nutrition' => ''
])

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 group">
    <div class="relative">
        <img src="{{ $image }}" 
             alt="{{ $title }}" 
             class="w-full @if($compact) h-28 @else h-48 @endif object-cover group-hover:scale-105 transition-transform duration-500">
        
        <!-- Badge -->
        @if($badge)
        <div class="absolute top-2 left-2">
            <span class="bg-{{ $badgeColor }}-500 text-white text-[10px] px-2 py-0.5 rounded-full font-medium">
                {{ $badge }}
            </span>
        </div>
        @endif
        
        <!-- Quick Actions -->
        @unless($compact)
        <div class="absolute top-3 right-3 flex flex-col gap-1">
            <button class="quick-action-btn w-6 h-6 rounded-full opacity-0 group-hover:opacity-100 transform translate-y-1 group-hover:translate-y-0 flex items-center justify-center"
                @click.prevent="$dispatch('quick-view', {
                    image: '{{ $image }}',
                    title: '{{ $title }}',
                    category: '{{ $category }}',
                    price: '{{ $price }}',
                    originalPrice: '{{ $originalPrice }}',
                    rating: '{{ $rating }}',
                    reviews: '{{ $reviews }}',
                    badge: '{{ $badge }}',
                    badgeColor: '{{ $badgeColor }}',
                    description: @js($description),
                    nutrition: @js($nutrition)
                })">
                <i class="fas fa-eye text-[10px]"></i>
            </button>
            <button class="quick-action-btn w-6 h-6 rounded-full opacity-0 group-hover:opacity-100 transform translate-y-1 group-hover:translate-y-0 flex items-center justify-center" style="transition-delay: 0.05s;"
                @click.prevent="$dispatch('rate-product', {
                    title: '{{ $title }}',
                    image: '{{ $image }}',
                    category: '{{ $category }}'
                })">
                <i class="fas fa-heart text-[10px]"></i>
            </button>
        </div>
        @endunless
    </div>
    
    <div class="@if($compact) p-3 @else p-5 @endif">
        <!-- Category -->
        <div class="flex items-center mb-1">
            <span class="@if($compact) text-[10px] @else text-xs @endif text-gray-500 uppercase tracking-wide">{{ $category }}</span>
        </div>
        
        <!-- Product Name -->
        <h3 class="font-semibold text-gray-900 @if($compact) text-xs mb-1 @else text-base mb-2 @endif group-hover:text-primary transition-colors duration-300">
            {{ $title }}
        </h3>
        
        <!-- Rating -->
        <div class="flex items-center @if($compact) mb-1 @else mb-3 @endif">
            <div class="flex text-yellow-400">
                @for($i = 1; $i <= 5; $i++)
                    @if($i <= $rating)
                        <i class="fas fa-star text-[10px] @if(!$compact) text-xs @endif"></i>
                    @elseif($i - 0.5 <= $rating)
                        <i class="fas fa-star-half-alt text-[10px] @if(!$compact) text-xs @endif"></i>
                    @else
                        <i class="far fa-star text-[10px] @if(!$compact) text-xs @endif"></i>
                    @endif
                @endfor
            </div>
            @if($reviews > 0 && !$compact)
            <span class="text-gray-500 text-xs ml-2">({{ $reviews }} reviews)</span>
            @endif
        </div>
        
        <!-- Price and Add to Cart -->
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="@if($compact) text-base @else text-lg @endif font-bold text-primary">${{ $price }}</span>
                @if($originalPrice)
                <span class="text-gray-400 text-xs line-through">${{ $originalPrice }}</span>
                @endif
            </div>
            <button class="btn-primary @if($compact) px-2 py-1 text-xs @else px-3 py-2 text-xs @endif rounded-lg transition duration-300 flex items-center gap-1 group-hover:shadow-lg">
                <i class="fas fa-shopping-cart text-xs"></i>
                <span class="text-xs font-medium">Add</span>
            </button>
        </div>
    </div>
</div> 