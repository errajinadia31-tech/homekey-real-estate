<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>HomeKey | LogIn</title>
</head>
<body>

<div class="flex justify-between items-center h-screen w-full">

    <div class="bg-black/40 absolute h-screen w-[50%]"></div>    
    <div class="h-screen w-[50%] ">
            <div class="absolute inset-0 bg-black/30 flex flex-col justify-center p-12 text-white">
    <h1 class="text-3xl md:text-4xl font-light tracking-wide leading-tight drop-shadow-md">
        Find Your Dream Apartment <br>
        <span class="font-bold ">With <span class="font-[Eagle-Lake] text-5xl text-amber-500">HomeKey</span></span>
    </h1>
    <p class="mt-3 text-l text-gray-100 font-light tracking-widest uppercase opacity-90">
        Luxury Living Starts Here
    </p>
</div>
        <video src="{{ asset('videos/video-bg.mp4') }}" autoplay muted loop class="h-full w-[200%] object-cover"></video>
    </div>


    <div class="h-screen w-[50%] flex flex-col items-center justify-center text-[#BF8028] ">

        <div class="z-10">
            <a href="{{ route('home') }}">   
                         <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-35 h-35 object-contain mb-4">
            </a>
        </div>
        <div  class="h-screen w-[50%] absolute">
            <img src="{{ asset('images/bg.jpg') }}" alt="" class="h-full w-[200%] object-cover">
        </div>

         <form action="" method="POST" class="z-10">
    @csrf    


<label for="email">Email</label>
               <div class="flex flex-col ">

            <input type="email" name="email" id="email" required placeholder="example@domain.com"
             class="border border-[#BF8028] rounded-md p-2 mb-4 mt-4 w-[25rem] bg-white/40 text-white">
        </div>  


        <label for="password">Password</label>
       <div class="flex flex-col ">
            <input type="password" name="password" id="password" required placeholder="**********" 
            class="border border-[#BF8028] rounded-md p-2 mb-4 mt-4 w-[25rem] bg-white/40 text-white">
        </div>

    
            <div class=" flex justify-end text-white/60">
            <a href="{{ route('password.request') }}" class="text-white hover:underline"> Forgot password?</a>
        </div>  
    
        <button type="submit" 
                        class="w-full bg-[#BF8028] text-black font-extrabold py-3.5 rounded-2xl mt-4  flex items-center justify-center gap-2 mt-2 uppercase tracking-widest text-[15px] cursor-pointer">
                        <span class="text-white ">LogIn</span>
                        <i class="fa-solid fa-user-plus text-[10px]"></i>
                    </button>

          <div class="flex justify-between items-center mt-8 mb-8 text-l text-white/60">
            <p>Don't have an account ?</p>
            <a href="{{ route('register') }}" class="text-white hover:underline"> Register</a>
        </div>           
        
    </form>
    </div>
</div>



</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SmartSol | Inscription</title>
    <link rel="shortcut icon" href="{{asset('images/logo1.png')}}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[url({{ asset('images/image_hero.jpg') }})] bg-cover bg-center font-sans antialiased text-white selection:bg-[#FBB108] selection:text-black h-screen overflow-hidden relative">

<div class="absolute inset-0 bg-black/60 backdrop-blur-[2px] z-0"></div>


<header class="header-nav absolute top-8 left-0 w-full z-20 flex justify-center px-4 transition-all">
    <nav class="flex items-center gap-2 bg-white/5 backdrop-blur-md border border-white/10 px-2 py-1.5 rounded-full shadow-2xl">
        <a href="{{ route('welcome') }}" class="px-4 md:px-6 py-2 rounded-full text-[10px] md:text-xs font-bold uppercase tracking-widest text-white hover:bg-white hover:text-black transition-all">Home</a>
        <div class="w-[1px] h-4 bg-white/10"></div>
        <a href="{{ route('login') }}" class="px-4 md:px-6 py-2 rounded-full text-[#FBB108] text-[10px] md:text-xs font-bold uppercase tracking-widest hover:bg-[#FBB108] hover:text-black transition-all">Se connecter</a>
    </nav>
</header>

    <div class="h-full relative z-10 flex items-center justify-center px-4">
        
        <div class="absolute top-0 -left-4 w-64 h-64 bg-[#FBB108] rounded-full mix-blend-multiply filter blur-[100px] opacity-10 animate-blob"></div>
        <div class="absolute bottom-0 -right-4 w-64 h-64 bg-yellow-600 rounded-full mix-blend-multiply filter blur-[100px] opacity-10 animate-blob animation-delay-2000"></div>

        <div class="relative w-full max-w-[500px]">
            
            <div class="p-6 md:p-8 ">
                
                <div class="flex flex-col items-center mb-6">
                    <div class="w-10 h-10 mb-2 mt-12">
                        <img src="{{ asset('images/logo1.png') }}" alt="Logo" class="w-full h-full object-contain text-center">
                    </div>
                    <p class="text-white/60 text-[9px] uppercase tracking-[0.25em] text-center">Créer un compte</p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-3.5">
                    @csrf

                    <div class="space-y-1">
                        <label class="text-[10px] font-bold text-white uppercase tracking-widest ml-1">Nom Complet</label>
                        <div class="relative group">
                            <i class="fa-regular fa-user absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 group-focus-within:text-[#FBB108] transition-colors text-xs"></i>
                            <input type="text" name="name" value="{{ old('name') }}" required autofocus
                                class="w-full bg-black/40 border border-white/5 rounded-2xl py-3 pl-11 pr-4 text-sm focus:border-[#FBB108]/50 focus:ring-0 transition-all outline-none placeholder:text-white/30 text-white">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>

                    <div class="space-y-1">
                        <label class="text-[10px] font-bold text-white uppercase tracking-widest ml-1">Identifiant</label>
                        <div class="relative group">
                            <i class="fa-regular fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 group-focus-within:text-[#FBB108] transition-colors text-xs"></i>
                            <input type="email" name="email" value="{{ old('email') }}" required  placeholder="nom@exemple.com"
                                class="w-full bg-black/40 border border-white/5 rounded-2xl py-3 pl-11 pr-4 text-sm focus:border-[#FBB108]/50 focus:ring-0 transition-all outline-none placeholder:text-white/30 text-white">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>
                    <div class="space-y-1">
    <label class="text-[10px] font-bold text-white uppercase tracking-widest ml-1">Numéro de téléphone</label>
    <div class="relative group">
        <i class="fa-solid fa-phone absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 group-focus-within:text-[#FBB108] transition-colors text-xs"></i>
        <input type="text" name="phone_number" value="{{ old('phone_number') }}" required placeholder="Ex: +212612345678"
            class="w-full bg-black/40 border border-white/5 rounded-2xl py-3 pl-11 pr-4 text-sm focus:border-[#FBB108]/50 focus:ring-0 transition-all outline-none placeholder:text-white/30 text-white">
    </div>
    <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
</div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="space-y-1">
                            <label class="text-[10px] font-bold text-white uppercase tracking-widest ml-1">Mot de passe</label>
                            <div class="relative group">
                                <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 group-focus-within:text-[#FBB108] transition-colors text-xs"></i>
                                <input type="password" name="password" required placeholder="********"
                                    class="w-full bg-black/40 border border-white/5 rounded-2xl py-3 pl-11 pr-4 text-sm focus:border-[#FBB108]/50 focus:ring-0 transition-all outline-none placeholder:text-white/30 text-white">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>
                        <div class="space-y-1">
                            <label class="text-[10px] font-bold text-white uppercase tracking-widest ml-1">Confirmation</label>
                            <div class="relative group">
                                <i class="fa-solid fa-check-double absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 group-focus-within:text-[#FBB108] transition-colors text-xs"></i>
                                <input type="password" name="password_confirmation" required placeholder="********"
                                    class="w-full bg-black/40 border border-white/5 rounded-2xl py-3 pl-11 pr-4 text-sm focus:border-[#FBB108]/50 focus:ring-0 transition-all outline-none placeholder:text-white/30 text-white">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>
                    </div>

                    <button type="submit" 
                        class="w-full bg-[#FBB108] text-black font-extrabold py-3.5 rounded-2xl shadow-[0_10px_20px_rgba(251,177,8,0.15)] hover:shadow-[#FBB108]/30 transition-all active:scale-[0.98] flex items-center justify-center gap-2 mt-2 uppercase tracking-widest text-[11px]">
                        <span>S'INSCRIRE</span>
                        <i class="fa-solid fa-user-plus text-[10px]"></i>
                    </button>
                </form>

                <div class="mt-8 text-center border-t border-white/5 pt-6">
                    <p class="text-gray-500 text-[9px] uppercase tracking-[0.2em]">Déjà inscrit ?</p>
                    <a href="{{ route('login') }}" class="text-[#FBB108] font-bold text-xs uppercase tracking-wider hover:underline transition inline-block mt-1">Se connecter</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}


        {{-- <header>
        <nav>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('home') }}">Back</a>
        </nav>
    </header>

<div class=" mt-[2rem] h-[40rem] flex flex-col items-center justify-center border w-[40rem]  border-transparent rounded-lg shadow-lg bg-black/40 backdrop-blur-md p-8 mx-auto text-white font-bold">
    
    <form action="" method="POST">
    @csrf    

        <label for="name" class="">Name</label>

       <div class="flex flex-col">
    <input type="text" name="name" id="name" required 
class="border border-gray-300 rounded-md p-2 mb-4 mt-4 w-[25rem] bg-white/40"
    >
</div>

<label for="email">Email</label>
               <div class="flex flex-col ">

            <input type="email" name="email" id="email" required  class="border border-gray-300 rounded-md p-2 mb-4 mt-4 w-[20rem]">
        </div>  


        <label for="password">Password</label>
       <div class="flex flex-col ">
            <input type="password" name="password" id="password" required class="border border-gray-300 rounded-md p-2 mb-4 mt-4 w-[20rem]">
        </div>

        <label for="password_confirmation">Confirm Password</label>
       <div class="flex flex-col ">
            <input type="password" name="password_confirmation" id="password_confirmation" required class="border border-gray-300 rounded-md p-2 mb-4 mt-4 w-[20rem]">
        </div>

        <button type="submit" 
                        class="w-full bg-blue-700 text-black font-extrabold py-3.5 rounded-2xl shadow-[0_10px_20px_rgba(251,177,8,0.15)] hover:shadow-blue-400/30 transition-all active:scale-[0.98] flex items-center justify-center gap-2 mt-2 uppercase tracking-widest text-[11px]">
                        <span class="text-white">S'INSCRIRE</span>
                        <i class="fa-solid fa-user-plus text-[10px]"></i>
                    </button>
        
    </form>
</div> --}}

{{-- class="bg-[url('/images/background.jpg')] bg-cover bg-center bg-no-repeat min-h-screen" --}}