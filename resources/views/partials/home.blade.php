<div class="container">
    @foreach ($products as $product)
        <div class="product">
            <div class="top-product">
                <img src="{{ $product['frontImage'] }}" alt="">

                <div v-if="product.isInFavorites" class="preferiti">&hearts;</div>
            </div>
            <div class="bottom-product">
                <div class="marca"></div>
                <div class="articolo"></div>
                <div class="prezzi">
                    <div class="prezzo-pieno">€</div>
                </div>
            </div>
        </div>
    @endforeach



</div>
