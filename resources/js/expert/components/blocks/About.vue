<template>
    <block-wrapper :state="block.state" :blockClass="'sec_profile'" :type="block.type" @update:state="block.state=!block.state">

        <div class="container">
            <img class="abs_pic circle" src="/img/editor/abs_pic/circle.svg">
            <img class="abs_pic dubl_line_vertical" src="/img/editor/abs_pic/dubl_line.svg">
            <div class="row">
                <div class="col-md-8">

                    <editor-wrapper @edit="edit('text', block.content.full_name, 'Напишите Ваши имя и фамилию')">
                        <h1 id="section1-fullName" v-html="block.content.full_name.text"></h1>
                    </editor-wrapper>

                    <editor-wrapper @edit="edit('text', block.content.bio_content, 'Напишите Вашу должность или регалии, которые бы Вы хотели, чтобы отображались на лендинге')"
                                    :add-class="'ch-undertitle'">

                        <div id="section1-bio" class="bio-content" v-html="block.content.bio_content.text"></div>
                    </editor-wrapper>

                    <editor-wrapper @edit="edit('text', block.content.bio_description, 'Напишите все Ваши самые важные достижения')"
                                    :add-class="'card bio-desc-content'">

                        <div v-html="block.content.bio_description.text"></div>
                    </editor-wrapper>

                    <editor-wrapper @edit="edit('button-file', block.content.companies, 'Необходимо загрузить логотип в формате JPEG, PNG (высота не менее 50 пикселей)')"
                                    :add-class="'works'">

                        <div class="companies">
                            <img v-for="company in block.content.companies" :src="company.img" :alt="company.alt">
                        </div>
                    </editor-wrapper>

                </div>
                <div class="col-md-4">

                    <editor-wrapper @edit="edit('file', block.content.bio_image, 'Ваше фото в формате PNG с вырезанным фоном')"
                                    :add-class="'img_wrapp'">

                        <img :src="block.content.bio_image.img" :alt="block.content.bio_image.alt">
                    </editor-wrapper>

                </div>
            </div>
        </div>

    </block-wrapper>
</template>
<script>
    import Editable from '../../mixins/Editable'
    import BlockWrapper from '../wrappers/BlockWrapper'
    import EditorWrapper from '../wrappers/EditorWrapper'

    export default {
        components: {
            'block-wrapper': BlockWrapper,
            'editor-wrapper' : EditorWrapper
        },
        mixins: [Editable],
        props: {
            block: {
                type: Object
            }
        },
    }
</script>