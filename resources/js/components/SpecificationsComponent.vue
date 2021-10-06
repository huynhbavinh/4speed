<template>
   <div id="app">
       <h1>Tạo bài viết</h1>
            <input type="text" name="name" placeholder="tên bài viết">
            <input type="text" name="price" placeholder="Giá cả">
            <input type="text" name="title" placeholder="tên tiêu đè">
        <!-- specifications -->
       <ul>
            <li v-for ="(item,index) in specificantions" :key="index">
                <span>{{item.title}}</span>
                <input type="text" v-model="specificantions[index].value">
            </li>
       </ul>
        <!-- specifications -->
            <input type="text" name="detail" placeholder="Chi tiết">
        <!-- Options -->
        <ul>
            <li v-for ="(item,index) in specificantions" :key="index">
                <span>{{item.title}}</span>
                <input type="text" v-model="specificantions[index].value">
            </li>
       </ul>
       <!-- Options -->
            <input type="text" name="thumbnail" placeholder="ảnh">
        <!-- Path -->
         <ul>
            <li v-for ="(item,index) in specificantions" :key="index">
                <span>{{item.title}}</span>
                <input type="text" v-model="specificantions[index].value">
            </li>
       </ul>
        <!-- Path -->
       <button @click="showList">check</button>
   </div>
</template>

<script>
    export default {
        data() {
            return {
                specificantions:[
                    { title: "Động cơ", value: "" },   
                    { title: "Tỉ số nén",  value: "" } ,  
                    { title: "Mô-men xoắn cực đại",  value: "" }   ,
                    { title: "Đường kính xi lanh X pít tông", value: "" }   ,
                    { title: "Hệ thống cung cấp nhiên liệu", value: "" }    ,
                    { title: "Hệ thống đánh lửa",  value: "" } ,  
                    { title: "Hệ thống truyền động", value: "" } ,  
                    { title: "Vành và lốp", value: "" }   ,
                    { title: "Hệ thống phanh trước", value: "" }  , 
                    { title: "Hệ thống phanh sau", value: "" },   
                    { title: "Dài x rộng x cao", value: "" } ,  
                    { title: "Chiều dài cơ sở", value: "" },   
                    { title: "Chiều cao yên", value: "" } ,  
                    { title: "Chiều cao gầm" , value: "" }  , 
                    { title: "Trọng lượng ướt", value: "" }   ,
                    { title:"Dung tích bình xăng", value: "" }  ,  
                    { title:"Dung tích dầu máy", value: "" } ,   
                ]
            }
        },
        methods:{
            
        }
    }
</script>
