<nav class="container flex justify-between items-center">
		<div class=" w-30 py-5 text-color-secondary font-bold text-3xl">
			<a wire:navigate href="/">
				heikos lilla<span class="text-white">korv</span>fabrik.
			</a>
		</div>
		<div class="">
			<ul class="hidden lg:flex items-center space-x-6">
				<li><a wire:navigate href="/" class=" {{ request()->is('/')?'font-extrabold text-color-secondary':'text-color-white' }}  hover:text-color-secondary ease-in duration-150">Home</a></li>
				<li><a wire:navigate href="/features" class="{{ request()->is('features')?'font-extrabold text-color-secondary':'text-color-white' }} hover:text-color-secondary ease-in duration-150">Duties</a></li>
				<li><a wire:navigate href="/testimonials" class="{{ request()->is('testimonials')?'font-extrabold text-color-secondary':'text-color-white' }} hover:text-color-secondary ease-in duration-150">Team</a></li>
				{{-- <li><a href="#pricing" class="hover:text-color-secondary ease-in duration-150">Pricing</a></li> --}}
				<li><a wire:navigate href="/blog" class="{{ request()->is('blog')?'font-extrabold text-color-secondary':'text-color-white' }} hover:text-color-secondary ease-in duration-150">Events</a></li>
				<li><a wire:navigate href="/contact" class="{{ request()->is('contact')?'font-extrabold text-color-secondary':'text-color-white' }} hover:text-color-secondary ease-in duration-150">Contact</a></li>
				<li><button class="btn">free trail</button></li>
			</ul>
		</div>
		<!-- Mobile Screen -->
		 <div id="hamburger" class="lg:hidden cursor-pointer">
			<i class="fa-solid fa-bars"></i>
		 </div>
		 <div class=" hidden bg-color-primary-dark h-[100vh] absolute inset-0" id="menu">
			<ul class="h-full grid place-items-center py-20">
				<li><a wire:navigate  id="hLink" href="/" class="hover:text-color-secondary ease-in duration-150">Home</a></li>
				<li><a wire:navigate  id="hLink" href="/features" class="hover:text-color-secondary ease-in duration-150">Features</a></li>
				<li><a wire:navigate  id="hLink" href="/testimonials" class="hover:text-color-secondary ease-in duration-150">Testimonials</a></li>
				{{-- <li><a  id="hLink" href="#pricing" class="hover:text-color-secondary ease-in duration-150">Pricing</a></li> --}}
				<li><a wire:navigate  id="hLink" href="/blog" class="hover:text-color-secondary ease-in duration-150">Blog</a></li>
				<li><a wire:navigate id="hLink" href="/contact" class="hover:text-color-secondary ease-in duration-150">Contact</a></li>
				<li><button class="btn">free trail</button></li>
			</ul>
		 </div>

         <script>
            // mobile menu
	const hamburger = document.querySelector('#hamburger');
	const menu = document.querySelector('#menu');
	const hLink = document.querySelectorAll('#hLink');
	const faSolid = document.querySelector(".fa-solid");

	hamburger.addEventListener('click', () => {
		menu.classList.toggle('hidden');
		faSolid.classList.toggle('fa-xmark');
	})

	hLink.forEach(link => {
		link.addEventListener('click', () =>{
			menu.classList.toggle('hidden');
			faSolid.classList.toggle('fa-xmark');
		})
	})


         </script>
	</nav>
