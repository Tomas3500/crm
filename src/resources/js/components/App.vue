<template>
    <div class="container pt-3">
        <div class="row">
            <main class="col-lg-9">
                <router-view/>
            </main>
        </div>
    </div>
</template>

<script>
import MainComponent from "./views/MainComponent";
import LoginComponent from "./layout/LoginComponent";
export default {
    name: "App",
    components: {
        LoginComponent
    },

    data() {
        console.log('hello')
        return {
            token: "",
        };
    },
    updated() {
        this.token = localStorage.getItem("api_token");
        console.log(this.token)
    },
};
console.log('hello');
</script>
