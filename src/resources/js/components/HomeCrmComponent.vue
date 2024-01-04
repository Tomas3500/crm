<template>
  <div class="row">
    <navbar-component :token="token"></navbar-component>
    <main class="col-lg-9">
    </main>
  </div>
</template>

<script>
import NavbarComponent from "./app/NavbarComponent";
export default {
  name: "HomeCrm",
  components: {

  },

  data() {
    console.log('hello')
    return {
      token: "",
    };
  },

  updated() {
    this.token = localStorage.getItem("api_token");
  },
};
console.log('hello');
</script>

