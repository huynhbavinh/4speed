<template>
   <div>
        <h2>Thông số kỹ thuật</h2>
        <ul>
            <li>
                <label for="dongCo">Động cơ</label>
                <input v-model="spec.dongCo" type="text">
            </li>
            <li>
                <label for="xyLanh">Xi Lanh</label>
                <input v-model="spec.xiLanh" type="text">
            </li>
            <li>
                <label for="tiSoNen">Tỉ số nén</label>
                <input v-model="spec.tiSoNen" type="text">
            </li>
        </ul>
        <h2>Phụ Tùng</h2>
        <ul>
            <li>
                <label for="tayThang">tay thắng</label>
                <input v-model="options.tayThang" type="text">
            </li>
            <li>
                <label for="kinh">Kính chắn gió</label>
                <input v-model="options.kinh" type="text">
            </li>
        </ul>
        <button @click="passingData">Click</button>
   </div>
</template>

<script>
import {mapActions} from 'vuex'
    export default {
        computed:{
        },
        data() {
            return {
                spec:{ dongCo:'',xiLanh: '',tiSoNen:'' },
                options:{ kinh:'',tayThang: ''},
                specData:'',
                optionsData:''
            }
        },
        methods:{
            exportDataSpec(){
                var destroyStruc = JSON.stringify(this.spec);
                var toJson = JSON.parse(destroyStruc);
                this.specData = toJson;
            },
            exportDataOption(){
                var destroyStruc = JSON.stringify(this.options);
                var toJson = JSON.parse(destroyStruc);
                this.optionsData = toJson;
            },
            passingData() {
                this.exportDataSpec();
                this.exportDataOption();
                this.updateSpecStore(this.specData);
                this.updateOptionStore(this.optionsData);

            },
            ...mapActions(['updateSpecStore']),
            ...mapActions(['updateOptionStore']),

        }
    }
</script>

<style scoped>

div ul li label{
    margin-right: 20px;
    width: 111px;
}

</style>