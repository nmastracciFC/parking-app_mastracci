<template >
    <div class="container garages">
     <div>
        <h1>Choose a Garage</h1><h1>{{user.fname}}</h1>
        <div v-for="garage in garages" :key="garage.id"  >
            <router-link to="/garages/ticket"><input type="button" v-bind:ref="garage.id" :name="garage.space_remaining" :id="garage.id" value="PARK HERE" v-on:click="getTicket"></router-link>
            <h2>{{garage.garage_name}}</h2>
            <h3>There are {{garage.space_remaining}} spots remaining</h3>
          
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
                user: [],
                ticketInfo: [],
                loading:true

            }
        },

        mounted() {
            

            var vm = this;
            // console.log(vm);
            // console.log('Component mounted.')
            axios.get('/api/garages')
                    .then((response) =>{
                        // console.log(response.data);
                        vm.garages = response.data
                    }, (error) => {
                        console.log(error);
                    });
        },
        methods: {
            getTicket: function(garage) {
                var spaceRemaining = garage.path[0].name;
                var garageId = garage.path[0].id;
                var ticketInfo = [];
                console.log(user);

                if(spaceRemaining > 0) {
                    console.log("you can have a ticket!");
                    var ticketInfo = [garageId, spaceRemaining ];

                    Event.$emit('ticketGiven');

                    axios.post('/garages/ticket')
                        .then((response) =>{
                        this.user = response.data;
                        console.log(response.data);
                    });
                    axios.get('/api/user')
                        .then((response)=> {
                            console.log(response);
                        })

                } else {
                    alert("There is no room, Please Choose a different garage");
                }
                // 
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