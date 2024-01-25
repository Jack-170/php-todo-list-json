<script>

import axios from 'axios';

export default {
    name:'AppMain',
    data(){
        return{
            Tasks: [],
            newTaskText: ''
        };
    },
    methods: {
    addTask() {
        const newTask = {
            text: this.newTaskText,
            completed: false
        };
        this.Tasks.push(newTask);
        this.newTaskText = '';
    }
    },
    mounted() {

    const t = this;
    axios.get('http://localhost/php-todo-list-json/taskApi.php')
        .then(res => {

        // console.log("data: " + JSON.stringify(res.data));
        t.Tasks = res.data;
     }).catch(err => console.error(err));
    }
}



</script>

<template>





    <div class="container-fluid d-flex align-items-center">

        <div class="ms-container text-center mx-auto">

            <h1>To Do LIST</h1>

            <form class="pb-3" @submit.prevent="addTask">
                <input class="mx-2" type="text" v-model="newTaskText">
                <input type="submit" value="aggiungi">
            </form>


            <div class="container text-center">

                <ul>
                    <li v-for="(task, index) in Tasks" :key="index" class="p-4 d-flex justify-content-between">
                       <h3>{{ task.text }}</h3>
    
                       <span>{{ task.completed ? 'Done' : 'Todo' }}</span>
                      
                         
                    </li>
                </ul>

            </div>

            

        </div>

    </div>


   
  
  
</template>

<style lang="scss" scoped>
@use '../styles/general.scss' as *;

.container-fluid{
    width: 100vw;
    height: 100vh;
    background-color: rgb(0, 0, 0);
    color: rgb(255, 255, 255);

    .ms-container{        
        width: 50%;

        .container{
            background-color: rgb(79, 79, 78);
            border-radius: 10px;
            overflow-y: scroll; 
            max-height: 530px;
        }
    }

    hr{
        color: white;
    }
}


li{
    list-style: none;
}


</style>