<template>
  <div class="todo-list">
    <div class="table">
       <!-- Table Header -->
       <div class="table-row header-row">
        <div class="table-cell header-cell">Completed</div>
        <div class="table-cell header-cell">Text</div>
        <div class="table-cell header-cell">Due Date</div>
        <div class="table-cell header-cell">Actions</div>
      </div>

      <!-- Todo Items -->
    <div
      class="table-row"
      v-for="todo in filteredTodos"
      :key="todo.id"
      id="todo-item"
    >
      <div class="table-cell">
        <input type="checkbox" v-model="todo.completed" />
      </div>
      <div class="table-cell">
        <span :class="{ completed: todo.completed }">{{ todo.text }}</span>
      </div>
      <div class="table-cell" v-if="todo.dueDate">Due: {{ todo.dueDate }}</div>
      <div class="table-cell">
        <button @click="deleteTodo" class="btn btn-danger btn-sm">
          Delete
        </button>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  props: {
    filteredTodos: Array,
  },
  methods: {
    deleteTodo() {
      this.$emit("deleteTodo", this.todo.id);
    },
  },
};
</script>

<style scoped>
.todo-list {
  margin-top: 2rem;
}
.table {
  display: table;
  width: 100%;
  border-collapse: collapse;
}

.table-row {
  display: table-row;
}

.table-cell {
  display: table-cell;
  padding: 0.5rem;
  border: 1px solid #ddd; /* Adding borders for a table-like appearance */
}
.header-row {
  background-color: #f2f2f2; /* Background color for header row */
  color:rgb(8, 2, 2);
}

.header-cell {
  font-weight: bold;
  color:rgb(8, 2, 2);
}
/* .table-row {
  display: table;
  width: 100%;
  margin-bottom: 1rem;
} */

/* .table-cell {
  display: table-cell;
  padding: 0.5rem;
} */

/* .todo-item {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
    margin-left: 0.5rem;
    padding: 1rem;
  }
   */
.completed {
  text-decoration: line-through;
}

.due-date {
  /* margin-left: auto; 
    margin-left: 1rem; */
  color: #888;
}
</style>
