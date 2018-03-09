import VueRouter from 'vue-router';

let routes = [
{
	path: '/',
	component: require('./components/Home.vue')
},

{
	path:'/garages',
	component:require('./components/Garages.vue')
},
{
	path:'/garages/ticket',
	component:require('./components/Ticket.vue')
},
{
	path:'/garages/ticket/thankyou',
	component:require('./components/ThankYou.vue')
}


];

export default new VueRouter({
	routes,
	props:['user']
});