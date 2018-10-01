<template>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center d-flex justify-content-center">
                <h1>Search By Product Family Name</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label>Family Name</label>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input v-model="model" class="form-control" type="text" placeholder="QGD">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button v-on:click="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
        <table class="table" v-if="models.length > 0">
            <thead>
                <tr>
                    <th scope="col">Part Number</th>
                    <th scope="col">Description</th>
                    <th scope="col">Min Balance</th>
                    <th scope="col">Available</th>
                    <th scope="col">1 Week</th>
                    <th scope="col">2 Week</th>
                    <th scope="col">3 Week</th>
                    <th scope="col">4 Week</th>
                    <th scope="col">5 Week</th>
                    <th scope="col">6+ Week</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="model in models" :key="model.PN">
                    <td>{{model.PN}}</td>
                    <td>{{model.Description}}</td>
                    <td>{{model.min}}</td>
                    <td>{{model.avail}}</td>
                    <td>{{model.one}}</td>
                    <td>{{model.two}}</td>
                    <td>{{model.three}}</td>
                    <td>{{model.four}}</td>
                    <td>{{model.five}}</td>
                    <td>{{model.six}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import {store} from "../store.js"
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        created() {
            this.model = store.state.model
        },
        data: function() {
            return {
                model: '',
                models: []
            }
        },
        methods: {
            submit() {
                store.addUnit(this.model)
                this.$router.push({path: 'model'})
                axios.get(`http://localhost/BPCS/public/api/search/${store.state.model}`)
                    .then(response => {
                        console.log(response.data.length)
                        this.models = response.data
                    })
                    .catch(e => {
                        console.log(this.errors)
                    })
            }
        }
    }
</script>
<style scoped>
.row{
    margin-top: 10px;
}
</style>
