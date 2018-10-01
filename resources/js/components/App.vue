<template>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#" v-on:click="goHome">Quincy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item" v-bind:class="{active: home_active}" v-on:click="goHome" id="home">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item" v-bind:class="{active: line_active}" v-on:click="goLine" id="line">
                        <a class="nav-link" href="#">Line</a>
                    </li>
                    <li class="nav-item" v-bind:class="{active: model_active}" v-on:click="goModel" id="model">
                        <a class="nav-link" href="#">Model</a>
                    </li>
                </ul>
            </div>
        </nav>
        <router-view></router-view>
        <div v-if="buttons" class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-2">
                    <button v-on:click="goLine" class="btn btn-primary">Line Search</button>
                </div>
                <div class="col-2">
                    <button v-on:click="goModel" class="btn btn-primary">Model Search</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data: function () {
            return {
                home_active: true,
                line_active: false,
                model_active: false,
                buttons: true
            }
        },
        methods: {
            goHome: function () {
                this.model_active = false
                this.line_active = false
                this.home_active = true
                this.buttons = true
                this.$router.push({path: '/'})
            },
            goLine: function () {
                this.line_active = true
                this.model_active = false
                this.home_active = false
                this.buttons = false
                this.$router.push({path: 'line'})
            },
            goModel: function () {
                this.line_active = false
                this.model_active = true
                this.home_active = false
                this.buttons = false
                this.$router.push({path: 'model'})
            }
        }
    }
</script>
<style>
</style>
