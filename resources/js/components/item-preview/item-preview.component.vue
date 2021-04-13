<template>
    <div>
        <div class="item-preview">
            <div class="item-image">
                <img :src="data.images" alt="">
            </div>
            <div class="item-detail">
                <span class="item-name">{{data.name}}</span>
                <span class="item-price">IDR {{data.harga_satuan}}</span>
                <span class="item-price">stok {{data.stok}}</span>
            </div>
            <div class="button">
                <div class="buy-button">Buy Now</div>
                <button class="add-cart" @click="addItem">Add Cart</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:[
        'items',
        'function'
    ],
    data() {
        return {
            data:[]
        }
    },
    methods:{
        addItem(){
            if (this.data.stok < 0) {
                return;
            }

            const {unit, stok, harga_grosir, ...rest} = this.data;
            this.data.stok -= 1;
            rest.qty = 1;
            this.$store.dispatch('addToCart', rest);
        }
    },
    watch:{
        items:{
            immediate: true,
            deep: true,
            handler(newVal, oldVal){
                this.data = newVal ? newVal : [];
            }
        }
    }
}
</script>

<style lang="scss" scoped>
    .item-preview{
        width: 16rem;
        border: 1px solid black;
        padding: .3rem .5rem;

        .item-image{
            width: 100%;
            border: 1px solid;
            height: 20rem;
            margin-bottom: 1.3rem;

            img{
                width: 100%;
            }
        }

        .item-detail{
            display: flex;
            flex-direction: column;
            margin-bottom: .8rem;
        }

        .buy-button{
            background: lightgreen;
            cursor: pointer;
            border-radius: 3px;
            margin-bottom: 5px;
        }

        .add-cart{
            background: lightseagreen;
            cursor: pointer;
            border-radius: 3px;
            margin-bottom: 5px;
        }
    }
</style>