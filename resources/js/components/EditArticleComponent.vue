<template>
    <div id="app">
       <div class="edit-table">
            <h1>Chỉnh sửa bài viết</h1>
               <div >
                    <label for="">Tên sản phẩm</label>
                    <input v-model="product.name" type="text">
                </div>

                <div>
                    <label for="">Giá cả</label>
                    <input v-model="product.price" type="text">
                </div>
                
                <div>
                    <label for="">Tiêu đề</label>
                    <input v-model="product.title" type="text">
                </div>

                <div>
                    <label for="">Thể loại</label>
                    <select v-model="product.category_id" name="" id="">
                        <option 
                                v-for="(category,index) in listCategory"
                                :key="index"
                                :value="category.id"
                        >
                        {{category.name}}
                        </option>
                    </select>
                </div>    
            <!-- <div>
                <specifications-component></specifications-component>
            </div> -->
                <div>
                    <label for="">Chi tiết sản phẩm</label>
                    <input v-model="product.detail" type="text">
                </div>
                <div>
                    <input type="checkbox" value="1" v-model="product.is_hot" id="">
                    <span>Bài viết HOT</span>
                </div>
                <div class="btn btn-save" @click="dataPost">Save</div>
                <div class="btn btn-del" @click="dataPostDelete">Delete</div>
       </div>
       <div>
           <h2>xem trước</h2>
           <div class="dashboard">
                <div>
                    <img :src="this.url" alt="">
                </div>
           </div>
       </div>
    </div>
</template>

<script>

import {mapActions,mapGetters } from 'vuex'
import SpecificationsComponent from './SpecificationsComponent.vue'
import axios from 'axios'
import ImageUploader from './imageUploader.vue'

export default {
    components: { SpecificationsComponent, ImageUploader },
    computed:{
        ...mapGetters(['countGobackStore']),
    },
    props:['passData'],
    data(){
        return{
            oldArticle:this.passData,
            listCategory:[],
            product:
            {
                name: '',
                price:'',
                title:'',
                detail:'',
                category_id:'',
                is_hot:null,
            },
            img:'',
            url :'',
        }
    },
    created(){
        this.getArticle();
        this.setData();

    },
    updated(){
    },
    methods:{
        async getArticle(){
                try {
                    const response = await axios.get('/api/article/'+this.oldArticle.id);
                    this.listCategory = response.data.listCategories;
                } catch (error) {
                    this.error = error.response.data;
                }
            },
        setData(){
            this.product.name = this.oldArticle.name;
            this.product.price = this.oldArticle.price;
            this.product.title = this.oldArticle.title;
            this.product.detail = this.oldArticle.detail;
            this.product.category_id = this.oldArticle.category_id;
            this.product.is_hot = this.oldArticle.is_hot;

            this.img = this.oldArticle.thumbnail;

            const temp = '/storage/img/product/';
            this.url = temp + this.img;
        },
        async dataPost(){
                var data = JSON.stringify(this.product);
                var toJson = JSON.parse(data);

                let formData = new FormData();
                formData.append('product',JSON.stringify(toJson));
                let url_post = '/api/article/'+this.oldArticle.id;

                axios.post(url_post,formData).then(response=>{

                }).catch((error) => {
                    console.error(error);
                });
                window.location.reload();
        },
        dataPostDelete(){
                var data = JSON.stringify(this.product);
                var toJson = JSON.parse(data);

                let formData = new FormData();
                formData.append('product',JSON.stringify(toJson));
                let url_post_del = '/api/article/'+this.oldArticle.id+'/deleted';

                axios.post(url_post_del,formData).then(response=>{
                }).catch((error) => {
                    console.error(error);
                });
                history.back();
        },
        ...mapActions(['updateCountGoBack']),
    }
}
</script>


<style scoped>
#app{
    display: flex;
    justify-content: space-between;
    border: 1px solid aqua;
    border-radius: 20px;
    margin: 10px 100px;
    padding: 10px;
    text-align: start;
}

#app div div label{
    margin-right: 20px;
    margin: 5px 0px;
    width: 150px;
}
#app h1{
    margin-bottom: 10px;
    color: blueviolet;
    font-style: italic;
}
.dashboard{
    border: 2px dashed rebeccapurple;
}
span{
    text-align: center;
    max-width: 150px;
}
.edit-table div{
    margin: 15px 10px;
}
.btn{
    padding: 10px 40px;
    margin: 10px 5px;
    border-radius: 15px;
    color: white;
    font-weight: bold;
}
.btn-save{
    background: linear-gradient(80deg, #2a9ad6 20%, #80b1e6 60%);
}
.btn-del{
    background: linear-gradient(80deg, #d12c2c 20%, #b31a48 60%);
}

</style>