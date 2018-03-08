<template>
    <div class="container">
    <div>
        <h1>All The Garages</h1>
       	<input type="button" name="parkHere">
        <router-link to="/home"></router-link>
	</div>

        <div class="form-group">
        <h4>Choose A Garage</h4>
            <div class="col-sm-10 space" v-for="">
                <label class="col-sm-2" for="request_repeat">no</label>
                <input type="button" v-model="garage" value="false">
            </div>
<!-- this functionality will be built when the front end is set up -->
            

    </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>