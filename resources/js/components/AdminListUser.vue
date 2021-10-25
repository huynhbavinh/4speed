<template>
    <div>
        <h1>Danh sách Người dùng</h1>
        <div>
            <div>
                <div>
                    <table id="users">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>V.I.P</th>
                            <th>Blocked</th>
                            <th>Option</th>
                        </tr>
                        <tr v-for="(user,index) in userList" :key="index">
                            <td>
                                {{user.name}}
                            </td>
                            <td>
                                {{user.email}}
                            </td>
                            <td>
                                {{user.username}}
                            </td>
                            <td>
                                <span class="VIP-banner" v-if="user.isVip">
                                    V.I.P
                                </span>
                                <span class="normal-banner" v-else>
                                    None
                                </span>
                            </td>
                            <td>
                                <span class="blocked-banner" v-if="user.isVip">
                                    Blocked
                                </span>
                                <span class="noneBlock-banner" v-else>
                                    Active
                                </span>
                            </td>
                            <td>
                                <button class="btn">Block</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return {
            userList:null,
        }
    },
    created(){
        this.getAllUser();
    },
    methods:{
        async getAllUser(){
            const response = await axios.get('/api/admin/user');
            this.userList = response.data.users;
        },

    }
}
</script>

<style scoped>

#users {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#users td, #users th {
  border: 1px solid #ddd;
  padding: 8px;
}

#users tr:nth-child(even){background-color: #f2f2f2;}

#users tr:hover {background-color: #ddd;}

#users th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>