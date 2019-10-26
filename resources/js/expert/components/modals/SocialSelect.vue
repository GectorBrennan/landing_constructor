<template>
    <div class="dynamic-content" id="dynamic-content"
         style="width: 100%; display:flex; flex-flow:column; align-items: center; justify-content: center">
        <div class="content-inputs" id="content-inputs">
            <div class="row" v-for="(el, index) in data">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Социальная сеть</label>
                        <div class="input-area">
                            <select class="form-control dynamic-field" v-model="el.name">
                                <option :value="socialName" v-for="(social, socialName) in socials">
                                    {{social.text}}
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Ссылка на соцсеть</label>
                        <div class="input-area">
                            <input type="text" class="form-control dynamic-field"
                                   :placeholder="socials[el.name].placeholder + '...'" v-model="el.link">
                            <span class="icon-delete icon-delete-social" @click="remove(index)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-green add-social" @click="add">Добавить</button>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['data', 'emptyImg'],
        data() {
            return {

                socials: {
                    fb: {
                        name: '',
                        img: '/img/editor/soc_links/fb.svg',
                        text: 'Facebook',
                        placeholder: 'http://facebook'
                    },
                    vk: {
                        img: '/img/editor/soc_links/vk.svg',
                        name: 'vk',
                        text: 'VK',
                        placeholder: 'http://vk'
                    },
                    tw: {
                        img: '/img/editor/soc_links/tw.svg',
                        text: 'Twitter',
                        name: '',
                        placeholder: 'http://vk'
                    },
                    tg: {
                        img: '/img/editor/soc_links/tg.svg',
                        text: 'Telegram',
                        name: '',
                        placeholder: 'http://vk'
                    },
                    in: {
                        img: '/img/editor/soc_links/in.svg',
                        text: 'LinkedIn',
                        name: '',
                        placeholder: 'http://vk'
                    }
                }
            }

        },
        methods: {
            add() {
                this.data.push({name: 'fb', link: ''})
            },
            remove(index){
                this.data.splice(index, 1);
            }
        }

    }
</script>