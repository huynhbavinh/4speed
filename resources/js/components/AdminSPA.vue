<template>
   <dir class="app">
       <div class="menu">
           <div class="service">
               <div class="btn" @click="OpenSubMenu">
                   Quản lý bài viết
               </div>
               <div :class="{selected :isSelected }">
                   <span class="sub-menu" @click="openList">Danh sách bài viết</span>
                   <span class="sub-menu" @click="openCreateTable">Tạo bài viết</span>
               </div>
           </div>
       </div>
        <div class="admin-content">
            <admin-list-product-component v-if="listShow" :key="this.countGobackStore"></admin-list-product-component>
            <create-article-component v-if="createTable"></create-article-component>
        </div>
   </dir>
</template>

<script>
import { mapActions, mapGetters } from 'vuex';
import AdminListProductComponent from './AdminListProductComponent.vue';
import CreateArticleComponent from './createArticleComponent.vue';
export default {
  components: { AdminListProductComponent, CreateArticleComponent },
  computed:{
      ...mapGetters(['countGobackStore'])
    },
    data(){
        return{
            isSelected: true,
            listShow: true,
            createTable: false,
        }
    },
    methods:{
        OpenSubMenu(){
            this.isSelected = !this.isSelected;
        },
        openList(){
            this.listShow = !this.listShow;
            
        },
        openCreateTable(){
            this.createTable = !this.createTable;
            
        },
    },
    watch:{
        countGobackStore(){
            console.log('thay đổi nè');
        }
    }
}
</script>

<style scoped>
.app{
    display: flex;
    overflow: hidden;
}
.menu{
    width: 200px;
    background-color: white;
}
.sub-menu{
    display: inline-block;
    padding: 3px 6px;
    background-color: rgba(27, 228, 124, 0.3);
    margin-top: 10px;
    margin-left: 30px;
    cursor: pointer;
}

.selected{
    display: none;
}
.admin-content{
    width: 85%;
    overflow: auto;
    height: 500px;
}
</style>