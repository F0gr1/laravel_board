<template>
    <table>
        <div class='row col-md-12'>
            <div class="card col-md-6 text-center" v-for="thread in threads" v-bind:key="thread.id">
                <div class="card-header">
                     {{thread.title}}
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <footer class="blockquote-footer">{{thread.created_at}}</footer>
                    <button v-on:click="DeleteThread(thread.id)">削除</button>
                    </blockquote>
                </div>
            </div>
        </div>
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
                axios.delete('/api/thread_index/' + id)
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