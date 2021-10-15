<template>
    <div id="app">
       <div>
            <h1>Chỉnh sửa bài viết</h1>
               <div>
                    <label for="">Tên sản phẩm</label>
                    <input v-model="name" type="text">
                </div>

                <div>
                    <label for="">Giá cả</label>
                    <input v-model="price" type="text">
                </div>
                
                <div>
                    <label for="">Tiêu đề</label>
                    <input v-model="title" type="text">
                </div>

                <div>
                    <label for="">Thể loại</label>
                    <select v-model="category_id" name="" id="">
                        <option 
                                v-for="(category,index) in listCategory"
                                :key="index"
                                :value="category.id"
                        >
                        {{category.name}}
                        </option>
                    </select>
                </div>    
            <div>
                <specifications-component></specifications-component>
            </div>

                <div>
                    <label for="">Chi tiết sản phẩm</label>
                    <input v-model="detail" type="text">
                </div>
                <button>submit</button>
       </div>
       <div>
           <h2>xem trước</h2>
           <div class="dashboard">
                <div>
                    <image-uploader></image-uploader>
                </div>
           </div>
       </div>
    </div>
</template>

<script>

import {mapActions, mapGetters, mapMutations} from 'vuex'
import SpecificationsComponent from './SpecificationsComponent.vue'
import axios from 'axios'
import ImageUploader from './imageUploader.vue'

export default {
    components: { SpecificationsComponent, ImageUploader },
    props:['passData'],
    data(){
        return{
            oldArticle:this.passData,
            listCategory:[],
            name:'',
            price:'',
            title:'',
            detail:'',
            category_id:'',
        }
    },
    created(){
        console.log(this.oldArticle.id);
        this.getArticle();
    },
    methods:{
        async getArticle(){
                try {
                    const response = await axios.get('/api/article/'+this.oldArticle.id);
                    this.listCategory = response.data.listCategories;
                    console.log(response.data);
                } catch (error) {
                    this.error = error.response.data;
                }
            },
    }
    
}
</script>

<style>

</style>