@props([
    'image' => '',
    'title' => '',
    'category' => '',
    'price' => '',
    'originalPrice' => null,
    'rating' => 5,
    'reviews' => 0,
    'badge' => null,
    'badgeColor' => 'green'
])

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 group">
    <div class="relative">
        <img src="{{ $image }}" 
             alt="{{ $title }}" 
             class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
        
        <!-- Badge -->
        @if($badge)
        <div class="absolute top-4 left-4">
            <span class="bg-{{ $badgeColor }}-500 text-white text-xs px-2 py-1 rounded-full font-medium">
                {{ $badge }}
            </span>
        </div>
        @endif
        
        <!-- Quick Actions -->
        <div class="absolute top-3 right-3 flex flex-col gap-1">
            <button class="quick-action-btn w-6 h-6 rounded-full opacity-0 group-hover:opacity-100 transform translate-y-1 group-hover:translate-y-0 flex items-center justify-center">
                <i class="fas fa-heart text-[10px]"></i>
            </button>
            <button class="quick-action-btn w-6 h-6 rounded-full opacity-0 group-hover:opacity-100 transform translate-y-1 group-hover:translate-y-0 flex items-center justify-center" style="transition-delay: 0.05s;">
                <i class="fas fa-eye text-[10px]"></i>
            </button>
        </div>

    </div>
    
    <div class="p-5">
        <!-- Category -->
        <div class="flex items-center mb-2">
            <span class="text-xs text-gray-500 uppercase tracking-wide">{{ $category }}</span>
        </div>
        
        <!-- Product Name -->
        <h3 class="font-semibold text-gray-900 text-base mb-2 group-hover:text-primary transition-colors duration-300">
            {{ $title }}
        </h3>
        
        <!-- Rating -->
        <div class="flex items-center mb-3">
            <div class="flex text-yellow-400">
                @for($i = 1; $i <= 5; $i++)
                    @if($i <= $rating)
                        <i class="fas fa-star text-xs"></i>
                    @elseif($i - 0.5 <= $rating)
                        <i class="fas fa-star-half-alt text-xs"></i>
                    @else
                        <i class="far fa-star text-xs"></i>
                    @endif
                @endfor
            </div>
            @if($reviews > 0)
            <span class="text-gray-500 text-xs ml-2">({{ $reviews }} reviews)</span>
            @endif
        </div>
        
        <!-- Price and Add to Cart -->
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="text-lg font-bold text-primary">${{ $price }}</span>
                @if($originalPrice)
                <span class="text-gray-400 text-xs line-through">${{ $originalPrice }}</span>
                @endif
            </div>
            <button class="btn-primary px-3 py-2 rounded-lg transition duration-300 flex items-center gap-1 group-hover:shadow-lg text-xs">
                <i class="fas fa-shopping-cart text-xs"></i>
                <span class="text-xs font-medium">Add</span>
            </button>
        </div>
    </div>
</div> 