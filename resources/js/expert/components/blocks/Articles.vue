<template>
    <block-wrapper :state="block.state" :blockClass="'sec_my_articles'" :type="block.type" @update:state="block.state=!block.state">

        <div class="container">
            <img alt="" class="abs_pic dubl_line_vertical" :src="'/img/editor/abs_pic/dubl_line.svg'">
            <img alt="" class="abs_pic dubl_line" :src="'/img/editor/abs_pic/dubl_line.svg'">
            <img alt="" class="abs_pic circle_orange" :src="'/img/editor/abs_pic/circle_orange.svg'">
            <img alt="" class="abs_pic circle" :src="'/img/editor/abs_pic/circle.svg'">
            <div class="sec_title">
                <img :src="'/img/editor/sec_my_articles/title_label.svg'" alt="title_label">
                <h2>Мои экспертные статьи в сообществе Smart Expert</h2>
                <p>Я всегда делюсь своими знаниями и опытом в сообществе Smart Expert. <br> Мои последние экспертные
                    статьи вы можете прочитать ниже.</p>
            </div>

            <div class="edit-item">
                <span class="icon-pencil"
                      data-info='{"info":"section5-articles", "type":"button-articles", "data": "Добавьте статьи"}'></span>
                <div class="row justify-content-between" id="section5-articles">
                    <div class="col-md-6 card_wrapp">
                        <div class="card_product">
                            <img :src="'/img/editor/sec_my_articles/img_1.jpg'" alt="">
                            <div class="card_body">
                                <h4>Как избежать потерь от увольнения ключевого сотрудника?</h4>
                                <span class="date">12 мая 2019 г. Константин Лашкевич</span>
                                <div class="hr"></div>
                                <span class="tags">HR, Бизнес, Управление, Менеджмент </span>
                                <a href="" class="btn btn-blue">Читать полностью</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 card_wrapp">
                        <div class="card_product">
                            <img :src="'/img/editor/sec_my_articles/img_2.jpg'" alt="">
                            <div class="card_body">
                                <h4>Советы без «воды»: как директору подразделения стать СЕО</h4>
                                <span class="date">7 мая 2019 г. Константин Лашкевич</span>
                                <div class="hr"></div>
                                <span class="tags">HR, Бизнес, Управление, Менеджмент </span>
                                <a href="" class="btn btn-blue">Читать полностью</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </block-wrapper>
</template>
<script>
    import Editable from '../../mixins/Editable'
    import BlockWrapper from '../wrappers/BlockWrapper'

    export default {
        components: {
            'block-wrapper': BlockWrapper
        },
        mixins: [Editable],
        props: {
            block: {
                type: Object
            }
        }
    }

</script>