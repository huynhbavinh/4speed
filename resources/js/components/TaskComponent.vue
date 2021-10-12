<template>
    <div>
        <input type="checkbox" name="" id="" v-model="todo.done">
        <span :class="{done: todo.done}" >{{todo.name}}</span>
        <a href="#" @click.prevent="deleteTodo(index)">xóa</a>
    </div>
</template>

<script>
export default {
    props:['todo','index','deleteTodo'],
}
</script>

<style>
.done{
    text-decoration-line: line-through;
}
</style>