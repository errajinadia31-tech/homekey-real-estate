<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>HomeKey </title>    
</head>

<body class="bg-black text-white">
    <header class="flex justify-between items-center px-12  z-40 absolute w-full ">
        <div>
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-[7rem] h-[7rem]">
            </a>
        </div>

        <nav class="flex gap-12 text-lg font-semibold tracking-widest uppercase ">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Services</a>
            <a href="">Contact</a>
        </nav>

        <div  class="flex gap-4 text-lg font-light tracking-widest uppercase ">
            <a href="{{ route('login') }}" class=" border border-2 border-[#BF8028] text-[#BF8028] font-semibold px-8 py-2 rounded-full border-shadow-black hover:bg-[#BF8028] hover:text-white transition duration-500">Log in</a>
            <a href="{{ route('register') }}" class="text-white font-semibold bg-[#BF8028] px-8 border border-2 border-[#BF8028]  rounded-full py-2 hover:bg-transparent hover:text-[#BF8028] transition duration-300">Register</a>
        </div>
    </header>

    {{-- hero section --}}
<!-- HERO SECTION -->
<section class="relative w-full h-[90vh]">

    <!-- Overlay sombre -->
    <div class="bg-black/60 absolute inset-0 h-full w-full z-10"></div>

    <!-- Contenu texte du Hero -->
    <div class="absolute inset-0 z-20 flex flex-col items-center justify-center text-center text-white px-4">
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6" data-aos="fade-up" data-aos-duration="1000">
            Your Next Chapter <br>
            <span class="text-[#BF8028]">Starts at Home.</span>
        </h1>

        <div class="w-35 md:w-[15rem] h-[1px] bg-[#a56720] mb-6" data-aos="fade-right" data-aos-duration="3000"></div>

        <p class="text-lg md:text-xl text-gray-200 max-w-2xl leading-relaxed mb-8" data-aos="fade-down" data-aos-duration="1000">
            Explore extraordinary properties and discover a home
            that matches your lifestyle, aspirations, and dreams.
        </p>

        <a href="{{ route('register') }}"
           class="bg-[#BF8028] hover:bg-[#a56720] text-white text-xl font-bold px-12 py-3 rounded-full transition duration-300 shadow-lg">
            Get Started
        </a>
    </div>

    <!-- Vidéo de fond -->
    <div class="relative h-full w-full">
        <video
            src="{{ asset('videos/home_vid.mp4') }}"
            autoplay
            muted
            loop
            playsinline
            class="h-full w-full object-cover">
        </video>
    </div>

</section>

<div class="max-w-6xl mx-auto px-4 relative z-30 -mt-16 mb-20" data-aos="fade-up" data-aos-duration="1000">
    <div class="bg-[#121417]/90 backdrop-blur-md border border-white/10 rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-2xl">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-0 items-center">

            <!-- STAT 1 -->
            <div class="flex items-center justify-center gap-4 lg:border-r border-white/10 px-4">
                <i class="fas fa-award text-3xl md:text-4xl text-[#BF8028]"></i>
                <div class="text-left">
                    <span class="block text-2xl md:text-3xl font-serif font-bold text-[#c5a880] leading-none">15+</span>
                    <span class="text-xs md:text-sm text-gray-300 font-light mt-1 block">Years of Experience</span>
                </div>
            </div>

            <!-- STAT 2 -->
            <div class="flex items-center justify-center gap-4 lg:border-r border-white/10 px-4">
                <i class="fas fa-building text-3xl md:text-4xl text-[#BF8028]"></i>
                <div class="text-left">
                    <span class="block text-2xl md:text-3xl font-serif font-bold text-[#c5a880] leading-none">320+</span>
                    <span class="text-xs md:text-sm text-gray-300 font-light mt-1 block">Projects Completed</span>
                </div>
            </div>

            <!-- STAT 3 -->
            <div class="flex items-center justify-center gap-4 lg:border-r border-white/10 px-4">
                <i class="fas fa-users text-3xl md:text-4xl text-[#BF8028]"></i>
                <div class="text-left">
                    <span class="block text-2xl md:text-3xl font-serif font-bold text-[#c5a880] leading-none">98%</span>
                    <span class="text-xs md:text-sm text-gray-300 font-light mt-1 block">Client Satisfaction</span>
                </div>
            </div>

            <!-- STAT 4 -->
            <div class="flex items-center justify-center gap-4 px-4">
                <i class="fas fa-medal text-3xl md:text-4xl text-[#BF8028]"></i>
                <div class="text-left">
                    <span class="block text-2xl md:text-3xl font-serif font-bold text-[#c5a880] leading-none">25+</span>
                    <span class="text-xs md:text-sm text-gray-300 font-light mt-1 block">Industry Awards</span>
                </div>
            </div>

        </div>

    </div>
</div>


<!-- ABOUT SECTION -->
<section class="py-24 px-6 md:px-12 bg-[#121417] text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- LEFT COLUMN: Images & Floating Card -->
        <div class="lg:col-span-6 relative" data-aos="fade-right" data-aos-duration="1000">
            <!-- Main Big Image -->
            <div class="relative rounded-3xl overflow-hidden border border-white/10 shadow-2xl">
                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&q=80&w=1000" alt="Luxury Villa" class="w-full h-[450px] object-cover hover:scale-105 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            </div>

            <!-- Floating Badge Card -->
            <div class="absolute -bottom-8 -right-6 md:right-8 bg-[#1a1d22]/90 backdrop-blur-md border border-[#BF8028]/40 p-6 rounded-2xl shadow-2xl hidden sm:flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-[#BF8028]/20 flex items-center justify-center text-[#BF8028] text-2xl font-bold">
                    <i class="fas fa-gem"></i>
                </div>
                <div>
                    <span class="block text-xl font-serif font-bold text-[#c5a880]">100%</span>
                    <span class="text-xs text-gray-300">Verified Luxury Properties</span>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN: Text & Details -->
        <div class="lg:col-span-6 flex flex-col items-start" data-aos="fade-left" data-aos-duration="1000">
            <span class="text-[#BF8028] text-xs font-bold uppercase tracking-[0.2em] mb-3 px-3 py-1 bg-[#BF8028]/10 rounded-full border border-[#BF8028]/20">
                ABOUT HOMEKEY
            </span>

            <h2 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-6">
                Redefining Luxury Living & <span class="text-[#BF8028]">Prestige Real Estate</span>
            </h2>

            <p class="text-gray-300 text-sm md:text-base leading-relaxed font-light mb-6">
                At HomeKey, we don't just sell properties; we curate extraordinary lifestyles. With decades of combined expertise in high-end real estate, our agency provides discreet, bespoke, and unparalleled service to discerning clients worldwide.
            </p>

            <!-- Features list -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8 w-full">
                <div class="flex items-center gap-3">
                    <i class="fas fa-check-circle text-[#BF8028]"></i>
                    <span class="text-sm text-gray-200">Exclusive Off-Market Access</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fas fa-check-circle text-[#BF8028]"></i>
                    <span class="text-sm text-gray-200">Personalized VIP Advisory</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fas fa-check-circle text-[#BF8028]"></i>
                    <span class="text-sm text-gray-200">Global Network & Reach</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fas fa-check-circle text-[#BF8028]"></i>
                    <span class="text-sm text-gray-200">Absolute Confidentiality</span>
                </div>
            </div>

            <!-- Button -->
            <a href="#" class="inline-flex items-center gap-3 px-8 py-4 bg-[#BF8028] hover:bg-[#a56720] text-black font-bold text-xs tracking-widest uppercase rounded-xl transition duration-300 shadow-xl shadow-[#BF8028]/20 group">
                Discover Our Story <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
            </a>
        </div>

    </div>
</section>
{{-- section services --}}
  
<section>

    <div class="flex flex-col items-center justify-center text-center text-white mt-[4rem] mb-[2rem]">
         <span class="text-amber-500 text-s uppercase font-bold tracking-widest px-3 py-1 bg-amber-500/10 rounded-full border border-amber-500/20">
    What We Offer
  </span>
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-2 " data-aos="fade-up" data-aos-duration="1000">
                Our Services
            </h1>
            <div class="w-35 md:w-[15rem] h-[1px] bg-[#a56720] mb-6 "  data-aos="fade-right" data-aos-duration="3000" ></div>
        </div>

  <div class="lg:col-span-8 flex flex-col md:flex-row items-center justify-between gap-4 p-6 w-full mb-24" data-aos="fade-up" data-aos-duration="1000">
    
    {{-- Card 1 --}}
    <div class="flex-1 flex flex-col items-center justify-center text-center px-2">
        <i class="fas fa-house-circle-check text-4xl mb-4 text-[#BF8028]"></i>
        <h2 class="text-lg font-semibold mb-2 text-white">Luxury Sales</h2>
        <p class="text-gray-400 text-s font-light leading-relaxed">
            Exclusive off-market residences and high-end properties.
        </p>
    </div>

    <!-- Line 1 -->
    <div class="hidden md:block w-[1px] h-32 bg-[#a56720]/40"></div>

    {{-- Card 2 --}}
    <div class="flex-1 flex flex-col items-center justify-center text-center px-2">
        <i class="fas fa-key text-4xl mb-4 text-[#BF8028]"></i>
        <h2 class="text-lg font-semibold mb-2 text-white">Property Rental</h2>
        <p class="text-gray-400 text-xs font-light leading-relaxed">
            Premium long-term leases and luxury vacation homes.
        </p>
    </div>

    <!-- Line 2 -->
    <div class="hidden md:block w-[1px] h-32 bg-[#a56720]/40"></div>

    {{-- Card 3 --}}
    <div class="flex-1 flex flex-col items-center justify-center text-center px-2">
        <i class="fas fa-chart-line text-4xl mb-4 text-[#BF8028]"></i>
        <h2 class="text-lg font-semibold mb-2 text-white">Investment Advisory</h2>
        <p class="text-gray-400 text-xs font-light leading-relaxed">
            Data-driven strategies to maximize yields and portfolio.
        </p>
    </div>

    <!-- Line 3 -->
    <div class="hidden md:block w-[1px] h-32 bg-[#a56720]/40"></div>

    {{-- Card 4 --}}
    <div class="flex-1 flex flex-col items-center justify-center text-center px-2">
        <i class="fas fa-couch text-4xl mb-4 text-[#BF8028]"></i>
        <h2 class="text-lg font-semibold mb-2 text-white">Interior Styling</h2>
        <p class="text-gray-400 text-s font-light leading-relaxed">
            Bespoke interior design to enhance property appeal.
        </p>
    </div>

    <!-- Line 4 -->
    <div class="hidden md:block w-[1px] h-32 bg-[#a56720]/40"></div>

    {{-- Card 5 --}}
    <div class="flex-1 flex flex-col items-center justify-center text-center px-2">
        <i class="fas fa-clipboard-check text-4xl mb-4 text-[#BF8028]"></i>
        <h2 class="text-lg font-semibold mb-2 text-white">Property Management</h2>
        <p class="text-gray-400 text-s font-light leading-relaxed">
            Seamless 24/7 care and tenant handling.
        </p>
    </div>

</div>
    </div>
</section>























<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>
</body>
</html>