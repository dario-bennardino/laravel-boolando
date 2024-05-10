<div class="container">
    @foreach ($products as $product)
        <div class="product">
            <div class="top-product">
                <img src="{{ $product['frontImage'] }}" alt="{{ $product['name'] }}">

                <div v-if="{{ $product['isInFavorites'] }}" class="preferiti">&hearts;</div>
            </div>
            <div class="bottom-product">
                <div class="marca">{{ $product['brand'] }}</div>
                <div class="articolo">{{ $product['name'] }}</div>
                <div class="prezzi">
                    <div class="prezzo-pieno">{{ $product['price'] }}€</div>
                </div>
            </div>
        </div>
    @endforeach

</div>
