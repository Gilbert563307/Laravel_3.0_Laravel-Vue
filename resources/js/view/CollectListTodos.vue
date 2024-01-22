<script setup>
import { ref } from 'vue';
import { useTodosStoreLogic } from '../model/TodosStoreLogic';

const TodosLogic = useTodosStoreLogic();

const isLoading = ref(true);
TodosLogic.getallTodos().then(() => {
    isLoading.value = false;
});

</script>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

.actions {
    display: flex;
    justify-content: center;
    gap: 1em;
}
</style>

<template>
    <div>

        <div v-if="!isLoading">
            <h1>Todo overzicht</h1>

            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Descriptions</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr v-for="(item, index) in TodosLogic.todos" :key="index">
                        <td>{{ item.id }}</td>
                        <td> {{ item.title }}</td>
                        <td> {{ item.description }}</td>
                        <td class="actions">
                            <router-link :to="{ path: `todos/read/${item.id}` }">read</router-link>
                            <a href="#" @click="TodosLogic.deleteTodo">delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>



        </div>
        <div v-else>Aan het laden</div>
    </div>
</template>