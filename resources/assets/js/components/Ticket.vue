<template>
    <div class="container">
        
    <h1>Here is your ticket!</h1>
    <h3 v-model="garages" >You are parked in {{ticket.garage_name}}</h3>
    <router-link to="/garages/ticket/thankyou"><input type="button"   value="EXIT NOW" v-on:click="getTicket"></router-link>




    </div>
                 
</template>


<script>
    import axios from 'axios';
    export default {
        name:'garages',
        // props: ['garages'],
        data() {
            return {
                user: [],
                ticket:[],
                loading:true,
                garages: [],

            }
        },

        created() {
        	Event.$on('ticketGiven', () => alert("Here is your ticket"));
            

            var vm = this;
            // console.log(vm);
            // console.log('Component mounted.')
            
        },
        methods: {
            getTicket: function() {
                axios.get('/api/garages')
                    .then((response) =>{
                        // console.log(response.data);
                        vm.garages = response.data
                    }, (error) => {
                        console.log(error);
                    });
                
            }
        }
    }
</script>

<style scoped lang="scss">

.grey-out {
    color:#a9aab4;
    background-color: #a9aab4;
}
.garages {
    h1 {
    padding-top:1em;
    
    }
    h2 {
    padding-top:2em;
    display:inline-block;
    padding-right: 1em;
    }
    h3 {
    padding-top:2em;
    display:inline-block;
    padding-right: 1em;
    }
    input {
    margin-right: 1em;
    padding:1.6em 1em;
    display:inline-block;
    border-radius: 30em;
    border: 0.2em solid #8ccc42;
    tansition: all 0.5s ease;
    font-size:1.4em;
    &:hover {
        background-color: #8ccc42;
        color: #fff;
    }
    &:selected {
        background-color: #8ccc42;
        color: #fff;
    }
    }

}

    
</style>