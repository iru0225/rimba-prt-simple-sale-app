<template>
    <div>
        <div class="mini-cart" :class="{'open' : this.open}">
            <div>
                <div v-for="(item, index) in cart" :key="index">
                    <span>{{item.name}} - {{item.qty}} x {{item.harga_satuan}}</span>
                    <span>{{item.qty * item.harga_satuan}}</span>
                    <hr>
                </div>
                TOTAL: {{total}}
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'open'
    ],

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
        width: 200px;
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
        
        div{
            display: flex;
            flex-direction: column;
            span{
                font-size: 12px;
            }
        }
    }
</style>