<template>
    <div class="container">
        <button class="btn btn-primary" @click="followUser">follow</button>

    </div>
</template>

<script>
    export default {
        props: ['userId'],

        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            followUser(){
                console.log('/follow/ '+ this.userId);
                axios.post('/follow/ '+ this.userId).then(response=>{
                    alert(response)
                });
            }
        }
    }
</script>
