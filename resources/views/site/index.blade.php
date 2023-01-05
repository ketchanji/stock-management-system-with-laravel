<x-layout>
    <x-navbar />
    {{-- ADD CODE FOR HOME PAGE HERE --}}
    <section class="home">
        <div class="container1">
            <h1>FAST AND EASY <span>WAY TO RENT</span> A CAR</h1>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quasi ullam esse officia quos ex laborum fugit quidem libero dolorum.</P>
        </div>
        <div class="container2">
            <div class="img"></div>
        </div>
    </section>

    <section class="form">
        <form action="">
            <div class="address">
                <label for="address">Address</label>
                <input type="text" id="address" placeholder="ENTER YOUR ADDRESS">
            </div>
            <div class="Pick-up">
                <label for="">Pick-up</label>
                <input type="date" id="Pick-up">
            </div>
            <div class="Time">
                <label for="Time">Time</label>
                <input type="time" id="Time">
            </div>
            <button class="btn">submit</button>

        </form>
    </section>

    <section class="our-service">
        <div class="small-container2">
            <div class="img"></div>
        </div>
        <div class="small-container1">
        <h1>OUR <span>SERVICES</span></h1>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quasi ullam esse officia quos ex laborum fugit quidem libero dolorum.</P>
        </div>
    </section>

</x-layout>