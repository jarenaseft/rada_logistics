<div class="md:pl-20 md:pr-20 ">
    <div class="ml-10 md:ml-0 mb-4 pt-4 w-full lg:w-1/3   font-bold bebas-font text-black text-6xl  ">
        {{info.contact_text.heading}}
    </div>

    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 65vh;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover bg-no-repeat">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=157jldvmNNsp-4uA1pm8Lj4SDMy7Cj3U&ehbc=2E312F" class="w-full h-full "></iframe>
        </div>


    </div>
    <div class="w-full h-full text-center justify-center font-bold text-xl   mx-auto place-items-center my-12 ">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-9 w-full h-full">

            <div v-for="location in info.locations" class="mx-auto flex w-96 flex-col justify-center bg-white rounded-xl shadow-xl shadow-slate-300/60">
                <!-- img -->
                <img class="aspect-video w-96 rounded-t-xl object-cover object-center" :src="url+'/img/'+location.image" />
                <!-- text information -->
                <div class="p-4">
                    
                    <h1 class="text-2xl font-medium text-slate-600 pb-2">{{location.name}}</h1>
                    <p class="text-sm tracking-tight font-light text-slate-400 leading-6">{{location.address}}</p>
                </div>
            </div>

        </div>
    </div>

    <div class="w-full h-full  font-bold text-xl   mx-auto mb-12 ">
        <div class="md:flex w-full h-full">
            
           
        </div>
    </div>

</div>