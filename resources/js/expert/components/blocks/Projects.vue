<template>
    <block-wrapper :state="block.state" :blockClass="'sec_bio'" :type="block.type" @update:state="block.state=!block.state">

        <div class="container">
            <img class="abs_pic circle" src="/img/editor/abs_pic/circle.svg">
            <img class="abs_pic circle_orange" src="/img/editor/abs_pic/circle_orange.svg">
            <img class="abs_pic stone" src="/img/editor/abs_pic/stone.svg">
            <div class="row align-items-center">
                <div class="col-lg-5 d-flex justify-content-center">
                    <div class="card_transparent">

                        <editor-wrapper @edit="edit('file', block.content.avatar, 'Ваше фото в формате PNG или JPEG')">
                            <img class="icon_avatar" :src="block.content.avatar.img" :alt="block.content.avatar.alt">
                        </editor-wrapper>

                        <editor-wrapper @edit="edit('text', block.content.full_name, 'Напишите Ваши имя и фамилию')">
                            <h5 v-html="block.content.full_name.text"></h5>
                        </editor-wrapper>

                        <editor-wrapper @edit="edit('social-select', block.content.social, 'Вставьте ссылки на Ваши социальные сети')">
                            <div class="soc_links_wrapp section2-social">
                                <a :href="social.link" class="item" v-for="social in block.content.social"><img :src="social_img[social.name]"></a>
                            </div>
                        </editor-wrapper>

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <img src="/img/editor/sec_bio/quote.svg" alt="quote" class="quote">

                        <editor-wrapper @edit="edit('text', block.content.bio, 'Напишите приветственное сообщение к пользователям, в котором расскажите о себе')">
                            <div v-html="block.content.bio.text"></div>
                        </editor-wrapper>

                    </div>
                </div>
            </div>
        </div>

    </block-wrapper>
</template>

<script>
    import Editable from '../../mixins/Editable'
    import BlockWrapper from '../wrappers/BlockWrapper';
    import EditorWrapper from '../wrappers/EditorWrapper'

    export default {
        components: {
            'block-wrapper': BlockWrapper,
            'editor-wrapper': EditorWrapper,
        },
        mixins: [Editable],
        data() {
            return {
                social_img: {
                    fb: '/img/editor/soc_links/fb.svg',
                    vk: '/img/editor/soc_links/vk.svg',
                    tw: '/img/editor/soc_links/tw.svg',
                    tg: '/img/editor/soc_links/tg.svg',
                    in: '/img/editor/soc_links/in.svg',
                }
            }
        },
        props: {
            block: {
                type: Object
            }
        }
    }
</script>