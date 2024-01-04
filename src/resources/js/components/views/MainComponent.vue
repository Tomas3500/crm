<template>

    <div class="row">
        <div class="col-lg-4">
            <NavbarComponent/>
        </div>
        <div class="col-lg-8">
            <Clint/>
        </div>
    </div>
</template>

<script>
import Clint from "./Clints.vue";
import NavbarComponent from "../app/NavbarComponent";
import Cars from "./Cars";

export default {
    name: "dashbar",
    components: {
        Clint,
        NavbarComponent,
        Cars
    },

    updated() {
        this.token = localStorage.getItem("api_token");
        // console.log(this.token);
    },
};
</script>

<style>
</style>
