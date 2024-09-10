<section id="testimonial">
    <div class="container py-20">
        <div class="text-center m-auto mb-20 md:w-1/2">
            <h4 class=" font-bold text-color-secondary mb-4">User Review</h4>
            <h1 class="title">What Clients Say About Us</h1>
        </div>
        {{-- review container --}}
        <div class="mt-8">
            <div class="flex items-center justify-center flex-wrap">
                <img src="{{asset('img/user1.jpg')}}" alt="bild user 1" class=" h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic active-pic" onclick="showRewiew()">
                <img src="{{asset('img/user2.jpg')}}" alt="bild user 2" class=" h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showRewiew()">
                <img src="{{asset('img/user3.jpg')}}" alt="bild user 3" class=" h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showRewiew()">
                <img src="{{asset('img/user4.jpg')}}" alt="bild user 4" class=" h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showRewiew()">
                <img src="{{asset('img/user5.jpg')}}" alt="bild user 5" class=" h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showRewiew()">
            </div>
            <div class="grid place-items-center text-center m-auto md:w-4/5 min-h-[40vh]">
                <div class="user-text active-text">
                    <p class="md:text-2xl mb-6">This should be used to tell a story and include any testimonials you might have about your product or service for your clients</p>
                    <h4 class="font-bold text-color-secondary mb-1">Markin Nesus</h4>
                    <p>IOS developer</p>
                </div>
                <div class="user-text">
                    <p class="md:text-2xl mb-6">This should be used to tell a story and include any testimonials you might have about your product or service for your clients</p>
                    <h4 class="font-bold text-color-secondary mb-1">Vera Duncan</h4>
                    <p>Flutter developer</p>
                </div>
                <div class="user-text">
                    <p class="md:text-2xl mb-6">This should be used to tell a story and include any testimonials you might have about your product or service for your clients</p>
                    <h4 class="font-bold text-color-secondary mb-1">Pirtle Karol</h4>
                    <p>Android developer</p>
                </div>
                <div class="user-text">
                    <p class="md:text-2xl mb-6">This should be used to tell a story and include any testimonials you might have about your product or service for your clients</p>
                    <h4 class="font-bold text-color-secondary mb-1">Mark Joe</h4>
                    <p>React developer</p>
                </div>
                <div class="user-text">
                    <p class="md:text-2xl mb-6">This should be used to tell a story and include any testimonials you might have about your product or service for your clients</p>
                    <h4 class="font-bold text-color-secondary mb-1">Leila Domniuc</h4>
                    <p>Angular developer</p>
                </div>

            </div>
        </div>
    </div>
<script >

     const userTexts = document.getElementsByClassName("user-text");
     const userPics = document.getElementsByClassName("user-pic");

     function showRewiew() {
         for (userPic of userPics) {
             userPic.classList.remove("active-pic");
         }
         for (userText of userTexts) {
             userText.classList.remove("active-text");
         }

         let i = Array.from(userPics).indexOf(event.target);

         userPics[i].classList.add('active-pic');
         userTexts[i].classList.add('active-text');
     }
</script>
</section>
