<template>
    <div class="container">
     <div>
        <h1>Choose a Garage</h1>
        <div v-for="garage in garages" :key="garage.id"  >
            <h2>{{garage.garage_name}}</h2>
            <h3>There are {{garage.space_remaining}} spots remaining</h3>
            <input type="button" :garageId="garage.id" :name="garage.garage_name" value="PARK HERE">
            
            
            

        </div>
       	
     </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name:'garages',
        data() {
            return {
                garages: [],
                loading:true

            }
        },

        mounted() {
            var vm = this;
            console.log(vm);
            console.log('Component mounted.')
            axios.get('/api/garages')
                    .then((response) =>{
                        console.log(response.data);
                        vm.garages = response.data
                    }, (error) => {
                        console.log(error);
                    });
        }
    }
</script>

<style scoped type="text/scss">
.grey-out {
    color:#a9aab4;
    background-color: #a9aab4;
}

    
</style>