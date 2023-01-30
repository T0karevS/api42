<template>
    <div class="container">
        <h1>hello world!!!!!!!!!!!!!!!!!</h1>
        <h1>aaaaaaaaa</h1>
        <p>im online?</p>
        <h1>eeeeee</h1>
        <p>
            <router-link class="butts" to="/">home</router-link>
            <router-link class="butts" to="/about">aboba</router-link>
            <router-link class="butts" to="/artem"> know more about artemis</router-link>
        </p>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {
    name: "App"
}
</script>

<style scoped>
    .container
    {
        margin-top: 100px;
    }
    h1 {
        color: black;
        font-family: "Century Gothic";
    }
    .butts
    {
        display: flex;
        flex-wrap: wrap;
        text-decoration: none;
        color: gray;
        font-size: 52px;
        font-weight: bold;
        font-family: "Century Gothic";
    }

</style>
