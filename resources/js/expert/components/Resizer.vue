<template>
    <div class="resizer"></div>
</template>

<script>
    export default {
        methods: {
            resize(e){
                let element = document.getElementById('element');
                let element2 = document.getElementById('element2');

                document.querySelector('.resizer').style.backgroundColor = 'rgba(73, 156, 255, 0.51)';
                element.style.width = (e.clientX) + 'px';
                element2.style.width = (screen.width - e.clientX) + 'px';

            },
            stop(){
                window.removeEventListener('mousemove', this.resize, false);
                window.removeEventListener('mouseup', this.stop, false);
                document.querySelector('.resizer').style.background = 'linear-gradient(to right, rgba(0, 0, 0, 0.2) 0px, rgba(0, 0, 0, 0.2) 1px, rgba(0, 0, 0, 0.1) 1px, rgba(0, 0, 0, 0) 100%)';
            },
            initResize(){
                window.addEventListener('mousemove', this.resize, false);
                window.addEventListener('mouseup', this.stop, false);            }
        },
        mounted(){
            document.querySelector('.resizer').addEventListener('mousedown', this.initResize, false);

        }
    }
</script>