<template>
    <div id="app">
       <div>
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
                <select name="" id="">
                    <option value=""
                            v-for="(category,index) in listCategory"
                            :key="index"
                    >
                    <input type="number"
                            v-model="category_id"
                    >
                    {{category.id}}
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
            <div>
                <image-uploader></image-uploader>
            </div>
       </div>
       <div>
           <h2>xem trước</h2>
           <div class="dashboard">
               {{category_id}}
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
    computed:{

    },
    data() {
        return {
            name:'',
            price:'',
            title:'',
            category_id:'',
            specifications:'',
            detail:'',
            options:'',
            thumbnail:'',
            test:'',
            listCategory:[],
        }
    },
    created(){
        this.GetAllProduct();
    },
    methods:{
            async GetAllProduct(){
                try {
                    const response = await axios.get('/api/article');
                    this.listCategory = response.data.listCategories;
                } catch (error) {
                    this.error = error.response.data;
                }
            }
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
    width: 150px;
}
.dashboard{
    width: 300px;
    height: 300px;
    border: 1px dashed rebeccapurple;
}

    
</style>