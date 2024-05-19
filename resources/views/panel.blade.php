<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adea Login Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#2E2F34]">
    <div class="flex justify-center h-screen w-screen items-center">
     <form method="POST" class="w-full md:w-1/2 flex flex-col items-center " >
        @csrf
         <!-- text login -->
         <h1 class="text-center text-4xl font-bold text-[#E4842C] mb-6">ADEA <span class="text-white">LOGIN</span></h1>
         <!-- email input -->
         <div class="w-3/4 mb-6">
             <input type="username" name="username" id="username" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-[#E4842C]" placeholder="Username">
         </div>
         <!-- password input -->
         <div class="w-3/4 mb-6">
             <input type="password" name="password" id="password" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-[#E4842C] " placeholder="Password">
         </div>

         <div class="w-3/4 mt-4">
             <button type="submit" class="py-4 bg-slate-400 w-full rounded text-black font-bold hover:bg-[#E4842C] hover:text-white"> LOGIN</button>
         </div>
        </form>
    </div>

 </body>
</html>