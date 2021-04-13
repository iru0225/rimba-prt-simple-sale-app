import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

export const store = new Vuex.Store({
    state:{
        menuitem:[
            {
                name: 'Rekomendasi',
                path: '/recomended',
                tag:'recomended'
            },
            {
                name: 'Kategori',
                path: '/categories',
                tag:'categories'
            },
            {
                name: 'All Product',
                path: '/products',
                tag:'products'
            },
        ],

        cart:[]
    },

    getters:{
        TotalPrice: state => {
            let data = state.cart;
            let price = 0;

            for (let index = 0; index < data.length; index++){
                price = price + (data[index].qty * data[index].harga_satuan);
            }

            return price;
        },

        TotalItem: state => {
            let data = state.cart;
            let item = 0;

            for (let index = 0; index < data.length; index++){
                item = item + data[index].qty;
            }

            return item;
        }
    },

    mutations:{
        ADD_TO_CART(state, data) {
            let duplicate = state.cart.find(item => {
                return item.id == data.id
            })

            if (duplicate) {
                duplicate.qty += data.qty;
                return;
            }

            state.cart.push(data);
        },

        REMOVE_ITEM_FROM_CART(state, data){
            let newData = state.cart.filter(e => e.id != data);
            return state.cart  = newData;
        }
    },

    actions:{
        addToCart({commit}, data)  {
            commit('ADD_TO_CART', data)
        },

        removeItem({commit}, data){
            commit('REMOVE_ITEM_FROM_CART', data);
        }
    }
})