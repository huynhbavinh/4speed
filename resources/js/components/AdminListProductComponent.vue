<template>
    <div class="Listcomponent">
        <h1>
            Danh sách bài viết
        </h1>
        <div>
            <ul v-for="(article,index) in listArticles" 
                :key="index">
                <li class="admin-product-card">
                    <div>
                        <h3 class="editArticleBtnFake">
                            <a @click="showEdit">
                                {{article.name}}
                            </a>
                            <span class="deleted" v-if="article.deleted_at">
                                Deleted
                            </span>
                        </h3>
                        <div>
                            <edit-article-component :passData='article' v-if="openEdit"></edit-article-component>
                        </div>
                        <div v-if="!openEdit">
                            <div v-for="(category,index) in listCategories" 
                                :key="index">
                                <h4 v-if="article.category_id == category.id">
                                    {{category.name}}
                                </h4>
                            </div>
                            <span class="status stt-hot" v-if="article.is_hot">
                                HOT
                            </span>
                            <span class="status" v-else>
                                Normal
                            </span>
                        </div>
                    </div>
                    <div v-if="article.deleted_at">
                        <restore-button-component :passData='article'></restore-button-component>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import {mapActions, mapGetters, mapMutations} from 'vuex'

export default {
    props: ['editRoute'],
    data(){
        return{
            listArticles:null,
            listCategories:null,
            openEdit: false,
        }
    },
    created(){
        this.getArticles();
        console.log(this.countGobackStore);
    },
    methods:{
        async getArticles(){
            const response = await axios.get('/api/admin/article/');
            this.listArticles = response.data.listArticles;
            this.listCategories = response.data.listCategories;
        },
        OpenCreate(){
            this.AdminCreate = !this.AdminCreate;
        },
        showEdit(){
            this.openEdit = !this.openEdit;
        }
    },
}
</script>

<style scoped>
*{
    list-style: none;
}
.admin-product-card{
    display: flex;
    justify-content: space-between;
    border: 1px solid aqua;
    border-radius: 10px;
    padding: 20px;
    margin: 10px;
    width: 100%;
}
.status{
    color: white;
    font-weight: 900;
    background: rgb(86, 86, 247);
    padding: 5px 10px;
}
.stt-hot{
    background-color: red;
}
.deleted{
    color: red;
    font-size: 16px;
    font-style: italic;
}
.Listcomponent{
    width: 88%;
}
.editArticleBtnFake{
    cursor: pointer;
    color: blue;
    text-shadow: 10px;
    font-style: italic;
}
</style>