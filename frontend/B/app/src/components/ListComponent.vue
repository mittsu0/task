<template>
    <div class="form">
        <input type="text" class="input" v-model="word">
        <button class="btn btn-add" v-on:click="addItem()">追加</button>
    </div>
    <ul class="items">
        <li v-for="item, id in items" :key="id" class="items-list">
            <button class="btn btn-delete" v-on:click="deleteItem(id)">X</button>
            <p class="item">{{ item }}</p>
        </li>
    </ul>
</template>

<script>
export default {
    data() {
        return {
            word: '',
            id: 0,
            items: {}
        }
    },
    methods: {
        addItem() {
            if (this.word === '') {
                return;
            }
            this.items[this.id] = this.word
            this.word = ''
            this.id++
        },
        deleteItem(i) {
            delete (this.items[i])
        }
    },
    computed: {

    }
}
</script>

<style>
.form {
    display: flex;
    gap: 0.5rem;
    height: 30px;
    margin: 50px 0 50px 0;
}

.input {
    box-sizing: border-box;
    flex-basis: 90%;
    height: 100%;
    border: 1px navy solid;
}

.btn {
    background-color: navy;
    color: white;
}

.btn-add {
    flex-basis: 10%;
    font-size: 12px;
}

.items {
    width: 500px;
}

.items-list {
    box-sizing: border-box;
    height: 50px;
    border: 1px navy solid;
    display: flex;
    margin-bottom: 5px;
}

.btn-delete {
    height: 100%;
    width: 50px;
}

.item {
    padding-left: 20px
}
</style>