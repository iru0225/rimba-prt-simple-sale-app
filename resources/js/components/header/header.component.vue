<template>
    <div>
        <div id="header">
            <nav>
                <div class="nav-menu">
                    <p class="nav-logo">
                        <router-link to="/">Save Your Nature</router-link>
                    </p>
                    <div class="nav-menu-list">
                        <div class="menu-list">
                            <div class="menu-item" v-for="(item, index) in menuItem" :key="index">
                                <router-link :to="item.path">{{item.name}}</router-link>
                            </div>
                        </div>
                    </div>
                    <div class="nav-user-cart">
                        <div class="nav-cart" @click="openCart">
                            <span>{{qty? qty : 0}}</span>
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <mini-cart
                            :open="open"
                        />
                        <div class="nav-user">
                            <i class="far fa-user"></i>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            open: false
        }
    },
    methods:{
        openCart(){
            console.log(this.open);
            this.open = !this.open;
        }
    },
    computed:{
        menuItem(){
            return this.$store.state.menuitem;
        },

        qty(){
            let data = this.$store.getters.TotalItem
            console.log(data);
            return data;
        }
    }
}
</script>

<style lang="scss" scoped>
    #header{
        position: sticky;
        top: 0;
        left: 0;
        right: 0;
        height: 3.4rem;
        background-color: #F6F1EC;

        .nav-menu{
            display: flex;
            justify-content: space-between;

            .nav-logo{
                background: url(/images/basmalah.svg?61a5b7e…) no-repeat;
                background-position: center;
                background-size: 125px auto;
                width: 145px;
                height: 1.8rem;
                text-indent: 100%;
                white-space: nowrap;
                overflow: hidden;

                a{
                    height: 100%;
                    display: block;
                }
            }

            .nav-menu-list{
                height: 3.4rem;
                
                .menu-list{
                    display: flex;
                    justify-content: space-around;
                    flex-direction: row;

                    .menu-item{
                        font-size: 1.3rem;
                        padding: 1rem 2rem;

                        a{
                            text-decoration: none;
                            color: dimgray;
                        }
                    }
                }
            }

            .nav-user-cart{
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                padding: 1rem 1.3rem;
                font-size: 1.3rem;

                i{
                    margin: 0 5px 0 5px;
                }
            }
        }
    }
</style>