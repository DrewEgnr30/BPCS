<template>
    <div class="container">
        <div class="d-flex justify-content-center">
            <img :src="image">
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1>Inventory Search Tool</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <p>Welcome to the inventory search tool.  If you would like to see all stock relating to a particular product type (i.e. Recip, Rotary, QAS, Vacuum), please choose Line Search.  If you would like to narrow your search down more and search by product family name (i.e. QGS), please choose Model Search.  These stock levels shown in this report are updated nightly.  If you cannot find the particular unit you are searching for, please contact the factory at <a href="mailto:customerservice@quincycompressor.com">customerservice@quincycompressor.com</a></p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        computed: {
            image() {
                return 'photos/Quincy_logo.jpg'
            }
        }
    }
</script>
<style scoped>
img{
    width: 60%;
    height: auto;
}
p{
    margin-top: 50px;
    margin-bottom: 50px;
}
</style>
