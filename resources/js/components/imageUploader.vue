<template>
   <div>
        <input type="file" name="thumbnail" ref="input" class="hidden" @change="fileChange">
        <button class="btn btn-default border" @click.prevent="openFile">Select Imgage</button>
        <img ref="previewImg" style="max-width = 250px" >
   </div>

</template>

<script>
import axios from 'axios'
import {mapActions, mapGetters,} from 'vuex'
    export default {
        computed:{

        },
       methods:{
           openFile(){
               this.$refs.input.click();
           },
           fileChange(){
                let imgName;
                let file = this.$refs.input.files[0];
                this.$refs.previewImg.src = URL.createObjectURL(file);

                //upload file
                let formData = new FormData();
                formData.append('thumbnail',file);
                axios.post('/api/upload-thumbnail',formData).then(response=>{
                    imgName =response.data.filename;
                    this.updateImgProduct(imgName);                                  
                    this.$refs.previewImg.src = '/storage/img/product/'+response.data.filename;
                });

           },
           ...mapActions(['updateImgProduct'])
       }
    }
</script>
<style scoped>
input{
    display:none;
}
img{
    display: block;
    margin: 10px;
}
</style>
