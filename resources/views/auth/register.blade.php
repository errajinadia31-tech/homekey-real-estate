<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Eagle+Lake&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>HomeKey | Register</title>
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

         <form action="{{ route('register') }}" method="POST" class="z-10">
    @csrf    

        <label for="name" class="">Name</label>

       <div class="flex flex-col">
    <input type="text" name="name"  value="{{ old('name') }}" id="name" required  placeholder="Name"
class="border border-[#BF8028] rounded-md p-2 mb-4 mt-4 w-[25rem] bg-white/40 text-white"
    >
</div>

<label for="email">Email</label>
               <div class="flex flex-col ">

            <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="example@domain.com"
             class="border border-[#BF8028] rounded-md p-2 mb-4 mt-4 w-[25rem] bg-white/40 text-white">
        </div>  


        <label for="password">Password</label>
       <div class="flex flex-col ">
            <input type="password" name="password" id="password" value="{{ old('password') }}" required placeholder="**********" 
            class="border border-[#BF8028] rounded-md p-2 mb-4 mt-4 w-[25rem] bg-white/40 text-white">
        </div>

        <label for="password_confirmation">Confirm Password</label>
       <div class="flex flex-col ">
            <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" required placeholder="**********"
                class="border border-[#BF8028] rounded-md p-2 mb-4 mt-4 w-[25rem] bg-white/40 text-white">
        </div>

        
   
            <div class=" flex justify-end text-white/60">
            <a href="{{ route('password.request') }}" class="text-white hover:underline"> Forgot password?</a>
        </div>  
    
        <button type="submit" 
                        class="w-full bg-[#BF8028] text-black font-extrabold py-3.5 rounded-2xl mt-4  flex items-center justify-center gap-2 mt-2 uppercase  cursor-pointer tracking-widest text-[15px]">
                        <span class="text-white ">Sign Up</span>
                        <i class="fa-solid fa-user-plus text-[10px]"></i>
                    </button>

          <div class="flex justify-between items-center mt-8 mb-8 text-l text-white/60">
            <p>Already have an account ?</p>
            <a href="{{ route('login') }}" class="text-white hover:underline"> Login</a>
        </div>           
        
    </form>
    </div>
</div>



</body>
</html>



  
                
             {{--  --}}

                {{-- <form method="POST" action="{{ route('register') }}" class="space-y-3.5">
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
                </form> --}}

              
 




