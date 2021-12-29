<template>
    <table>
        <thead>
            <tr>
                <th>スレッドID</th>
                <th>タイトル</th>
                <th>作成日時</th>
                <th>更新日時</th>
                <th>削除</th>
            </tr> 
        </thead>
        <tbody>
            <tr v-for="thread in threads" v-bind:key="thread.id">
                <td>{{thread.id}}</td>
                <td>{{thread.title}}</td>
                <td>{{thread.created_at}}</td>
                <td>{{thread.updated_at}}</td>
                <td>
                    <button v-on:click="DeleteThread(thread.id)">削除</button>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        data:function(){
            return {
                threads:[]
            }
        },
        methods: {
            getThread() {
                axios.get('/api/thread_index')
                    .then((res) => {
                        this.threads = res.data;
                    });
            },
            DeleteThread(id) {
                axios.delete('api/thread_index/' + id)
                .then((res) => {
                        this.getThread()
                    });
            }
        },
        mounted() {
            this.getThread();
        }
    }
</script>

<style>

</style>