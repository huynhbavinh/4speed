<template>
    <div class="app">
        <div v-for="(item,index) in list" 
            :key="index">
                {{item.name}}
               <button @click="getSpec(index)">Check Spec</button>
                <h3 v-for="(info,index) in spec" 
                        :key="index"
                    >{{index}} : {{info}}</h3>
                <hr>
        </div>

    </div>
</template>

<script>
import axios from 'axios'
    export default {
        data(){
            return{
               list:[],
               spec:[],
               error:null,
            }
        },
        created() {
           this.GetAllProduct();
        },
        methods:{
            async GetAllProduct(){
                try {
                    const response = await axios.get('/api/article');
                    this.list = response.data;
                    // this.spec = this.list[specifications].toString();
                } catch (error) {
                    this.error = error.response.data;
                }
            },
            getSpec(index){
                var data = JSON.stringify(this.list);
                var toJson = JSON.parse(data);
                var temp = JSON.parse(JSON.stringify(toJson[index].specifications));
                var temp1 = JSON.parse(temp);

                this.spec = temp1;
                // for (const key in toJson) {
                //     if (Object.hasOwnProperty.call(toJson, key)) {
                //         const element = toJson[key].specifications;
                //         console.log(element);
                //     }
                // }
            }

        }
    }
    
</script>

<style scoped>
.app{
    margin: 100px;
}

</style>
