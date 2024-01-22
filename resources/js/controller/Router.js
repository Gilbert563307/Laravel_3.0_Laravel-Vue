import { createRouter, createWebHistory } from 'vue-router'
import CollectListTodos from "../view/CollectListTodos.vue";
import CollectReadTodo from "../view/CollectReadTodo.vue";
import CollectCreateTodo from "../view/CollectReadTodo.vue";
import TodosController from "../controller/TodosController.vue";

const routes = [
    {
        path: '/todos',
        name: "Todos",
        component: TodosController,
        children: [
            {
                path: "",
                component: CollectListTodos,
            },
            {
                path: "/todos/read/:id",
                component: CollectReadTodo,
            },
            {
                path: "todos/create",
                component: CollectCreateTodo,
            }
        ]
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});
export default router;
