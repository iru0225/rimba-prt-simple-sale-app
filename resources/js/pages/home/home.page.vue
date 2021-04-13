<template>
    <div>
        <div class="wrapper">
            <div>Water Pump</div>
            <div>Forklift</div>
            <div>Tractor</div>
            <div class="last-grid">Harvester</div>
        </div>
        <div class="recomended-wrapper">
            <span>Rekomendasi</span>
            <div class="some-recomended">
                <item-preview v-for="(item, index) in previewList" :key="index" :items="item"/>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            previewList: []
        }
    },

    methods: {
        getRecomended(){
            let th = this;
            axios({
                methods: 'get',
                url: `${window.location.origin}/api/getRecomendedItem`
            }).then((response) => {
                th.previewList = response.data;
            })
        },
        addToCart(){
            
        }
    },

    mounted() {
        this.getRecomended();
    },
}
</script>

<style lang="scss" scoped>
    .wrapper{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-auto-rows: minmax(100px, auto);
        gap: .2rem;
        margin: 2.5rem 5rem;

        div{
            border: 1px solid;
            border-radius: 5px;
            
            &:hover{
                cursor: pointer;
            }

            &:last-of-type{
                grid-row: 1/4;
            }
        }
    }

    .recomended-wrapper{
        margin: 0 5rem 1.8rem;

        .some-recomended{
            margin-top: .5rem;
            display: flex;
            justify-content: space-between;
        }
    }
</style>