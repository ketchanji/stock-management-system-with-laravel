<x-layout>
    <x-navbar />
    {{-- ADD CODE FOR HOME PAGE HERE --}}
    <section class="home" id="home">

        <div class="content">
            <h3>we've got all <span>great</span> models for your</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
            <a href="#" class="btn">Book now</a>
        </div>

    </section>

    <section class="products" id="products">

        <h1 class="heading"> Our <span>vehicles</span> </h1>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="" alt="">
                    <h3>Old Luxury Car</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <a href="/contact" class="btn">Book now</a>
                </div>
                <div class="swiper-slide box">
                    <img src="image/product-2.png" alt="">
                    <h3>Old Luxury Car</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <a href="/contact" class="btn">Book now</a>
                </div>
                <div class="swiper-slide box">
                    <img src="image/product-3.png" alt="">
                    <h3>Luxury Car</h3>
                    <div class="price"> $4.99/- - 10.99/- </div>
                    <a href="/contact" class="btn">Book now</a>
                </div>

            </div>

        </div>
    </section>
</x-layout>