<template>
    <div>
        <div class="mini-cart" :class="{'open' : this.open}">
            <div>
                <div class="cart-wrapper" v-for="(item, index) in cart" :key="index">
                    <div class="cart-detail">
                        <span>{{item.name}} - {{item.qty}} x {{item.harga_satuan}}</span>
                        <span @click="removeItem(item.id)"><i class="far fa-trash-alt"></i></span>
                    </div>
                    <span>{{item.qty * item.harga_satuan}}</span>
                </div>
                <span>TOTAL: {{total}}</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'open'
    ],

    data() {
        return {
            data: null
        }
    },

    methods:{
        removeItem(val){
            this.$store.dispatch('removeItem', val);
        }
    },

    computed:{
        cart(){
            return this.$store.state.cart;
        },

        total(){
            return this.$store.getters.TotalPrice
        }
    }
}
</script>

<style lang="scss" scoped>
    .mini-cart{
        width: 220px;
        height: 300px;
        overflow-y: auto;
        border: 1px solid;
        position: absolute;
        top: -100vh;
        right: 5px;
        transition: .3s ease-in-out;

        &.open{
            top: 3.4rem;
            background: #F6F1EC;
        }
        
        .cart-wrapper{
            padding: .2rem .3rem;
            display: flex;
            flex-direction: column;

            .cart-detail{
                display: flex;
                flex-direction: row;
                justify-content: space-between;

                span{
                    i{
                        color: red;
                    }
                }
            }
            span{
                font-size: 12px;
            }
        }
    }
</style>