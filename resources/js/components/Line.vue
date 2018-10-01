<template>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center d-flex justify-content-center">
                <h1>Search By Product Line Type</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-2">
                <button v-on:click="recip" class="btn btn-primary">Recip</button>
            </div>
            <div class="col-2">
                <button v-on:click="rotary" class="btn btn-primary">Rotary</button>
            </div>
            <div class="col-2">
                <button v-on:click="qas" class="btn btn-primary">Quality Air</button>
            </div>
            <div class="col-2">
                <button v-on:click="vacuum" class="btn btn-primary">Vacuum</button>
            </div>
        </div>
        <table class="table" v-if="table_recip">
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
        <table class="table" v-if="table_rotary">
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
        <table class="table" v-if="table_qas">
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
        <table class="table" v-if="table_vacuum">
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
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        created() {
            
        },
        data: function () {
            return {
                unit: 'recip',
                models: [],
                table_recip: false,
                table_rotary: false,
                table_qas: false,
                table_vacuum: false,
                errors: []
            }
        },
        methods: {
            recip() {
                axios.get(`http://localhost/BPCS/public/api/unit/recip`)
                .then(response => {
                    this.models = response.data
                    this.table_recip = true;
                    this.table_rotary = false;
                    this.table_qas = false;
                    this.table_vacuum = false;
                })
                .catch(e => {
                    this.errors.push(e)
                    console.log(this.errors)
                })
            },
            rotary() {
                axios.get(`http://localhost/BPCS/public/api/unit/rotary`)
                .then(response => {
                    this.models = response.data
                    this.table_recip = false;
                    this.table_rotary = true;
                    this.table_qas = false;
                    this.table_vacuum = false;
                })
                .catch(e => {
                    this.errors.push(e)
                    console.log(this.errors)
                })
            },
            qas() {
                axios.get(`http://localhost/BPCS/public/api/unit/qas`)
                .then(response => {
                    this.models = response.data
                    this.table_recip = false;
                    this.table_rotary = false;
                    this.table_qas = true;
                    this.table_vacuum = false;
                })
                .catch(e => {
                    this.errors.push(e)
                    console.log(this.errors)
                })
            },
            vacuum() {
                axios.get(`http://localhost/BPCS/public/api/unit/avr`)
                .then(response => {
                    this.models = response.data
                    this.table_recip = false;
                    this.table_rotary = false;
                    this.table_qas = false;
                    this.table_vacuum = true;
                })
                .catch(e => {
                    this.errors.push(e)
                    console.log(this.errors)
                })
            }
        }
    }
</script>
<style scoped>
button{
    width: 150px;
    height:auto;
    margin-top: 40px;
}
table{
    margin-top: 50px;
}
</style>
