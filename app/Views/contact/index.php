<html>
<body>
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

    <div class="w-full h-full montserrat-font mx-auto mb-12 ">
        <div class="md:flex font-bold text-2xl w-full h-full text-center justify-center mb-3">
            {{info.contact_text.contact_form.heading}}

        </div>
        <div class="md:flex text-gray-800 w-full h-full text-center justify-center">
            {{info.contact_text.contact_form.text}}
        </div>
    </div>

    <div  class="mx-auto flex w-2/3 flex-col justify-center bg-gray-100 rounded-xl shadow-xl shadow-slate-300/60 mb-12">
      <div class="p-4 grid grid-cols-1 md:grid-cols-2 gap-9 w-full h-full">

        <div class="form-group md:mb-20 montserrat-fon ">
            <label class="text-lg font-semibold  ">{{info.contact_information[0].type}}
            <br>
            <input ref="name" type="text" class="mt-4 mb-4 w-96 md:w-96 px-4 py-2 form-control rounded " name='name' id="name" v-bind:placeholder="placeholders.name" required>
            <br>
            <label class="text-lg font-semibold  ">{{info.contact_information[1].type}}
            <br>
            <input ref="mail" type="text" class="mt-4 mb-4 w-96 md:w-96 px-4 py-2 form-control rounded " name='mail' id="mail" v-bind:placeholder="placeholders.email" required>
            <br>
            <label class="text-lg font-semibold  ">{{info.contact_information[2].type}}
            <br>
            <input ref="phone" type="text" class="mt-4 w-96 md:w-96 px-4 py-2 form-control rounded " name='phone' id="phone" v-bind:placeholder="placeholders.phone" required>

        </div>
        <div class="form-group mb-20">
          <label class="text-lg font-semibold  ">{{info.contact_information[3].type}}
          <br>
          <input ref="message" type="text" class="mt-4 w-96 md:w-96 h-5/6 mb-4  px-4 py-2 form-control rounded " name='message' id="message" v-bind:placeholder="placeholders.message" required>
          <input class="rounded w-28 px-4  py-2 bg-black text-white" v-bind:value="Send" type="submit" />
        </div>

      </div>
    </div>

</div>

</body>



</html>
