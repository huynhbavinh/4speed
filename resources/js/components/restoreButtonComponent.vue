<template>
    <div>
        <div class="btn btn-restore" @click="restoreArticle">
            Restore
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import {mapActions} from 'vuex'

export default {
    props:['passData'],
    data(){
        return{
            target:null,
        }
    },
    methods:{
        async restoreArticle(){
            this.target = this.passData;

            let formData = new FormData();

            formData.append('articleID',this.target.id);
            let myUrl='/api/restore/'+this.target.id;

            axios.post(myUrl,formData).then(response=>{
                    console.log(response.data.articleID);
                }).catch((error) => {
                    console.error(error);
                });
            this.updateCountGoBack();
        },
        ...mapActions(['updateCountGoBack']),
    },

}
</script>

<style scoped>
    .btn-restore{
        padding: 10px 20px;
        margin: 5px;
        color: white;
        font-weight: bold;
        background-color: red;
        border-radius: 10px;
    }
    .btn-restore:hover{
        color: antiquewhite;
        font-weight: bold;
        background-color: rgba(255, 35, 35, 1);
    }
</style>