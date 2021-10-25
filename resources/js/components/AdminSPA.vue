<template>
   <dir class="app">
       <div class="menu">
           <div class="service">
               <div class="btn" @click="OpenSubMenu_Articles">
                   Quản lý bài viết
               </div>
               <div :class="{selected :isSelected_Articles }">
                   <span class="sub-menu" @click="openList">Danh sách bài viết</span>
                   <span class="sub-menu" @click="openCreateTable">Tạo bài viết</span>
               </div>
           </div>
           <div class="service">
               <div class="btn" @click="OpenSubMenu_Users">
                   Quản lý Người Dùng
               </div>
               <div :class="{selected :isSelected_Users }">
                   <span class="sub-menu" @click="openListUser">Danh sách Người dùng</span>
                   <span class="sub-menu" @click="openListFamous">Danh sách Người nổi tiếng</span>
               </div>
           </div>
       </div>
        <div class="admin-content">
            <admin-list-product-component v-if="listShow" :key="this.countGobackStore"></admin-list-product-component>
            <create-article-component v-if="createTable"></create-article-component>
            <admin-list-user v-if="listUserShow"></admin-list-user>
            <admin-list-farmos v-if="listFamousShow"></admin-list-farmos>
        </div>
   </dir>
</template>

<script>
import { mapActions, mapGetters } from 'vuex';
import AdminListFarmos from './AdminListFarmos.vue';
import AdminListProductComponent from './AdminListProductComponent.vue';
import AdminListUser from './AdminListUser.vue';
import CreateArticleComponent from './createArticleComponent.vue';
export default {
  components: { AdminListProductComponent, CreateArticleComponent, AdminListFarmos, AdminListUser },
  computed:{
      ...mapGetters(['countGobackStore'])
    },
    data(){
        return{
            isSelected_Articles: true,
            isSelected_Users: true,
            listShow: true,
            createTable: false,
            listUserShow: false,
            listFamousShow: false,

        }
    },
    methods:{
        OpenSubMenu_Articles(){
            this.isSelected_Articles = !this.isSelected_Articles;
            this.listUserShow = false;
            this.listFamousShow = false;
        },
        openList(){
            this.listShow = !this.listShow;
            
        },
        openCreateTable(){
            this.createTable = !this.createTable;
        },
        OpenSubMenu_Users(){
            this.isSelected_Users = !this.isSelected_Users;
            this.listShow = false;
            this.createTable = false;
        },
        openListUser(){
            this.listUserShow = !this.listUserShow;
        },
        openListFamous(){
            this.listFamousShow = !this.listFamousShow;
        }
    },
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