<template>
    <block-wrapper :state="block.state" :blockClass="'sec_success_stories'" :type="block.type" @update:state="block.state=!block.state">

        <div class="container">
            <img class="abs_pic stone_orange" src="/img/editor/abs_pic/stone_orange.svg">
            <img class="abs_pic stone_orange_bottom" src="/img/editor/abs_pic/stone_orange.svg">
            <img class="abs_pic dubl_line" src="/img/editor/abs_pic/dubl_line.svg">
            <img class="abs_pic circle_orange" src="/img/editor/abs_pic/circle_orange.svg">
            <img class="abs_pic circle" src="/img/editor/abs_pic/circle.svg">
            <div class="sec_title">
                <img src="/img/editor/sec_my_contacts/title_label.svg" alt="title_label">
                <h2>Истории успеха</h2>
                <p>Что говорят о моих практикумах те, кто уже прошел обучение?</p>
            </div>

            <editor-wrapper @edit="edit('button-custom-content', block.content.reviews, 'Добавьте отзыв')">
                <div class="row justify-content-between">
                    <div class="col-md-4 card_wrapp" v-for="review in block.content.reviews">
                        <div class="card_profile">
                            <img class="icon" :src="review.avatar.img" :alt="review.avatar.alt">
                            <h3 v-html="review.name.text"></h3>
                            <p v-html="review.job.text"></p>
                            <i v-html="review.quote.text"></i>
                        </div>
                    </div>
                </div>
            </editor-wrapper>

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
            'editor-wrapper' : EditorWrapper
        },
        mixins: [Editable],
        props: {
            block: {
                type: Object
            }
        }
    }
</script>