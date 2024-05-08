@extends('webradio.home.base')

@section('title',"Radio Trait D'Union")

@section('content')
    

    <main class="p-4" >
        <div class="w-full h-52 bg-green-500 my-6 " >
            <h2>carousell image</h2>
            <h2>carousel title</h2>
        </div>
        <div>
            <section>
                <h2 class="text-xl my-2 p-1 bg-basic_primary_color text-basic_white_color text-center font-semibold  " >Actualité à la une</h2>
            </section>

            <section>

            @for ($i=1;$i<=4;$i++)
                <div class="my-4" >
                    <section class="w-full h-48" >
                        <img src='{{asset("images/pic{$i}.jpg")}}' class="size-full" alt="actu image">
                    </section>
                    <section>
                        <a class="text-2xl text-basic_primary_color/90 font-extrabold text-center my-4 hover:opacity-100" href="#" >Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a>
                        <p class="opacity-75  font-bold flex items-center" ><span>John doe</span> <span class="mx-2 size-2 block rounded-full bg-black" ></span> <span>7 mai 2024</span></p> 
                    </section>
                </div>
            @endfor
                
                
            </section>
            <section class="flex justify-center" >
                <a class="text-basic_primary_color border-solid border-[1px] border-basic_primary_color font-semibold  p-2 rounded-sm text-lg text-center" >Voir tous les actualités </a>
            </section>
        </div>
        <div class="my-6" >
            <section>
                <h2 class="text-xl my-2 p-1 bg-basic_primary_color text-basic_white_color text-center font-semibold  " >Revue de presse</h2>
            </section>
        </div>
    </main>

@endsection