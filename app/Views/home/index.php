

        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url(<?php echo base_url() ?>/img/trucks.jpg)">
                <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-1/3 px-4 ml-auto mr-auto text-center  font-bold bebas-font text-white text-6xl drop-shadow-lg  ">

                        {{info.heading}}
                    </div>
                </div>
            </div>

        </div>
        <section id="equipment" class="bg-black">
            <div class="container mx-auto w-full ">
                <h2 class="text-yellow-rada text-6xl text-center bebas-font p-4">{{info.equipment.title}}</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                    <div class="lg:py-12 py-6 w-full  px-2 text-center cursor-pointer" v-on:click="" v-for="equipment in info.equipment.data">
                        <div class="max-w-sm overflow-hidden rounded-md bg-white shadow-md duration-200 hover:scale-105 hover:shadow-xl">
                            <img :src="url+'/img/'+equipment.logo" v-bind:alt="equipment.name" class="h-auto w-full " />
                            <div class="p-5">
                                <p class="text-2xl mb-5 bebas-font text-gray-800">{{equipment.name}}</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="philosophy" class="bg-white">
            <div class="relative pt-8 pb-16 flex  items-center justify-center" style="min-height: 75vh;">
                <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url(<?php echo base_url() ?>/img/trucks3.jpeg)">
                    <span id="blackOverlay" class="w-full h-full absolute opacity-80 bg-gray-rada"></span>
                </div>
                <div class="container relative ml-24 mr-24">

                    <div class="w-full lg:w-3/4 px-2  bebas-font font-bold text-black text-6xl my-14  drop-shadow-xl  ">
                        {{ info.philosophy.heading }}
                    </div>
                    <div class="w-full lg:w-3/4 px-2 text-left montserrat-font text-white text-2xl drop-shadow-md  ">
                        {{ info.philosophy.text }}
                    </div>

                </div>

            </div>
        </section>
        <section id="values" class="bg-white">
            <div class="container relative pt-8 pb-16 mx-auto flex flex-wrap items-center justify-center" style="min-height: 75vh;">
                <div class=" relative flex text-center w-full md:w-1/3">
                    <h1 class="w-full lg:w-3/4 px-2  bebas-font font-bold text-red-rada text-6xl my-14 drop-shadow-md  ">
                        {{ info.values.heading }}
                    </h1>
                </div>
                <div class="w-full md:w-2/3 grid grid-cols-2 md:grid-cols-4 gap-3">
                    <div class="container text-center items-center justify-center font-bold montserrat-font uppercase text-md md:text-lg text-gray-800 " v-for="value in info.values.info">
                        <img :src="url+'/img/svg/'+value.icon" v-bind:alt="value.title" class="w-full md:w-2/3 mx-auto p-10 md:p-6 hover:scale-105 " />
                        {{ value.title}}
                    </div>
                </div>

            </div>
        </section>
       
                








