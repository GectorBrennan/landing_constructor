export default {
    inject: ['isDev'],
    methods: {
        edit(modalType, data, desc) {
            this.log(data)
            this.$parent.modal = {
                show: true,
                type: modalType,
                data: data,
                desc: desc,
            }
        },
        log(log){
            console.log(log);
        }
    },

}