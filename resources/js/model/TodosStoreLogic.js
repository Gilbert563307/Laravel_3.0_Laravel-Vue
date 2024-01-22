import { defineStore } from 'pinia';
import axios from 'axios';

export const useTodosStoreLogic = defineStore('useTodosStoreLogic', {
  state: () => ({
    todos: [

    ],
    todo: {},
  }),

  actions: {
    async getallTodos() {
      const { data } = await axios.get('http://localhost:8000/api/todos');
      this.todos = data.data;
    },

    async deleteTodo(id) {
      console.log(id)
    }
  },

});


