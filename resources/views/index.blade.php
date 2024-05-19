<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adea Website Personal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#2E2F34]">
    <nav class="flex mx-auto max-w-full py-5 justify-between fixed text-center items-center">
        <div class=" ml-10 space-x-10">
            <a href="" class="text-white hover:text-red-600 font-extrabold text-sm">HOME</a>
            <a href="" class="text-white hover:text-red-600 font-extrabold text-sm">ABOUT ME</a>
            <a href="" class="text-white hover:text-red-600 font-extrabold text-sm">PORTFOLIO</a>
            <a href="" class="text-white hover:text-red-600 font-extrabold text-sm">CONTACT ME</a>
            <a href="{{ route('panel') }}" class="text-white hover:text-red-600 font-extrabold text-sm">LOGIN</a>
        </div>

        <div class="ml-[670px]">
            <h3 class="text-white font-extrabold text-xl">ASN.</h3>
        </div>
    </nav>
    
    <section name="home" id="home" class="max-w-full mx-auto flex py-48 px-0 justify-between">
        <div class="ml-20">
            <h1 class="text-white text-6xl font-bold">Adea Salwa</h1>
            <h1 class="text-white text-6xl font-bold">Nabila.</h1>
            <img src="https://i.ibb.co/nzPjKZX/Vector-1.png" alt="" class="w-[90px] py-5">
            <h3 class="text-white text-xl font-bold">WHATSAPP | INSTAGRAM</h3>
            <div class="rounded-full mr-4 mt-7">
                <a href="" target="_blank" class="text-white p-2 px-7 rounded-full border-2 border-[#E4842C]">CONTACT ME</a>
            </div>
        </div>

        <div class="mr-48">
            <img src="img/adea1.png" alt="" class="w-[310px]">
        </div>
    </section>

    <section class="max-w-full mx-auto flex px-0 bg-[#E73334] justify-center">
        <div class=" bg-white flex h-[200px] flex-wrap rounded-xl items-center mt-6 ml-10">
            <img src="img/adea2.png" alt="" class="w-[180px] rounded-xl">
        </div>

        <div class="bg-[#E73334] w-auto mx-auto text-center justify-center">
            <div class="block">
                <h1 class=" mt-10 text-white text-3xl font-bold">ABOUT ME</h1>
                <img src="https://i.ibb.co/Z8NR7K2/Vector-2.png" alt="" class="mt-2 mx-auto">
                <div class="py-3 px-5">
                <p class="text-lg text-white">Halo! Saya Adea Salwa Nabila, biasa dipanggil Adea. Saat ini saya sedang menjalani kuliah semester 4 di</p>
                <p class="text-lg text-white">Politeknik Harapan Bersama Tegal dengan mengambil jurusan D3 Teknik Komputer. Hobi saya adalah mendengarkan musik.</p> 
                </div>
                <div class="ml-14 flex flex-wrap mt-5">
                    <div>
                        <img src="https://i.ibb.co/FD0Bwvz/ae8e9f33db54662fd3692c5997a185e5-transformed-1.png" alt="" class="-mt-16">
                    </div>
                    <div>   
                        <h3 class="text-white text-3xl ml-4 font-bold">Pengabean, Tegal</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="max-w-full mx-auto flex px-0 justify-center mt-10">
        <div class="py-10 block mx-auto">
            <h1 class="text-3xl text-white ml-56">PORTFOLIO</h1>
            <img src="https://i.ibb.co/Z8NR7K2/Vector-2.png" alt="" class="mt-2 ml-40 ">
            

            <div class=" grid grid-cols-3 grid-rows-1 gap-4 mt-10 border-2 border-[#E4842C] rounded-3xl">
                <div class="py-10 px-5">
                    <img src="img/ADEA-COVER-BUKU-2.png" alt="" class="w-[150px]">
                </div>

                <div class="py-10 px-5">
                    <img src="img/ADEA-COVER-BUKU-3.png" alt="" class="w-[150px]">
                </div>

                <div class="py-10 px-5">
                    <img src="img/ADEA-COVER-BUKU-1.png" alt="" class="w-[150px]">
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-full mx-auto flex px-0 justify-center mt-14">
        <div class="py-10 text-center">
            <h3 class="text-xl text-[#E4842C] font-bold">CONTACT ME</h3>
            <h2 class="text-3xl text-white font-extrabold">HOW TO CONTACT ME</h2>
            <p class="text-white text-base">You can contact me by completing given form.
                This form will directly send me a mail.</p>
                <div class="bg-[#3F414D] my-5 flex flex-wrap text-base text-center w-[300px] rounded-3xl ml-36">
                    <img src="https://i.ibb.co/w7shfCf/b09e51df0b327970b45352b876dfaebb-transformed-1.png" alt="" class="w-[50px] ml-12">
                    <h3 class="text-white mt-3 -ml-1">+62 814-7663-6307</h3>
                </div>
                <div class="bg-[#3F414D] my-5 flex flex-wrap text-base text-center w-[300px] rounded-3xl ml-36">
                    <img src="https://i.ibb.co/vLSmzvJ/png-transparent-gmail-logo-computer-icons-gmail-scalable-graphics-email-gmail-size-icon-angle-text-t.png" alt="" class="w-[58px] ml-7 py-2">
                    <h3 class="text-white mt-3 -ml-1">adeasalwa@gmail.com</h3>
                </div>
        </div>
    </section>
        <section name="contact" id="contact" class="max-w-full mx-auto flex flex-wrap py-20 px-0 justify-between ml-20">
        <form method="POST">
            @csrf
            <div class="text-white text-xl my-5 space-x-2">
                <label for="nama" class="text-[#E4842C]">Nama </label>
                <input type="text" name="nama" id="nama" class="w-[500px] rounded-md px-2 text-black">
            </div>

            <div class="text-white text-xl my-5 space-x-2">
                <label for="email" class="text-[#E4842C]">Email </label>
                <input type="email" name="email" id="email" class="w-[503px] rounded-md px-2 text-black">
            </div>

            <div class="text-white text-xl my-5 space-x-2">
                <textarea name="pesan" id="pesan" cols="58" rows="3" class="text-black rounded-md px-2" placeholder="Kirim masukkan..."></textarea>
            </div>

            <button type="submit" class="bg-[#E4842C] text-center py-1 px-10 rounded-md text-black mx-auto">Kirim</button>
        </form>
    </section>
    <footer class="bg-gradient-to-r from-gray-400 via-red-500 to-red-700">
        <div class="text-center flex flex-wrap">
            <h1 class="text-white font-bold ml-[510px] py-5">SOSIAL MEDIA: </h1>
            <div class="text-center space-x-2 flex flex-wrap">
                <a href="" ><img src="https://i.ibb.co/hYfNN20/md-5b012516425c1-transformed-1.png" alt="" class="w-[40px] py-3 ml-3"></a>
                <a href="" ><img src="https://i.ibb.co/gz4kMNY/6df277bc71adcfbade6a10eb12868300-transformed-1-1.png" alt="" class="w-[40px] py-4"></a>
                <a href="" ><img src="https://i.ibb.co/9b4zf3P/Twitter-new-X-logo-transformed-1.png" alt="" class="w-[25px] py-5"></a>
            </div>
        </div>

    </footer>
</body>
</html>