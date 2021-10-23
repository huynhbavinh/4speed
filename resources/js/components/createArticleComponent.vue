<template>
    <div id="app">
       <div>
            <h1>Tạo bài viết</h1>
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
                <button @click="getData">submit</button>
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
    computed:{
        ...mapGetters(['imgProductStore']),
        ...mapGetters(['specStore']),
        ...mapGetters(['optionStore']),
        ...mapGetters(['countGobackStore']),
    },
    data() {
        return {
            name:'',
            price:'',
            title:'',
            category_id:null,
            specifications:[],
            detail:'',
            options:'',
            thumbnail:'',
            listCategory:[],
            product:{name_p:'', price_p:'',title_p:'',category_id_p:'',spec_p:'',detail_p:'',options_p:'',thumbnail_p:''},
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
            },
            createProduct(){
                var temp = this.category_id;
                this.specifications = this.specStore;
                this.options = this.optionStore;
                this.thumbnail = this.imgProductStore;

                this.product.name_p = this.name;
                this.product.price_p = this.price;
                this.product.title_p = this.title;
                
                this.product.spec_p = this.specifications;
                this.product.detail_p = this.detail;
                this.product.options_p = this.options;
                this.product.thumbnail_p = this.thumbnail;
                this.product.category_id_p = temp;
            },
            async getData(){
                this.createProduct();
                var data = JSON.stringify(this.product);
                var toJson = JSON.parse(data);

                let formData = new FormData();
                formData.append('product',JSON.stringify(toJson));

                
                axios.post('/api/article',formData).then(response=>{
                    console.log(response);

                    console.log(response.data);
                }).catch((error) => {
                    console.error(error);
                    });
                this.updateCountGoBack();
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
    width: 150px;
}
#app h1{
    margin-bottom: 10px;
    color: blueviolet;
    font-style: italic;
}
.dashboard{
    width: 200px;
    height: 250px;
    border: 1px dashed rebeccapurple;
}
span{
    text-align: center;
    max-width: 150px;
}
    
</style>