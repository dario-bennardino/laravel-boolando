<div class="container">
    <div class="product">
        <div class="top-product">
            <img :src="" :alt="">

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
</div>
