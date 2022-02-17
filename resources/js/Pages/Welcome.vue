<template>
    <h1>hello, {{name}}</h1>
    <h3>In this series, we're going to use following frameworks:</h3>
    <ul>
        <li v-for="framework in frameworks" :key="framework" v-text="framework"></li>
    </ul>
</template>

<script>
export default {
    props: {
        name: String,
        frameworks: Array
    }
}
</script>

<style>
</style>