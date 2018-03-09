import VueRouter from 'vue-router';

let routes = [
{
	path: '/',
	component: require('./components/Home.vue')
},

{
	path:'/garages',
	component:require('./components/Garages')
},
{
	path:'/garages/ticket',
	component:require('./components/Ticket')
}


];

export default new VueRouter({

	routes
});