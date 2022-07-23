<section id="footer" class="bg-black">
    <div class="w-full md:1/2 mx-auto mb-12 pt-12 justify-center flex flex-wrap indent-2 text-white gap-4">
        <div class="block ">
            <i class="fa-brands fa-facebook text-white text-4xl"></i>
            Like us
        </div>
        <div>
            <i class="fa-brands fa-instagram  text-white text-4xl"></i>
            Follow us
        </div>



    </div>
    <div class="container grid grid-cols-1 md:grid-cols-2 mx-auto">
        <div class="sm:px-12 block w-full   relative">
            <div class=" h-full relative mx-auto sm:mx-20  ">
                <div class="h-full justify-start ">
                    <h1 class="text-gray-rada text-start bebas-font uppercase text-3xl ">
                        {{info.locations[0].title}}
                    </h1>
                    <p class="montserrat-font text-start  text-lg  mr-24 pr-10 text-wrap text-white  mb-8">
                        {{info.locations[0].address}}
                    </p>
                    <h1 class="text-gray-rada text-start bebas-font uppercase text-3xl ">
                        {{info.contact_info[0].type}}
                    </h1>
                    <p class="montserrat-font text-start  text-lg  mr-24 pr-10 text-wrap text-white mb-8  ">
                        {{info.contact_info[0].info}}
                    </p>
                    <h1 class="text-gray-rada text-start bebas-font uppercase text-3xl ">
                        {{info.contact_info[1].type}}
                    </h1>
                    <p class="montserrat-font text-start  text-lg  mr-24 pr-10 text-wrap text-white mb-12 ">
                        {{info.contact_info[1].info}}
                    </p>
                </div>
            </div>
        </div>
        <div class=" block w-full relative font-sans mb-16 ">
            <div class="flex  relative mx-auto justify-center">
                <div id="contacto" class="sm:mx-20 justify-center  flex flex-wrap ">

                    <form ref="form" @submit.prevent="sendEmail()">
                        <div class="form-group mb-4  ">
                            <input ref="nombre" type="text" v-model="nombre" class="w-96 md:w-96 px-4 py-2 form-control rounded " name='nombre' id="nombre" v-bind:placeholder="placeholders.name" required>
                        </div>
                        <div class="form-group mb-4">
                            <input ref="correo" type="email" v-model="correo" class="w-96 px-4 py-2 form-control rounded " name='correo' id="correo" v-bind:placeholder="placeholders.email" required>
                        </div>
                        <div class="form-group mb-4">
                            <input ref="telefono" type="tel" v-model="telefono" class="w-96 px-4 py-2 form-control rounded " name='telefono' id="telefono" v-bind:placeholder="placeholders.phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">

                        </div>
                        <div class="form-group mb-4">
                            <textarea type="text" v-model="mensaje" class="w-96 h-40 px-4 py-2 form-control rounded " name='mensaje' id="mensaje" rows="3" v-bind:placeholder="placeholders.comments" required></textarea>
                        </div>
                        <input class="rounded w-28 px-4 py-2 bg-gray-800 text-white" v-bind:value="info.contact_text.btn" type="button" v-on:click="sendMessageFooter()" />
                        <br><label id="msg" ref="msg" class="text-lg font-semibold"></label>
                    </form>

                </div>
            </div>
        </div>
    </div>

</section>
</div>



</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="module">
    import en_lang from '<?php echo base_url() ?>/json_info/english.json' assert {
        type: "json"
    };
    import es_lang from '<?php echo base_url() ?>/json_info/spanish.json' assert {
        type: "json"
    };


    const {
        createApp
    } = Vue;
    const application = createApp({
        data() {
            return {
                url: "<?php echo base_url(); ?>",
                default_language: 'en',
                default_language_index: 0,
                languages: {
                    es: es_lang,
                    en: en_lang
                },
                inputText: {
                    en: {
                        name: "Your name",
                        email: "Email",
                        phone: "Phone",
                        comments: "Your message",
                        message: "Type a message",
                        button: "Send",
                    },
                    es: {
                        name: "Tú nombre",
                        email: "Dirección de correo",
                        phone: "Teléfono",
                        comments: "Mensaje",
                        message: "Escribe un mensaje",
                        button: "Enviar",
                    }
                },
                placeholders: null,
                info: null,
                email: '',
                phone: '',
                name: '',
                message: '',
                response: {
                    resp: null,
                    message: "",
                },
                param_lang: '<?php echo $idioma ?>'
            }
        },
        beforeMount() {
            this.getJsons();
            if (this.param_lang.trim() === '') {
                this.default_language = 'en';
                this.info = this.languages.en;
                this.placeholders = this.inputText.en;
            } else {
                this.default_language = this.param_lang;
                if (this.default_language == 'es') {
                    //this.default_language = 'es';
                    this.info = this.languages.es;
                    this.placeholders = this.inputText.es;

                } else {
                    //this.default_language = 'en';
                    this.info = this.languages.en;
                    this.placeholders = this.inputText.en;
                }
            }
        },
        methods: {
            getJsons(){
                axios.get(this.url + "/json_info/english.json")
                    .then(response => {
                        console.log(response.data);
                        this.languages.en=response.data;
                        //  this.showAlert(response.data.msg, response.data.code);
                        //               this.mensaje=response.msg;
                    }),
                    axios.get(this.url + "/json_info/spanish.json")
                    .then(response => {
                        console.log(response.data);
                        this.languages.es=response.data;
                        //  this.showAlert(response.data.msg, response.data.code);
                        //               this.mensaje=response.msg;
                    })
            },
            change_lang(lang) {
                if (lang == 'en') {
                    this.default_language = 'es';
                    this.info = this.languages.es;
                    this.placeholders = this.inputText.es;

                } else {
                    this.default_language = 'en';
                    this.info = this.languages.en;
                    this.placeholders = this.inputText.en;
                }
            },
            sendMessage() {
                axios.post(this.url + "/sendEmail", {
                        email: this.email,
                        phone: this.phone,
                        message: this.message,
                        name: this.name,
                    })
                    .then(response => {
                        console.log(response.data);
                        if (response.data.resp) {
                            this.response.resp = true;
                            if (this.lang == 'en') {
                                this.response.message = response.data.msg;
                            } else {
                                this.response.message = response.data.msj;
                            }

                            this.name = "";
                            this.phone = "";
                            this.message = "";
                            this.email = "";
                            /**
                                 *  email:'',
                phone:'',
                name:'',
                message:'',
                                 */

                        } else {
                            response.resp = false;
                            if (this.lang == 'en') {
                                this.response.message = response.data.msg;
                            } else {
                                this.response.message = response.data.msj;
                            }
                        }
                        //  this.showAlert(response.data.msg, response.data.code);
                        //               this.mensaje=response.msg;
                    })
            },
            sendMessageFooter() {
                axios.post(this.url + "/sendEmail", {
                        email: this.correo,
                        phone: this.telefono,
                        message: this.mensaje,
                        name: this.nombre,
                    })
                    .then(response => {
                        console.log(response.data);

                        //  this.showAlert(response.data.msg, response.data.code);
                        //               this.mensaje=response.msg;
                    })
            }
        }

    });
    application.mount('#app')
</script>

</html>