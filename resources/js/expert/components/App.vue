<template>
    <div id="main-container">

        <div id="element">

            <resizer-component v-if="isDev && modal.show"/>

            <header-navigation :landing="landing" :routes="routes" @save="save" @publish="publish" />

            <component
                    v-if="isDev || block.state"
                    v-for="block in landing.blocks"
                    :is="block.type + '-block'"
                    :block="block"
                    :key="block.type"
            ></component>

            <footer class="sec" id="footer">
                <div class="container">
                    <nav>
                        <span>SmartExpert Copyright 2019</span>
                        <a href="">Договор публичной офферты</a>
                        <a href="">Политика конфедициальности</a>
                    </nav>
                </div>
            </footer>

        </div>

        <modal-component v-if="modal.show" :modal="modal" @close="closeModal"/>

    </div>
</template>

<script>
    import Header from './Header'
    import Modal from './Modal';
    import Resizer from './Resizer';

    import AboutBlock from './blocks/About'
    import ProjectsBlock from './blocks/Projects'
    import ExpertizeBlock from './blocks/Expertize'
    import ContactsBlock from './blocks/Contacts'
    import ArticlesBlock from './blocks/Articles'
    import ReviewsBlock from './blocks/Reviews'
    import MentorBlock from './blocks/Mentor'

    import landing_data from '../data';

    export default {
        provide: function () {
            return {
                isDev: this.isDev
            }
        },
        components: {
            'header-navigation': Header,
            'modal-component': Modal,
            'resizer-component': Resizer,

            'about-block': AboutBlock,
            'projects-block': ProjectsBlock,
            'expertize-block': ExpertizeBlock,
            'contacts-block': ContactsBlock,
            'articles-block': ArticlesBlock,
            'reviews-block': ReviewsBlock,
            'mentor-block': MentorBlock,
        },
        data(){
            return {
                modal: {
                    show: false,
                    type: 'file',
                    data: null,
                    desc: '',
                },
                landing: this.data || landing_data,

            }
        },
        props: {
            data: {
                type: Object
            },
            isDev: {
                type: Boolean,
                default: false
            },
            routes: {
                type: Object
            }
        },
        methods: {
            async save(){
                try {
                    let response = await api.post(this.landing.id ? this.routes.update :  this.routes.store, this.landing);
                    this.landing = response.data.landing;
                } catch(err) {
                    console.log(err);
                }
            },
            async publish(){
                try {
                    let response = await api.post(this.routes.update, {id: this.landing.id, status: !this.landing.status});
                    this.landing.status = !this.landing.status;
                } catch(err) {
                    console.log(err);
                }
            },
            closeModal(){
                document.getElementById('element').style.width = '100%';
                document.getElementById('element2').style.width = '0px';

                this.modal.show = false
            }
        },
    }

</script>

<style>
    .hide-block {
        width: 100% !important;
        height: 100% !important;
        position: absolute;
        background: black;
        opacity: .5;
        z-index: 99;
    }
    .fix-nav {
        padding: 0;
        margin: 0;
    }
    .fix-nav img{
        max-width: 170px;
        max-height: 50px;
    }
    #element2 {
        width: 55%;
    }

    #element::-webkit-scrollbar {
        display: none;
    }
    .ck.ck-editor {
        width: 100%;
    }

    .ch-undertitle p {

        font-weight: 600;
        font-size: 21px;
        line-height: 130%;
        text-transform: uppercase;
        color: #828282;
        margin-bottom: 38px;
    }

    .bio-desc-content ul{
        list-style: inside url('/img/editor/sec_1/ok.svg') !important;
    }
    .bio-desc-content li{
        display: list-item !important;
    }
    .nav-link p {
        margin: 0;
        padding: 0;
    }
    .resizer {
        height: 10000% !important;
    }
    .btn-publish {
        width: auto !important;
    }
</style>